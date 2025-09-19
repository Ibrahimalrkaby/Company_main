@extends('admin.master')

@section('title', __('keywords.create_service'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h2 page-title">{{ __('keywords.add_service') }}</h2>

                <div class="card shadow">
                    <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <x-form-label field="title"></x-form-label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                placeholder="Title">
                                            @error('title')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="icon">{{ __('keywords.icon') }}</label>
                                            <input type="text" name="icon" id="icon" class="form-control">
                                            @error('icon')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="description">{{ __('keywords.description') }}</label>
                                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Description"></textarea>
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
