@extends('admin.master')

@section('title', __('keywords.services'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Basic table</h2>
                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Simple Table</h5>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('keywords.title') }}</th>
                                    <th>{{ __('keywords.description') }}</th>
                                    <th>{{ __('keywords.icon') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @if (count($services)>0)
                                    @for ($services as $key => $service)
                                    <tr>
                                        <td>{{ $services->firstItem() + $loop->$index }}</td>
                                        <td>{{ $service->title }}</td>
                                        <td>
                                            <i class="{{ service->icon }}"></i>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.service.show') }}">Show</a>
                                            <a href="{{ route('admin.service.edit') }}">Edit</a>
                                            <a href="{{ route('admin.service.destroy') }}">Delete</a>
                                        </td>
                                    </tr>
                                        
                                    @endfor
                                        
                                    @endif
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
