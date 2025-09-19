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
                                    <td>3224</td>
                                    <td>Keith Baird</td>
                                    <td>Enim Limited</td>
                                    <td>901-6206 Cras Av.</td>
                                    <td>Apr 24, 2019</td>
                                    <td><span class="badge badge-pill badge-warning">Hold</span></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
