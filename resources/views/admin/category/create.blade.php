@extends('admin.layouts.master')

@section('title', 'Dashboard')


@section('content')


    @include('admin.layouts.partials.errors')

    <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Create Category</h1>
    </section>
    <section class="my-3 row">
        <section class="col-12">
            <form method="post" action="{{ route('admin.category.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name ...">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">store</button>
            </form>
        </section>

    @endsection
