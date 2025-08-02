@extends('admin.layouts.master')

@section('title', 'Banner')


@section('content')

    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h5"><i class="fas fa-image"></i> Banner</h1>
        <div class="mb-2 btn-toolbar mb-md-0">
            <a role="button" href="{{ route('admin.banner.create') }}" class="btn btn-sm btn-success">create</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>List of banners</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>url</th>
                    <th>image</th>
                    <th>setting</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($banners as $banner)
                    <tr>
                        <td>
                            {{ $loop->iteration }} </td>
                        <td>
                            {{ $banner->url }} </td>
                        <td><img style="width: 80px;" src="{{ $banner->image }}" alt=""></td>
                        <td>
                            <a role="button" class="text-white btn btn-sm btn-primary"
                                href="{{ route('admin.banner.edit', $banner) }}">edit</a>
                            <form action="{{ route('admin.banner.destroy', $banner) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-white btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

@endsection
