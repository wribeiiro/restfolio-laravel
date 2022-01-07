@extends('layouts.app')

@section('content')

    <div class="bd-example mt-5">

        <div class="terminal" id="terminal">
            <div class="terminal-bar">
                <div class="btns">
                    <span class="circle bg-warning"></span>
                    <span class="circle bg-success"></span>
                    <span class="circle bg-danger"></span>
                </div>
                <div class="terminal-title text-center">Wellisson Ribeiro - Portfólio</div>
            </div>

            <div class="body">
                <div class="d-flex justify-content-center">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <div class="d-flex justify-content-start">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" value="">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button">Filter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text">
                                <ul class="list-group">
                                    <li class="list-group-item justify-content-start">
                                        <span class=""><i class="fa fa-folder-open"></i> Well Request</span>

                                        <ul class="list-group mt-2">
                                            <li class="list-group-item d-flex justify-content-start align-items-center list-group-item-action no-border">
                                                <span class="badge badge-success badge-pill mr-3">GET</span>
                                                <span class="">About</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-start align-items-center list-group-item-action no-border">
                                                <span class="badge badge-success badge-pill mr-3">GET</span>
                                                <span class="">Education</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-start align-items-center list-group-item-action no-border">
                                                <span class="badge badge-success badge-pill mr-3">GET</span>
                                                <span class="">Skills & Experience</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-start align-items-center list-group-item-action no-border">
                                                <span class="badge badge-success badge-pill mr-3">GET</span>
                                                <span class="">Works & Projects</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-start align-items-center list-group-item-action no-border">
                                                <span class="badge badge-success badge-pill mr-3">GET</span>
                                                <span class="">Contact</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <div class="d-flex justify-content-start">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <select class="btn btn-outline-secondary" name="" id="">
                                                <option value="GET">GET</option>
                                                <option value="GET">POST</option>
                                            </select>
                                        </div>

                                        <input type="text" class="form-control" placeholder="" value="{{env('APP_URL')}}/about/well" readonly>

                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="request-tab" data-toggle="tab" href="#request" role="tab" aria-controls="json" aria-selected="true">Request</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="request" role="tabpanel" aria-labelledby="request-tab">
                                        <div div class="preview-code">
                                            <br>
                                            <pre>
{
    "_id": "61ca20892b443cd31c55e167",
    "index": 0,
    "guid": "08dbd9ba-013b-4d51-8eff-83681f8a6e47",
    "isActive": true,
    "balance": "$3,196.50",
    "picture": "http://placehold.it/32x32",
    "age": 34,
    "eyeColor": "blue",
    "name": "Pratt House"
}
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <span class="badge badge-success ml-2 mt-2">200 OK</span>
                                    <span class="badge badge-purple ml-2 mt-2">TIME 30ms</span>
                                    <span class="badge badge-success ml-2 mt-2">SIZE 12B</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="response-tab" data-toggle="tab" href="#response" role="tab" aria-controls="response" aria-selected="true">Response</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="response" role="tabpanel" aria-labelledby="response-tab">
                                        <div div class="preview-code">
                                            <br>
                                            <pre>
{
    "_id": "61ca20892b443cd31c55e167",
    "index": 0,
    "guid": "08dbd9ba-013b-4d51-8eff-83681f8a6e47",
    "isActive": true,
    "balance": "$3,196.50",
    "picture": "http://placehold.it/32x32",
    "age": 34,
    "eyeColor": "blue",
    "name": "Pratt House"
}
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </pre>
            </div>
        </div>
    </div>
@endsection
