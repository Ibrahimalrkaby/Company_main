@extends('admin.master')

@section('title', __('keywords.create_testimonial'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h2 page-title">{{ __('keywords.add_testimonial') }}</h2>

                <div class="card shadow">
                    <form action="{{ route('admin.testimonial.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <x-form-label field="name"></x-form-label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="name">
                                            <x-error-label field="name"></x-error-label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <x-form-label field="position"></x-form-label>
                                            <input type="text" name="position" id="position" class="form-control"
                                                placeholder="position">
                                            <x-error-label field="position"></x-error-label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <x-form-label field="image"></x-form-label>
                                            <input type="file" name="image" class="form-control" placeholder="image">
                                            <x-error-label field="image"></x-error-label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <x-form-label field="description"></x-form-label>
                                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Description"></textarea>
                                            <x-error-label field="title"></x-error-label>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <x-submit-button></x-submit-button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>


            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
