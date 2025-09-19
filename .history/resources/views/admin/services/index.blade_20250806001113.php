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
                                @if (count($services) > 0)
                                    @foreach ($services as $key => $service)
                                        <tr>
                                            <td>{{ $services->firstItem() + $loop->index }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td>{{ $service->description }}</td>
                                            <td>
                                                <i class="{{ $service->icon }}"></i>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-success">
                                                    <i class="fe fe-eye fa-2x"></i>
                                                </a>
                                                <a href="#">Edit</a>
                                                <a href="#">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
