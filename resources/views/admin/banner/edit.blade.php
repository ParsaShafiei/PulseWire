@extends('admin.layouts.master')

@section('title', 'Banner')


@section('content')


    @include('admin.layouts.partials.errors')

    <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Edit Banner</h1>
    </section>

    <section class="my-3 row">
        <section class="col-12">

            <form method="post" action="{{ route('admin.banner.update', $banner) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Enter url ..."
                        value="{{ $banner->url }}" required autofocus>
                </div>


                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" class="form-control-file" autofocus>
                    <img src="{{ $banner->image }}" alt="" width="100" height="100">
                </div>

                <button type="submit" class="btn btn-primary btn-sm">store</button>
            </form>
        </section>
    </section>


@endsection
