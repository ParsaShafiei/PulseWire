@extends('admin.layouts.master')

@section('title', 'Dashboard')


@section('content')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h5"><i class="fas fa-newspaper"></i> Categories</h1>
        <div class="mb-2 btn-toolbar mb-md-0">
            <a role="button" href="{{ route('admin.category.create') }}" class="btn btn-sm btn-success">create
            </a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>List of categories</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>setting</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>
                            {{ $loop->iteration }} </td>
                        <td>
                            {{ $category->name }} </td>
                        <td>
                            <a role="button" href="{{ route('admin.category.edit', $category->id) }}"
                                class="mx-1 my-0 text-white btn btn-sm btn-info">update</a>
                            <form action="{{ route('admin.category.destroy', $category) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mx-1 my-0 text-white btn btn-sm btn-danger">Delete</button>

                            </form>


                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection
