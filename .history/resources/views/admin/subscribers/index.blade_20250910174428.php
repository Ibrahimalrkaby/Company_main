@extends('admin.master')

@section('title', __('keywords.subscriber'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h2 page-title">{{ __('keywords.subscriber') }}</h2>

                </div>

                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.email') }}</th>
                                    <th width="15%">{{ __('keywords.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($subscribers) > 0)
                                    @foreach ($subscribers as $key => $subscriber)
                                        <tr>
                                            <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                                            <td>{{ $subscriber->name }}</td>
                                            <td>{{ $subscriber->email }}</td>
                                            <td>
                                                <i class="{{ $subscriber->title }}"></i>
                                            </td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.subscriber.show', ['subscriber' => $subscriber]) }}"
                                                    type="show"></x-action-button>
                                                <x-delete-button
                                                    href="{{ route('admin.subscriber.destroy', ['subscriber' => $subscriber]) }}"
                                                    id="{{ $subscriber->id }}"></x-delete-button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $subscribers->render('pagination::bootstrap-4') }}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
