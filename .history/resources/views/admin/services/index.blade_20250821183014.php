@extends('admin.master')

@section('title', __('keywords.service'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h2 page-title">{{ __('keywords.service') }}</h2>

                    <div class="page-title-right">

                        <x-action-button href="{{ route('admin.service.create') }}" type="create"></x-action-button>
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
                                                <x-action-button
                                                    href="{{ route('admin.service.edit', ['service' => $service]) }}"
                                                    type="edit"></x-action-button>
                                                <x-action-button
                                                    href="{{ route('admin.service.show', ['service' => $service]) }}"
                                                    type="show"></x-action-button>
                                                {{-- <form
                                                    action="{{ route('admin.service.destroy', ['service' => $service]) }}"
                                                    method='post' class="d-inline" id="deleteForm-{{ $service->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        onclick="conformDelete({{ $service->id }})"><i
                                                            class="fe fe-trash-2 fa-2x"></i></button>
                                                </form> --}}
                                                <x-delete-button
                                                    href="{{ route('admin.service.destroy', ['service' => $service]) }}"
                                                    id="{{ $service->id }}"></x-delete-button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $services->render('pagination::bootstrap-4') }}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        function conformDelete(id) {
            if (confirm('Are you sure you want to delete this service?')) {
                document.getElementById('deleteForm-' + id).submit();
            }
        }
    </script>
@endsection
