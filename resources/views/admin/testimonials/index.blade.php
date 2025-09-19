@extends('admin.master')

@section('title', __('keywords.testimonial'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h2 page-title">{{ __('keywords.testimonial') }}</h2>

                    <div class="page-title-right">

                        <x-action-button href="{{ route('admin.testimonial.create') }}" type="create"></x-action-button>
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
                                    <th width="20%">{{ __('keywords.name') }}</th>
                                    <th>{{ __('keywords.position') }}</th>
                                    <th width="20%">{{ __('keywords.image') }}</th>
                                    <th width="15%">{{ __('keywords.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($testimonials) > 0)
                                    @foreach ($testimonials as $key => $testimonial)
                                        <tr>
                                            <td>{{ $testimonials->firstItem() + $loop->index }}</td>
                                            <td>{{ $testimonial->name }}</td>
                                            <td>{{ $testimonial->position }}</td>
                                            <td>
                                                <img src="{{ asset("testimonials/$testimonial->image") }}" alt="#"
                                                    width = "50px">
                                                <i class="{{ $testimonial->image }}"></i>
                                            </td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.testimonial.edit', ['testimonial' => $testimonial]) }}"
                                                    type="edit"></x-action-button>
                                                <x-action-button
                                                    href="{{ route('admin.testimonial.show', ['testimonial' => $testimonial]) }}"
                                                    type="show"></x-action-button>
                                                <x-delete-button
                                                    href="{{ route('admin.testimonial.destroy', ['testimonial' => $testimonial]) }}"
                                                    id="{{ $testimonial->id }}"></x-delete-button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $testimonials->render('pagination::bootstrap-4') }}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
