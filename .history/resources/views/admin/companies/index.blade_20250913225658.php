@extends('admin.master')

@section('title', __('keywords.company'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h2 page-title">{{ __('keywords.company') }}</h2>

                    <div class="page-title-right">

                        <x-action-button href="{{ route('admin.company.create') }}" type="create"></x-action-button>
                    </div>
                </div>

                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.image') }}</th>
                                    <th width="15%">{{ __('keywords.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($companies) > 0)
                                    @foreach ($companies as $key => $company)
                                        <tr>
                                            <td>{{ $features->firstItem() + $loop->index }}</td>
                                            <td>
                                                <img src="{{ asset("storage/companies/$company->image") }}"
                                                    alt="#" width = "50px">
                                                <i class="{{ $company->image }}"></i>
                                            </td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.company.edit', ['company' => $company]) }}"
                                                    type="edit"></x-action-button>
                                                <x-action-button
                                                    href="{{ route('admin.company.show', ['company' => $company]) }}"
                                                    type="show"></x-action-button>
                                                <x-delete-button
                                                    href="{{ route('admin.company.destroy', ['company' => $company]) }}"
                                                    id="{{ $company->id }}"></x-delete-button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $companies->render('pagination::bootstrap-4') }}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
