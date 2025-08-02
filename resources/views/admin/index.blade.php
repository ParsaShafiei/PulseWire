@extends('admin.layouts.master')

@section('title', 'Dashboard')


@section('content')
    <div class="mt-3 row">

        <div class="col-sm-6 col-lg-3">
            <a href="" class="text-decoration-none">
                <div class="mb-3 text-white card bg-gradiant-green-blue">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i
                                class="fas fa-clipboard-list"></i> Categories</span> <span
                            class="badge badge-pill right"></span></div>
                    <div class="card-body">
                        <section class="my-0 font-12"><i class="fas fa-clipboard-list"></i> GO TO Categories!</section>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="" class="text-decoration-none">
                <div class="mb-3 text-white card bg-juicy-orange">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i
                                class="fas fa-users"></i> Users</span> <span class="badge badge-pill right"></span></div>
                    <div class="card-body">
                        <section class="d-flex justify-content-between align-items-center font-12">
                            <span class=""><i class="fas fa-users-cog"></i> Admin <span
                                    class="mx-1 badge badge-pill"></span></span>
                            <span class=""><i class="fas fa-user"></i> All Users <span
                                    class="mx-1 badge badge-pill"></span></span>
                        </section>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="" class="text-decoration-none">
                <div class="mb-3 text-white card bg-dracula">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i
                                class="fas fa-newspaper"></i> Article</span> <span class="badge badge-pill right"></span>
                    </div>
                    <div class="card-body">
                        <section class="d-flex justify-content-between align-items-center font-12">
                            <span class=""><i class="fas fa-bolt"></i> Views <span
                                    class="mx-1 badge badge-pill"></span></span>
                        </section>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="" class="text-decoration-none">
                <div class="mb-3 text-white card bg-neon-life">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i
                                class="fas fa-comments"></i> Comment</span> <span class="badge badge-pill right"></span>
                    </div>
                    <div class="card-body">
                        <!--                        <h5 class="card-title">Info card title</h5>-->
                        <section class="d-flex justify-content-between align-items-center font-12">
                            <span class=""><i class="far fa-eye-slash"></i> Unseen <span
                                    class="mx-1 badge badge-pill"></span></span>
                            <span class=""><i class="far fa-check-circle"></i> Approved <span
                                    class="mx-1 badge badge-pill"></span></span>
                        </section>
                    </div>
                </div>
            </a>
        </div>

    </div>


    <div class="mt-2 row">
        <div class="col-4">
            <h2 class="pb-0 mb-0 h6">
                Most viewed posts
            </h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>title</th>
                            <th>view</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <a class="text-primary" href="">
                                    ss
                                </a>
                            </td>
                            <td>
                                ss
                            </td>
                            <td><span class="badge badge-secondary">ss</span></td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4">
            <h2 class="pb-0 mb-0 h6">
                Most commented posts

            </h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>title</th>
                            <th>comment</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <a class="text-primary" href="">
                                    ss
                                </a>
                            </td>
                            <td>
                                ss
                            </td>
                            <td><span class="badge badge-success">ss</span></td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4">
            <h2 class="pb-0 mb-0 h6">
                Comments
            </h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>username</th>
                            <th>comment</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>
                            <td>
                                <a class="text-primary" href="">
                                    ss
                                </a>
                            </td>
                            <td>
                                ss
                            </td>
                            <td>
                                ss
                            </td>
                            <td><span class="badge badge-warning">ss</span></td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
