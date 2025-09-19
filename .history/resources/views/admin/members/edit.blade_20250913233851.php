@extends('admin.master')

@section('title', __('keywords.edit_service'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h2 page-title">{{ __('keywords.edit_service') }}</h2>

                <div class="card shadow">
                    <form action="{{ route('admin.service.update', ['service' => $service]) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf


                        <div class="card-body">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <x-form-label field="name"></x-form-label>
                                            <input type="text" name="name" id="name" class="form-control" value="{{ $testimonial->name }}">
                                            <x-error-label field="name"></x-error-label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <x-form-label field="position"></x-form-label>
                                            <input type="text" name="position" id="position" class="form-control" value="{{ $testimonial->position }}">
                                            <x-error-label field="position"></x-error-label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <x-form-label field="facebook"></x-form-label>
                                            <input type="text" name="facebook" id="facebook" class="form-control" value="{{ $testimonial->facebook }}">
                                            <x-error-label field="facebook"></x-error-label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <x-form-label field="twitter"></x-form-label>
                                            <input type="text" name="twitter" id="twitter" class="form-control" value="{{ $testimonial->twitter }}">
                                            <x-error-label field="twitter"></x-error-label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <x-form-label field="linkedin"></x-form-label>
                                            <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ $testimonial->linkedin }}">
                                            <x-error-label field="linkedin"></x-error-label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <x-form-label field="image"></x-form-label>
                                            <input type="file" name="image" class="form-control">
                                            <x-error-label field="image"></x-error-label>
                                        </div>
                                    </div>

                                </div>

                                <div>
                                    <button type="submit"
                                        class="btn btn-primary btn-sm mt=3">{{ __('keywords.submit') }}</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>


            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
