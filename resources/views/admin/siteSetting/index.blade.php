@extends('admin.layouts.master')

@section('title', 'Post')


@section('content')

    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h5"><i class="fas fa-newspaper"></i> Website Setting</h1>
        <div class="mb-2 btn-toolbar mb-md-0">
            <a role="button" href="{{ route('admin.websetting.edit') }}" class="btn btn-sm btn-success">set web
                setting</a>
        </div>
    </div>
    <section class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>Website setting</caption>
            <thead>
                <tr>
                    <th>name</th>
                    <th>value</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>title</td>
                    <td>
                        {{ $settings->title }}
                    </td>
                </tr>
                <tr>
                    <td>description</td>
                    <td>
                        {{ $settings->description }}
                    </td>
                </tr>
                <tr>
                    <td>key words</td>
                    <td>
                        {{ $settings->keywords }}

                    </td>
                </tr>
                <tr>
                    <td>Logo</td>
                    <td><img src="{{ $settings->logo }}" alt="" width="100px" height="100px"></td>
                </tr>
                <tr>
                    <td>Icon</td>
                    <td><img src="{{ $settings->icon }}" alt="" width="100px" height="100px"> </td>
                </tr>
            </tbody>
        </table>
    </section>


@endsection
