@extends('app.Layouts.master')
@section('title', 'PulseWire')

@section('content')
    <!-- Start top-post Area -->
    <section class="pt-10 top-post-area">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-nav-area">
                        <h1 class="text-white">اخبار دسته بندی {{ $category->name }}</h1>

                    </div>
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
                        @foreach ($latestNews as $latestNew)
                            <div class="single-latest-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="relative feature-img">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{ asset(trim($latestNew->image, '\/')) }}"
                                            alt="">
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">{{ $latestNew->category->name }}</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>{{ $latestNew->title }}</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span
                                                    class="lnr lnr-user"></span>{{ $latestNew->user->name }}</a></li>
                                        <li><a href="#">{{ jdate($latestNew->created_at)->format('%B %d %Y') }}<span
                                                    class="lnr lnr-calendar-full"></span></a></li>
                                        <li><a href="#">{{ $latestNew->comments->count() }}<span
                                                    class="lnr lnr-bubble"></span></a></li>
                                    </ul>

                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End latest-post Area -->

                    <!-- Start banner-ads Area -->
                    <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                        <img class="img-fluid" src="img/banner-ad.jpg" alt="">
                    </div>
                    <!-- End banner-ads Area -->
                    <!-- Start popular-post Area -->
                    <div class="popular-post-wrap">
                        <h4 class="title">اخبار پربازدید</h4>
                        {{-- <div class="relative feature-post">
                            <div class="relative feature-img">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="img/f1.jpg" alt="">
                            </div>
                            <div class="details">
                                <ul class="tags">
                                    <li><a href="#">دسته بندی</a></li>
                                </ul>
                                <a href="image-post.html">
                                    <h3>عنوان</h3>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>ادمین</a></li>
                                    <li><a href="#">۱۳۳۹/۲/۴<span class="lnr lnr-calendar-full"></span></a></li>
                                    <li><a href="#">۷<span class="lnr lnr-bubble"></span></a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="mt-20 row medium-gutters">
                            <div class="col-lg-6 single-popular-post">
                                <div class="relative feature-img-wrap">
                                    <div class="relative feature-img">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{ asset(trim($popularNews[0]->image, '\/')) }}"
                                            alt="">
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">{{ $popularNews[0]->category->name }}</a></li>
                                    </ul>
                                </div>
                                <div class="details">
                                    <a href="image-post.html">
                                        <h4>{{ $popularNews[0]->title }}</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span
                                                    class="lnr lnr-user"></span>{{ $popularNews[0]->user->name }}</a></li>
                                        <li><a href="#">{{ jdate($popularNews[0]->created_at)->format('%B %d %Y') }}<span
                                                    class="lnr lnr-calendar-full"></span></a></li>
                                        <li><a href="#">{{ $popularNews[0]->comments->count() }}<span
                                                    class="lnr lnr-bubble"></span></a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-6 single-popular-post">
                                <div class="relative feature-img-wrap">
                                    <div class="relative feature-img">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{ asset(trim($popularNews[0]->image, '\/')) }}"
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
                                        <li><a href="#">{{ jdate($popularNews[0]->created_at)->format('%B %d %Y') }}<span
                                                    class="lnr lnr-calendar-full"></span></a></li>
                                        <li><a href="#">{{ $popularNews[1]->comments->count() }}<span
                                                    class="lnr lnr-bubble"></span></a></li>
                                    </ul>
                                </div>
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
