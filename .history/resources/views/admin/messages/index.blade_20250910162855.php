@extends('admin.master')

@section('title', __('keywords.message'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h2 page-title">{{ __('keywords.message') }}</h2>

                </div>

                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="15%">{{ __('keywords.name') }}</th>
                                    <th width="15%">{{ __('keywords.email') }}</th>
                                    <th>{{ __('keywords.title') }}</th>
                                    <th width="15%">{{ __('keywords.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($messages) > 0)
                                    @foreach ($messages as $key => $message)
                                        <tr>
                                            <td>{{ $messages->firstItem() + $loop->index }}</td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>
                                                <i class="{{ $message->title }}"></i>
                                            </td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.message.edit', ['message' => $message]) }}"
                                                    type="edit"></x-action-button>
                                                <x-action-button
                                                    href="{{ route('admin.message.show', ['message' => $message]) }}"
                                                    type="show"></x-action-button>
                                                <x-delete-button
                                                    href="{{ route('admin.message.destroy', ['message' => $message]) }}"
                                                    id="{{ $message->id }}"></x-delete-button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $messages->render('pagination::bootstrap-4') }}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
