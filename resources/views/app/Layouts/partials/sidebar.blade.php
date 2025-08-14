<div class="col-lg-4">
    <div class="sidebars-area">
        @isset($topSelectedPosts[0])
            <div class="single-sidebar-widget editors-pick-widget">
                <h6 class="title">انتخاب سردبیر</h6>
                <div class="editors-pick-post">
                    <div class="relative feature-img-wrap">
                        <div class="relative feature-img">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="{{ $topSelectedPosts[0]->image }}" alt="">
                        </div>
                        <ul class="tags">
                            <li><a href="#">{{ $topSelectedPosts[0]->category->name }}</a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <a href="image-post.html">
                            <h4 class="mt-20">{{ $topSelectedPosts[0]->title }}</h4>
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
            </div>
        @endisset

        <div class="single-sidebar-widget ads-widget">
            <img class="img-fluid" src="img/sidebar-ads.jpg" alt="">
        </div>

        <div class="single-sidebar-widget most-popular-widget">
            <h6 class="title">پر بحث ترین ها</h6>
            @foreach ($mostCommentedPosts as $mostCommentedPost)
                <div class="flex-row single-list d-flex">
                    <div class="thumb">
                        <img src="{{ asset(trim($mostCommentedPost->image, '\/')) }}" alt="" class="img-fluid">
                    </div>
                    <div class="details">
                        <a href="image-post.html">
                            <h6>{{ $mostCommentedPost->title }}</h6>
                        </a>
                        <ul class="meta">
                            <li><a href="#">{{ jdate($mostCommentedPost->created_at)->format('%B %d %Y') }}<span
                                        class="lnr lnr-calendar-full"></span></a>
                            </li>
                            <li><a href="#">{{ $mostCommentedPost->comments->count() }}<span
                                        class="lnr lnr-bubble"></span></a></li>
                        </ul>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</div>
