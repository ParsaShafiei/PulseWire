@extends('app.Layouts.master')
@section('title', 'PulseWire')

@section('content')
    <section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-8 post-list">
                    <!-- Start single-post Area -->
                    <div class="single-post-wrap">
                        <div class="relative feature-img-thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="{{ asset(trim($post->image, '\/')) }}" alt="">
                        </div>
                        <div class="content-wrap">
                            <ul class="mt-10 tags">
                                <li><a href="#">{{ $post->category->name }}</a></li>
                            </ul>
                            <a href="#">
                                <h3>{{ $post->title }}</h3>
                            </a>
                            <ul class="pb-20 meta">
                                <li><a href="#"><span class="lnr lnr-user"></span>{{ $post->user->name }}</a></li>
                                <li><a href="#">{{ jdate($post->created_at)->format('%B %d %Y') }}<span
                                            class="lnr lnr-calendar-full"></span></a></li>
                                <li><a href="#">{{ $post->comments->count() }}<span class="lnr lnr-bubble"></span></a>
                                </li>
                            </ul>
                            {!! $post->body !!}

                            <div class="navigation-wrap justify-content-between d-flex">
                                <a class="prev" href="#"><span class="lnr lnr-arrow-right"></span>خبر بعدی</a>
                                <a class="next" href="#">خبر قبلی<span class="lnr lnr-arrow-left"></span></a>
                            </div>

                            <div class="comment-sec-area">
                                <div class="container">
                                    <div class="row flex-column">
                                        <h6>نظرات</h6>
                                        @forelse ($post->comments()->where('status', 'approved')->get() as $comment)
                                            <div class="comment-list">
                                                <div class="single-comment justify-content-between d-flex">
                                                    <div class="user justify-content-between d-flex">

                                                        <div class="desc">
                                                            <h5><a href="#">{{ $comment->user->name }}</a></h5>
                                                            <p class="mt-3 date">
                                                                {{ jdate($comment->created_at)->format('%B %d %Y') }}</p>
                                                            <p class="comment">
                                                                {{ $comment->body }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <p>No Comment Found</p>
                                        @endforelse

                                    </div>
                                </div>
                            </div>
                        </div>
                        @auth

                            <div class="comment-form">
                                <h4>درج نظر جدید</h4>
                                <form action="{{ route('commentStore', $post) }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <textarea class="mb-10 form-control" rows="5" name="body" placeholder="متن نظر" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'متن نظر'" required=""></textarea>
                                    </div>
                                    <button type="submit" class="primary-btn text-uppercase">ارسال</button>
                                </form>
                            </div>
                        @endauth

                    </div>
                    <!-- End single-post Area -->
                </div>
                @include('app.Layouts.partials.sidebar')
            </div>
        </div>
    </section>
@endsection
