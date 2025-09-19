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
                                        <label for="title">{{ __('keywords.title') }}</label>
                                        <p class="form-control">{{ $service->title }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="icon">{{ __('keywords.icon') }}</label>
                                        <div>
                                            <i class="{{ $service->icon }}"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="description">{{ __('keywords.description') }}</label>
                                        <p class="form-control">{{ $service->description }}</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
