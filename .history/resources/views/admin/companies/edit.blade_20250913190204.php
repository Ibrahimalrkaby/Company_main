@extends('admin.master')

@section('title', __('keywords.edit_testimonial'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h2 page-title">{{ __('keywords.edit_testimonial') }}</h2>

                <div class="card shadow">
                    <form action="{{ route('admin.testimonial.update', ['testimonial' => $testimonial]) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf


                        <div class="card-body">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <x-form-label field="image"></x-form-label>
                                            <input type="file" name="image" class="form-control" placeholder="image">
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
