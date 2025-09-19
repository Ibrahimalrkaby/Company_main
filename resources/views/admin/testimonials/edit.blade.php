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
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="name">{{ __('keywords.name') }}</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="name" value="{{ $testimonial->name }}">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="position">{{ __('keywords.position') }}</label>
                                            <input type="text" name="position" id="position" class="form-control"
                                                value="{{ $testimonial->position }}">
                                            @error('position')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
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
                                            <label for="description">{{ __('keywords.description') }}</label>
                                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Description">{{ $testimonial->description }}</textarea>
                                            @error('description')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
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
