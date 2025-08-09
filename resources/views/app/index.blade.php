@extends('app.Layouts.master')
@section('title', 'PulseWire')

@section('content')
    <!-- Start top-post Area -->
    <section class="pt-10 top-post-area">
        <div class="container no-padding">
            <div class="row small-gutters">
                @isset($topSelectedPosts[0])
                    <div class="col-lg-8 top-post-left">
                        <div class="relative feature-image-thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="{{ asset(trim($topSelectedPosts[0]->image, '\/')) }}" alt="">
                        </div>
                        <div class="top-post-details">
                            <ul class="tags">
                                <li><a href="#">{{ $topSelectedPosts[0]->category->name }}</a></li>
                            </ul>
                            <a href="image-post.html">
                                <h3>{{ $topSelectedPosts[0]->title }}</h3>
                            </a>
                            <ul class="meta">
                                <li><a href="#"><span
                                            class="lnr lnr-user"></span>{{ $topSelectedPosts[0]->user->name }}</a></li>
                                <li><a href="#">{{ jdate($topSelectedPosts[0]->created_at)->format('%B %d %Y') }}<span
                                            class="lnr lnr-calendar-full"></span></a></li>
                                <li><a href="#">{{ $topSelectedPosts[0]->comments->count() }}<span
                                            class="lnr lnr-bubble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                @endisset

                <div class="col-lg-4 top-post-right">
                    @isset($topSelectedPosts[1])
                        <div class="single-top-post">
                            <div class="relative feature-image-thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="{{ asset(trim($topSelectedPosts[1]->image, '\/')) }}"
                                    alt="">
                            </div>
                            <div class="top-post-details">
                                <ul class="tags">
                                    <li><a href="#">{{ $topSelectedPosts[1]->category->name }}</a></li>
                                </ul>
                                <a href="image-post.html">
                                    <h4>{{ $topSelectedPosts[1]->title }}</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span
                                                class="lnr lnr-user"></span>{{ $topSelectedPosts[1]->user->name }}</a></li>
                                    <li><a href="#">{{ jdate($topSelectedPosts[1]->created_at)->format('%B %d %Y') }}<span
                                                class="lnr lnr-calendar-full"></span></a></li>
                                    <li><a href="#">{{ $topSelectedPosts[1]->comments->count() }}<span
                                                class="lnr lnr-bubble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    @endisset
                    @isset($topSelectedPosts[1])
                        <div class="mt-10 single-top-post">
                            <div class="relative feature-image-thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="{{ asset(trim($topSelectedPosts[2]->image, '\/')) }}"
                                    alt="">
                            </div>
                            <div class="top-post-details">
                                <ul class="tags">
                                    <li><a href="#">{{ $topSelectedPosts[2]->category->name }}</a></li>
                                </ul>
                                <a href="image-post.html">
                                    <h4>{{ $topSelectedPosts[2]->title }}</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span
                                                class="lnr lnr-user"></span>{{ $topSelectedPosts[2]->user->name }}</a></li>
                                    <li><a href="#">{{ jdate($topSelectedPosts[2]->created_at)->format('%B %d %Y') }}<span
                                                class="lnr lnr-calendar-full"></span></a></li>
                                    <li><a href="#">{{ $topSelectedPosts[2]->comments->count() }}<span
                                                class="lnr lnr-bubble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    @endisset

                </div>
                @empty(!$breakingNews)
                    <div class="col-lg-12">
                        <div class="news-tracker-wrap">
                            <h6><span>خبر فوری:</span> <a href="#">{{ $breakingNews->title }}</a></h6>
                        </div>
                    </div>
                @endempty
            </div>
        </div>
    </section>
    <!-- End top-post Area -->
    <!-- Start latest-post Area -->
    <section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-8 post-list">
                    <!-- Start latest-post Area -->
                    <div class="latest-post-wrap">
                        <h4 class="cat-title">آخرین اخبار</h4>
                        <div class="single-latest-post row align-items-center">




                        </div>
                        @foreach ($latestNews as $lastNews)
                            <div class="single-latest-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="relative feature-img">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{ asset(trim($lastNews->image, '\/')) }}"
                                            alt="">
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">{{ $lastNews->category->name }}</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>{{ $lastNews->title }}</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span
                                                    class="lnr lnr-user"></span>{{ $lastNews->user->name }}</a></li>
                                        <li><a href="#">{{ jdate($lastNews->created_at)->format('%B %d %Y') }}<span
                                                    class="lnr lnr-calendar-full"></span></a>
                                        </li>
                                        <li><a href="#">{{ $lastNews->comments->count() }}<span
                                                    class="lnr lnr-bubble"></span></a></li>
                                    </ul>

                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End latest-post Area -->

                    <!-- Start banner-ads Area -->
                    @empty(!$bodybanner)
                        <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                            <img class="img-fluid" src="{{ asset(trim($bodybanner->image, '\/')) }}" alt="">
                        </div>
                    @endempty
                    <!-- End banner-ads Area -->
                    <!-- Start popular-post Area -->
                    <div class="popular-post-wrap">
                        <h4 class="title">اخبار پربازدید</h4>
                        @isset($popularNews[0])
                            <div class="relative feature-post">
                                <div class="relative feature-img">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="{{ asset(trim($popularNews[0]->image, '\/')) }}"
                                        alt="">
                                </div>
                                <div class="details">
                                    <ul class="tags">
                                        <li><a href="#">{{ $popularNews[0]->category->name }}</a></li>
                                    </ul>
                                    <a href="image-post.html">
                                        <h3>{{ $popularNews[0]->title }}</h3>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span
                                                    class="lnr lnr-user"></span>{{ $popularNews[0]->user->name }}</a></li>
                                        <li><a href="#">{{ jdate($popularNews[0]->created_at)->format('%B %d %Y') }}<span
                                                    class="lnr lnr-calendar-full"></span></a>
                                        </li>
                                        <li><a href="#">{{ $popularNews[0]->comments->count() }}<span
                                                    class="lnr lnr-bubble"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        @endisset

                        @isset($popularNews[1])
                            <div class="mt-20 row medium-gutters">
                                <div class="col-lg-6 single-popular-post">
                                    <div class="relative feature-img-wrap">
                                        <div class="relative feature-img">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{ asset(trim($popularNews[1]->image, '\/')) }}"
                                                alt="">
                                        </div>
                                        <ul class="tags">
                                            <li><a href="#">{{ $popularNews[1]->category->name }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h4>{{ $popularNews[1]->title }}</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span
                                                        class="lnr lnr-user"></span>{{ $popularNews[1]->user->name }}</a></li>
                                            <li><a href="#">{{ jdate($popularNews[1]->created_at)->format('%B %d %Y') }}<span
                                                        class="lnr lnr-calendar-full"></span></a></li>
                                            <li><a href="#">{{ $popularNews[1]->comments->count() }}<span
                                                        class="lnr lnr-bubble"></span></a></li>
                                        </ul>

                                    </div>
                                </div>
                            @endisset
                            @isset($popularNews[2])
                                <div class="col-lg-6 single-popular-post">
                                    <div class="relative feature-img-wrap">
                                        <div class="relative feature-img">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{ asset(trim($popularNews[2]->image, '\/')) }}"
                                                alt="">
                                        </div>
                                        <ul class="tags">
                                            <li><a href="#">{{ $popularNews[2]->category->name }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h4>{{ $popularNews[2]->title }}</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span
                                                        class="lnr lnr-user"></span>{{ $popularNews[2]->user->name }}</a></li>
                                            <li><a href="#">{{ jdate($popularNews[2]->created_at)->format('%B %d %Y') }}<span
                                                        class="lnr lnr-calendar-full"></span></a></li>
                                            <li><a href="#">{{ $popularNews[2]->comments->count() }}<span
                                                        class="lnr lnr-bubble"></span></a></li>
                                        </ul>
                                        <p class="excert">
                                            خلاصه متن خبر
                                    </div>
                                @endisset
                            </div>
                        </div>
                    </div>
                    <!-- End popular-post Area -->
                </div>
                @include('app.Layouts.partials.sidebar')
            </div>
        </div>
    </section>
    <!-- End latest-post Area -->
@endsection
