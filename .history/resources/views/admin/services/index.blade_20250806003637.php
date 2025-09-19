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
                                                <a href="#" class="btn btn-sm btn-primary">
                                                    <i class="fe fe-edit fa-2x"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger">
                                                    <i class="fe fe-trash-2 fa-2x"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4">
                                            <div class="alert alert-danger">{{ __('keywords.record_not_found') }}</div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $services->render('pagination::bootstrap-4') }}
                    </div>
                </div>

            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
