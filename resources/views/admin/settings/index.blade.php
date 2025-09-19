@extends('admin.master')

@section('title', __('keywords.setting'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h2 page-title">{{ __('keywords.setting') }}</h2>

                <div class="card shadow">
                    <x-success-alert></x-success-alert>
                    <form action="{{ route('admin.setting.update', ['setting' => $setting]) }}" method="post"
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
                                                placeholder="address" value="{{ $setting->address }}">
                                            @error('address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="email">{{ __('keywords.email') }}</label>
                                            <input type="text" name="email" id="email" class="form-control"
                                                placeholder="email" value="{{ $setting->email }}">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="phone">{{ __('keywords.phone') }}</label>
                                            <input type="text" name="phone" id="phone" class="form-control"
                                                placeholder="phone" value="{{ $setting->phone }}">
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="facebook">{{ __('keywords.facebook') }}</label>
                                            <input type="text" name="facebook" id="facebook" class="form-control"
                                                placeholder="facebook" value="{{ $setting->facebook }}">
                                            @error('facebook')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="youtube">{{ __('keywords.youtube') }}</label>
                                            <input type="text" name="youtube" id="youtube" class="form-control"
                                                placeholder="youtube" value="{{ $setting->youtube }}">
                                            @error('youtube')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="instagram">{{ __('keywords.instagram') }}</label>
                                            <input type="text" name="instagram" id="instagram" class="form-control"
                                                placeholder="instagram" value="{{ $setting->instagram }}">
                                            @error('instagram')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                                            <input type="text" name="linkedin" id="linkedin" class="form-control"
                                                placeholder="linkedin" value="{{ $setting->linkedin }}">
                                            @error('linkedin')
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
