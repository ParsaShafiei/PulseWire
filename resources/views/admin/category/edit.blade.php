@extends('admin.layouts.master')

@section('title', 'Dashboard')


@section('content')

    <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Edit Category</h1>
    </section>

    <section class="my-3 row">
        <section class="col-12">
            <form method="post" action="{{ route('admin.category.update', $category) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name ..."
                        value="{{ $category->name }}">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">update</button>
            </form>
        </section>
    </section>


@endsection
