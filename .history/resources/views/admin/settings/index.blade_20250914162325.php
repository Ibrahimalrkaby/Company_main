@extends('admin.master')

@section('title', __('keywords.edit_service'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h2 page-title">{{ __('keywords.edit_service') }}</h2>

                <div class="card shadow">
                    <x-success-alert></x-success-alert>
                    <form action="{{ route('admin.service.update', ['service' => $service]) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf


                        <div class="card-body">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="address">{{ __('keywords.address') }}</label>
                                            <input type="text" name="address" id="address" class="form-control"
                                                placeholder="address" value="{{ $service->title }}">
                                            @error('address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="email">{{ __('keywords.email') }}</label>
                                            <input type="text" name="email" id="email" class="form-control"
                                                placeholder="email" value="{{ $service->title }}">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="phone">{{ __('keywords.phone') }}</label>
                                            <input type="text" name="phone" id="phone" class="form-control"
                                                placeholder="phone" value="{{ $service->title }}">
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="facebook">{{ __('keywords.facebook') }}</label>
                                            <input type="text" name="facebook" id="facebook" class="form-control"
                                                placeholder="facebook" value="{{ $service->title }}">
                                            @error('facebook')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="youtube">{{ __('keywords.youtube') }}</label>
                                            <input type="text" name="youtube" id="youtube" class="form-control"
                                                placeholder="youtube" value="{{ $service->title }}">
                                            @error('youtube')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="instagram">{{ __('keywords.instagram') }}</label>
                                            <input type="text" name="instagram" id="instagram" class="form-control"
                                                placeholder="instagram" value="{{ $service->title }}">
                                            @error('instagram')
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
