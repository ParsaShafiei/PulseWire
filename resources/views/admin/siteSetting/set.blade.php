@extends('admin.layouts.master')

@section('title', 'Post')


@section('content')

    <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Set Web Setting</h1>
    </section>

    <section class="my-3 row">
        <section class="col-12">

            <form method="post" action="{{ route('admin.websetting.store') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title ..."
                        value="{{ $settings->title }}" autofocus>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="Enter title ..." value="{{ $settings->description }}" autofocus>
                </div>

                <div class="form-group">
                    <label for="keywords">Keywords</label>
                    <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Enter title ..."
                        value="{{ $settings->keywords }}" autofocus>
                </div>


                <div class="form-group">

                    <img style="width: 100px;" src="" alt="">
                    <hr />

                    <label for="logo">Logo</label>
                    <input type="file" id="logo" name="logo" class="form-control-file" autofocus>
                    <img src="{{ $settings->logo }}" alt="">
                </div>

                <div class="form-group">

                    <img style="width: 100px;" src="" alt="">
                    <hr />

                    <label for="icon">Icon</label>
                    <input type="file" id="icon" name="icon" class="form-control-file" autofocus>
                    <img src="{{ $settings->logo }}" alt="">

                </div>

                <button type="submit" class="btn btn-primary btn-sm">set</button>
            </form>
        </section>
    </section>



@endsection
