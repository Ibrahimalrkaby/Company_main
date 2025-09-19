@extends('admin.master')

@section('title', __('keywords.show_company'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h2 page-title">{{ __('keywords.show_company') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">


                                        <label for="image">{{ __('keywords.image') }}</label>
                                        <div>
                                            <img src="{{ asset("storage/companys/$company->image") }}"
                                                    alt="#" width = "50px">
                                                <i class="{{ $company->image }}"></i>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
