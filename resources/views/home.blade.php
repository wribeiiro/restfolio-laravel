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
                <div class="d-flex">
                    <div class="card flex-fill" style="max-width: 30%">
                        <div class="card-body">
                            <div class="card-header">
                                <div class="d-flex justify-content-start">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for some resource" value="" id="input-search">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="btn-filter">Filter</button>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="card-text mt-4">
                                    <ul class="list-group">
                                        <li class="list-group-item justify-content-start">
                                            <span class=""><i class="fa fa-folder-open"></i> Well Request</span>

                                            <ul class="list-group mt-2">
                                                <li class="list-group-item d-flex justify-content-start align-items-center list-group-item-action no-border" data-endpoint="about">
                                                    <span class="badge badge-success badge-pill mr-3">GET</span>
                                                    <span class="">About</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-start align-items-center list-group-item-action no-border" data-endpoint="education">
                                                    <span class="badge badge-success badge-pill mr-3">GET</span>
                                                    <span class="">Education</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-start align-items-center list-group-item-action no-border" data-endpoint="experience">
                                                    <span class="badge badge-success badge-pill mr-3">GET</span>
                                                    <span class="">Experience</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-start align-items-center list-group-item-action no-border" data-endpoint="skills">
                                                    <span class="badge badge-success badge-pill mr-3">GET</span>
                                                    <span class="">Skills</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-start align-items-center list-group-item-action no-border" data-endpoint="works">
                                                    <span class="badge badge-success badge-pill mr-3">GET</span>
                                                    <span class="">Works & Projects</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-start align-items-center list-group-item-action no-border" data-endpoint="contact">
                                                    <span class="badge badge-success badge-pill mr-3">GET</span>
                                                    <span class="">Contact</span>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card flex-fill" style="max-width: 70%">
                        <div class="card-body">
                            <div class="card-header">
                                <div class="d-flex justify-content-start">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <select class="btn btn-outline-secondary" name="" id="">
                                                <option value="GET" selected>GET</option>
                                                <option value="POST" disabled>POST</option>
                                            </select>
                                        </div>

                                        <input type="text" class="form-control" placeholder="" value="{{env('APP_URL')}}/" readonly id="request-field">

                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="request-button">Send</button>
                                        </div>
                                    </div>

                                    <div class="ml-5 d-flex justify-content-between align-items-center">
                                        <span class="badge badge-success ml-2 mt-3" id="http-status">200 OK</span>
                                        <span class="badge badge-purple ml-2 mt-3" id="http-time">TIME 30ms</span>
                                        <span class="badge badge-success ml-2 mt-3" id="http-size">SIZE 12B</span>
                                    </div>
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
                                        <div class="response-code">
                                            <br>
                                            <pre id="pre-response-code" style="max-height: 470px; overflow: auto;">{<br>}</pre>
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
@section('custom-script')
    <script src="{{asset('js/main.js')}}"></script>
@endsection
@endsection
