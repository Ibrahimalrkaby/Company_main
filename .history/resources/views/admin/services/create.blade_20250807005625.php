@extends('admin.master')

@section('title', __('keywords.services'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h2 page-title">{{ __('keywords.add_service') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">{{ __('keywords.title') }}</label>
                                        <input type="title" id="simpleinput" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">{{ __('keywords.title') }}</label>
                                        <input type="title" id="simpleinput" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-readonly">Readonly</label>
                                        <input type="text" id="example-readonly" class="form-control" readonly=""
                                            value="Readonly value">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-disable">Disabled</label>
                                        <input type="text" class="form-control" id="example-disable" disabled=""
                                            value="Disabled value">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-static">Static control</label>
                                        <input type="text" readonly="" class="form-control-plaintext"
                                            id="example-static" value="j@example.com">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
