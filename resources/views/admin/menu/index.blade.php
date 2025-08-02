@extends('admin.layouts.master')

@section('title', 'Post')


@section('content')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h5"><i class="fas fa-newspaper"></i> Menus</h1>
        <div class="mb-2 btn-toolbar mb-md-0">
            <a role="button" href="{{ route('admin.menu.create') }}" class="btn btn-sm btn-success">create</a>
        </div>
    </div>
    <section class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>List of menus</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>url</th>
                    <th>parent ID</th>
                    <th>setting</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $menu->name }}
                        </td>
                        <td>
                            {{ $menu->url }}
                        </td>
                        <td>
                            @if ($menu->parent_id)
                                {{ $menu->parent_id }}
                            @else
                                Null
                            @endif
                        </td>
                        <td>
                            <a role="button" class="text-white btn btn-sm btn-primary"
                                href="{{ route('admin.menu.edit', $menu) }}">edit</a>
                            <form action="{{ route('admin.menu.destroy', $menu) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-white btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </section>


@endsection
