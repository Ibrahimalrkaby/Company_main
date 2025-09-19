@extends('admin.master')

@section('title', __('keywords.show_service'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h2 page-title">{{ __('keywords.show_service') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">{{ __('keywords.name') }}</label>
                                        <p class="form-control">{{ $service->name }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="position">{{ __('keywords.position') }}</label>
                                        <p class="form-control">{{ $service->position }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="facebook">{{ __('keywords.facebook') }}</label>
                                        <p class="form-control">{{ $service->facebook }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="twitter">{{ __('keywords.twitter') }}</label>
                                        <p class="form-control">{{ $service->twitter }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                                        <p class="form-control">{{ $service->linkedin }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
