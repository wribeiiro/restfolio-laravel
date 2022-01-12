$(document).ready(() => {
    $('.list-group-item-action').first().trigger('click')
    profileRequest($('.list-group-item-action.active').attr('data-endpoint'));
})

$('.list-group-item-action').click(function () {
    $('.list-group-item-action').removeClass('active')
    $(this).addClass('active')

    const resource = $(this).attr('data-endpoint') + '/well'
    $('#request-field').val(endpoint + resource)
});

$('#input-search').on('keypress',function(e) {
    if (e.which === 13) {
        filterResources();
    }
});

$('#btn-filter').click(function() {
    filterResources();
});

$('#request-button').click(function(e) {
    e.preventDefault();
    profileRequest($('.list-group-item-action.active').attr('data-endpoint'));
});

function filterResources() {
    const textToSearch = $("#input-search").val().toLowerCase();

    if (textToSearch.trim() === '') {
        $(".list-group-item-action").addClass('d-flex').css("display", "block");
        return;
    }

    $(".list-group-item-action").each(function () {
        const textInList = $(this).find('span').last().text().toLowerCase();

        if (textInList.indexOf(textToSearch) < 0) {
            $(this).removeClass('d-flex').css("display", "none");
        }
    });
}

function profileRequest(param) {
    const ajaxTime = new Date().getTime();

    $.ajax({
        url: `${endpoint}profile/`,
        type: 'GET',
        dataType: 'JSON',
        data: {
            param: param
        },
        beforeSend: (xhr) => {
            xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
            $('#pre-response-code').html('{<br> Processing request... <br>}')
        },
        success: (response) => {
            $('#http-status')
                .text(`${response.status.code} ${response.status.text}`)
                .removeClass(response.status.label)
                .addClass(response.status.label)

            $('#http-size').text(`SIZE ${response.toString().length}`)
            $('#http-time').text(`TIME ${new Date().getTime() - ajaxTime}ms`)
            $('#pre-response-code').html(formatJSONHightlight(JSON.stringify(response, null, 2)))
        },
        error: (response) => {
            const error = response.responseJSON;

            $('#http-status')
                .text(`${error.status.code} ${error.status.text}`)
                .removeClass(error.status.label)
                .addClass(error.status.label)

            $('#http-size').text(`SIZE ${error.toString().length}`)
            $('#http-time').text(`TIME ${new Date().getTime() - ajaxTime}ms`)
            $('#pre-response-code').html(formatJSONHightlight(JSON.stringify(error, null, 2)))
        }
    });
}

function formatJSONHightlight(json) {
    json = json.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');

    return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
        let cls = 'number';

        if (/^"/.test(match)) {
            cls = 'key';

            if (/:$/.test(match)) {
                cls = 'string';
            }
        } else if (/true|false/.test(match)) {
            cls = 'boolean';
        } else if (/null/.test(match)) {
            cls = 'null';
        }

        if (match.includes('http') || match.includes('https')) {
            match = `<a class="${cls}" href="${match}" target="_blank">${match}</a>`;
        }

        return '<span class="' + cls + '">' + match + '</span>';
    });
}
