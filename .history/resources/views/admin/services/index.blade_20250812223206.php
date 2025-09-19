@extends('admin.master')

@section('title', __('keywords.services'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h2 page-title">{{ __('keywords.service') }}</h2>

                    <div class="page-title-right">
                        <a href="{{ route('admin.service.create') }}"
                            class="btn btn-sm btn-primary">{{ __('keywords.add_new') }}</a>
                    </div>
                </div>

                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.title') }}</th>
                                    <th width="10%">{{ __('keywords.icon') }}</th>
                                    <th width="15%">{{ __('keywords.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($services) > 0)
                                    @foreach ($services as $key => $service)
                                        <tr>
                                            <td>{{ $services->firstItem() + $loop->index }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td>
                                                <i class="{{ $service->icon }}"></i>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.service.show', ['service' => $service]) }}"
                                                    class="btn btn-sm btn-success">
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
