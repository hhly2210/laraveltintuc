@extends('main_layouts.master')

@section('title', 'ELý - Trang Tin Tức Việt Nam')

@section('content')

    <div class="wrapper">

        <!-- Main Content Section Start -->
        <div class="main-content--section pbottom--30">
            <div class="container">
                <!-- Main Content Start -->
                <div class="main--content">
                    <!-- Post Items Start -->
                    <div class="post--items post--items-1 pd--30-0">
                        <div class="row gutter--15">
                            <div class="col-md-6">
                                <div class="row gutter--15">

                                    @for ($i = 0; $i <= 1; $i++)
                                        <div class="col-xs-6 col-xss-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1 post--title-large">
                                                <div class="post--img">
                                                    <a href="{{ route('posts.show', $posts_new[$i][0]) }}"
                                                        class="thumb"><img style="height: 185px;"
                                                            src="{{ asset($posts_new[$i][0]->thumbnail) }}"
                                                            alt=""></a>
                                                    <a href="{{ route('categories.show', $posts_new[$i][0]->category) }}"
                                                        class="cat">{{ $posts_new[$i][0]->category->name }}</a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a
                                                                    href="javascript:;">{{ $posts_new[$i][0]->author->name }}</a>
                                                            </li>
                                                            <li><a
                                                                    href="javascript:;">{{ $posts_new[$i][0]->created_at->locale('vi')->diffForHumans() }}</a>
                                                            </li>
                                                        </ul>
                                                        <div class="title">
                                                            <h2 class="h4"><a
                                                                    href="{{ route('posts.show', $posts_new[$i][0]) }}"
                                                                    class="btn-link">{{ $posts_new[$i][0]->title }}</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </div>
                                    @endfor


                                    <div class="col-sm-12 hidden-sm hidden-xs">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1 post--title-larger">
                                            <div class="post--img">
                                                <a href="{{ route('posts.show', $posts_new[2][0]) }}" class="thumb"><img
                                                        src="{{ asset($posts_new[2][0]->thumbnail) }}" style="height:200px"
                                                        alt=""></a>

                                                <a href="{{ route('categories.show', $posts_new[2][0]->category) }}"
                                                    class="cat">{{ $posts_new[2][0]->category->name }}</a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="javascript:;">{{ $posts_new[2][0]->author->name }}</a>
                                                        </li>
                                                        <li><a
                                                                href="javascript:;">{{ $posts_new[2][0]->created_at->locale('vi')->diffForHumans() }}</a>
                                                        </li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a
                                                                href="{{ route('posts.show', $posts_new[2][0]) }}"
                                                                class="btn-link">{{ $posts_new[2][0]->title }}</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Post Item Start -->
                                <div class="post--item post--layout-1 post--title-larger">
                                    <div class="post--img">
                                        <a href="{{ route('posts.show', $posts_new[3][0]) }}" class="thumb"><img
                                                style="height: 400px;" src="{{ asset($posts_new[3][0]->thumbnail) }}"
                                                alt=""></a>

                                        <a href="{{ route('categories.show', $posts_new[3][0]->category) }}"
                                            class="cat">{{ $posts_new[3][0]->category->name }}</a>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="javascript:;">{{ $posts_new[3][0]->author->name }}</a></li>
                                                <li><a
                                                        href="javascript:;">{{ $posts_new[3][0]->created_at->locale('vi')->diffForHumans() }}</a>
                                                </li>
                                            </ul>

                                            <div class="title">
                                                <h2 class="h4"><a href="{{ route('posts.show', $posts_new[3][0]) }}"
                                                        class="btn-link">{{ $posts_new[3][0]->title }}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                            </div>

                        </div>
                    </div>
                    <!-- Post Items End -->
                </div>
                <!-- Main Content End -->

                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <div class="row">
                                <!-- World News Start -->
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="{{ route('categories.show', $category_home[0]->slug) }}"
                                            class="h4">{{ $category_home[0]->name }}</a>
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">


                                            <li class="col-xs-12">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="{{ route('posts.show', $post_category_home0[0]) }}"
                                                            class="thumb"><img style="height: 215px;"
                                                                src="{{ asset($post_category_home0[0]->thumbnail) }}"
                                                                alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home0[0]->author->name }}</a>
                                                                </li>
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home0[0]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                </li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a
                                                                        href="{{ route('posts.show', $post_category_home0[0]) }}"
                                                                        class="btn-link">{{ $post_category_home0[0]->title }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>

                                            @for ($i = 1; $i <= 4; $i++)
                                                @if ($i == 1 || $i == 3)
                                                    <li class="col-xs-12">
                                                        <!-- Divider Start -->
                                                        <hr class="divider">
                                                        <!-- Divider End -->
                                                    </li>
                                                @endif
                                                <li class="col-xs-6">
                                                    <!-- Post Item Start -->

                                                    <div class="post--item post--layout-2">
                                                        <div class="post--img">
                                                            <a href="{{ route('posts.show', $post_category_home0[$i]) }}"
                                                                class="thumb"><img style="height: 115px;"
                                                                    src="{{ asset($post_category_home0[$i]->thumbnail) }}"
                                                                    alt=""></a>

                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a
                                                                            href="javascript:;">{{ $post_category_home0[$i]->author->name }}</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="javascript:;">{{ $post_category_home0[$i]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                    </li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h3 class="h4"><a
                                                                            href="{{ route('posts.show', $post_category_home0[$i]) }}"
                                                                            class="btn-link">{{ $post_category_home0[$i]->title }}</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                            @endfor
                                        </ul>

                                    </div>
                                    <!-- Post Items End -->
                                </div>
                                <!-- World News End -->

                                <!-- Technology Start -->
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="{{ route('categories.show', $category_home[1]->slug) }}"
                                            class="h4">{{ $category_home[1]->name }}</a>

                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">

                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="{{ route('posts.show', $post_category_home1[0]) }}"
                                                            class="thumb"><img style="height: 215px;"
                                                                src="{{ asset($post_category_home1[0]->thumbnail) }}"
                                                                alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home1[0]->author->name }}</a>
                                                                </li>
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home1[0]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                </li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a
                                                                        href="{{ route('posts.show', $post_category_home1[0]) }}"
                                                                        class="btn-link">{{ $post_category_home1[0]->title }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            @for ($i = 1; $i <= 5; $i++)
                                                <li>
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-3">
                                                        <div class="post--img">
                                                            <a href="{{ route('posts.show', $post_category_home1[$i]) }}"
                                                                class="thumb"><img
                                                                    src="{{ asset($post_category_home1[$i]->thumbnail) }}"
                                                                    alt=""></a>

                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a
                                                                            href="javascript:;">{{ $post_category_home1[$i]->author->name }}</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="javascript:;">{{ $post_category_home1[$i]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                    </li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h3 class="h4"><a
                                                                            href="{{ route('posts.show', $post_category_home1[$i]) }}"
                                                                            class="btn-link">{{ $post_category_home1[$i]->title }}</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                            @endfor

                                        </ul>


                                    </div>
                                    <!-- Post Items End -->
                                </div>
                                <!-- Technology End -->

                                <!-- Finance Start -->
                                <div class="col-md-12 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="{{ route('categories.show', $category_home[2]->slug) }}"
                                            class="h4">{{ $category_home[2]->name }}</a>

                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row" data-ajax-content="inner">
                                            <li class="col-md-6">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="{{ route('posts.show', $post_category_home2[0]) }}"
                                                            class="thumb"><img
                                                                src="{{ asset($post_category_home2[0]->thumbnail) }}"
                                                                alt=""></a>
                                                        <a href="{{ route('categories.show', $post_category_home2[0]->category) }}"
                                                            class="cat">{{ $post_category_home2[0]->category->name }}</a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home2[0]->author->name }}</a>
                                                                </li>
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home2[0]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                </li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a
                                                                        href="{{ route('posts.show', $post_category_home2[0]) }}"
                                                                        class="btn-link">{{ $post_category_home2[0]->title }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->

                                                <hr class="mar_bottom15 ">

                                                <ul class="list_news_show_home">
                                                    @for ($i = 4; $i <= 6; $i++)
                                                        @if ($i != 6)
                                                            <li class="boder_link_show_home">
                                                                <h3 class="h3"><a
                                                                        href="{{ route('posts.show', $post_category_home2[$i]) }}">{{ $post_category_home2[$i]->title }}</a>
                                                                </h3>
                                                            </li>
                                                        @endif

                                                        @if ($i == 6)
                                                            <li>
                                                                <h3 class="h3"><a
                                                                        href="{{ route('posts.show', $post_category_home2[$i]) }}">{{ $post_category_home2[$i]->title }}</a>
                                                                </h3>
                                                            </li>
                                                        @endif
                                                    @endfor
                                                </ul>

                                            </li>

                                            <li class="col-md-6">
                                                <ul class="nav row">
                                                    <li class="col-xs-12 hidden-md hidden-lg">
                                                        <!-- Divider Start -->
                                                        <hr class="divider">
                                                        <!-- Divider End -->
                                                    </li>
                                                    @for ($i = 1; $i <= 4; $i++)
                                                        @if ($i == 3)
                                                            <li class="col-xs-12">
                                                                <!-- Divider Start -->
                                                                <hr class="divider">
                                                                <!-- Divider End -->
                                                            </li>
                                                        @endif

                                                        <li class="col-xs-6">
                                                            <!-- Post Item Start -->
                                                            <div class="post--item post--layout-2">
                                                                <div class="post--img">
                                                                    <a href="{{ route('posts.show', $post_category_home2[$i]) }}"
                                                                        class="thumb"><img style="height: 110px;"
                                                                            src="{{ asset($post_category_home2[$i]->thumbnail) }}"
                                                                            alt=""></a>

                                                                    <div class="post--info">
                                                                        <ul class="nav meta">

                                                                            <li><a
                                                                                    href="javascript:;">{{ $post_category_home2[$i]->author->name }}</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="javascript:;">{{ $post_category_home2[$i]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                            </li>
                                                                        </ul>

                                                                        <div class="title">
                                                                            <h3 class="h4"><a
                                                                                    href="{{ route('posts.show', $post_category_home2[$i]) }}"
                                                                                    class="btn-link">{{ $post_category_home2[$i]->title }}</a>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Post Item End -->
                                                        </li>
                                                    @endfor
                                                </ul>
                                            </li>
                                        </ul>


                                    </div>
                                    <!-- Post Items End -->
                                </div>
                                <!-- Finance End -->

                                <!-- Politics Start -->
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="{{ route('categories.show', $category_home[3]->slug) }}"
                                            class="h4">{{ $category_home[3]->name }}</a>


                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                            <li class="col-xs-12">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="{{ route('posts.show', $post_category_home3[0]) }}"
                                                            class="thumb"><img style="height: 215px;"s
                                                                src="{{ asset($post_category_home3[0]->thumbnail) }}"
                                                                alt=""></a>
                                                        <a href="{{ route('categories.show', $post_category_home3[0]->category) }}"
                                                            class="cat">{{ $post_category_home3[0]->category->name }}</a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home3[0]->author->name }}</a>
                                                                </li>
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home3[0]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                </li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a
                                                                        href="{{ route('posts.show', $post_category_home3[0]) }}"
                                                                        class="btn-link">{{ $post_category_home3[0]->title }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>

                                            @for ($i = 1; $i <= 4; $i++)
                                                @if ($i == 1 || $i == 3)
                                                    <li class="col-xs-12">
                                                        <!-- Divider Start -->
                                                        <hr class="divider">
                                                        <!-- Divider End -->
                                                    </li>
                                                @endif
                                                <li class="col-xs-6">
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-2">
                                                        <div class="post--img">
                                                            <a href="{{ route('posts.show', $post_category_home3[$i]) }}"
                                                                class="thumb"><img style="height: 115px;"
                                                                    src="{{ asset($post_category_home3[$i]->thumbnail) }}"
                                                                    alt=""></a>

                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a
                                                                            href="javascript:;">{{ $post_category_home3[$i]->author->name }}</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="javascript:;">{{ $post_category_home3[$i]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                    </li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h3 class="h4"><a
                                                                            href="{{ route('posts.show', $post_category_home3[$i]) }}"
                                                                            class="btn-link">{{ $post_category_home3[$i]->title }}</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                            @endfor
                                        </ul>


                                    </div>
                                    <!-- Post Items End -->
                                </div>
                                <!-- Politics End -->

                                <!-- Sports Start -->
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="{{ route('categories.show', $category_home[4]->slug) }}"
                                            class="h4">{{ $category_home[4]->name }}</a>
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="{{ route('posts.show', $post_category_home4[0]) }}"
                                                            class="thumb"><img style="height: 215px;"s
                                                                src="{{ asset($post_category_home4[0]->thumbnail) }}"
                                                                alt=""></a>
                                                        <a href="{{ route('categories.show', $post_category_home4[0]->category) }}"
                                                            class="cat">{{ $post_category_home4[0]->category->name }}</a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home4[0]->author->name }}</a>
                                                                </li>
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home4[0]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                </li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a
                                                                        href="{{ route('posts.show', $post_category_home4[0]) }}"
                                                                        class="btn-link">{{ $post_category_home4[0]->title }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>

                                            @for ($i = 1; $i <= 5; $i++)
                                                <li>
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-3">
                                                        <div class="post--img">
                                                            <a href="{{ route('posts.show', $post_category_home4[$i]) }}"
                                                                class="thumb"><img
                                                                    src="{{ asset($post_category_home4[$i]->thumbnail) }}"
                                                                    alt=""></a>

                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a
                                                                            href="javascript:;">{{ $post_category_home4[$i]->author->name }}</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="javascript:;">{{ $post_category_home4[$i]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                    </li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h3 class="h4"><a
                                                                            href="{{ route('posts.show', $post_category_home4[$i]) }}"
                                                                            class="btn-link">{{ $post_category_home4[$i]->title }}</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                            @endfor

                                        </ul>

                                    </div>
                                    <!-- Post Items End -->
                                </div>
                                <!-- Sports End -->
                            </div>
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Tin tức nổi bật</h2>
                                    <i class="icon fa fa-newspaper-o"></i>
                                </div>

                                <!-- List Widgets Start -->
                                <div class="list--widget list--widget-1">
                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">

                                            @foreach ($outstanding_posts as $outstanding_post)
                                                <li>
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-3">
                                                        <div class="post--img">
                                                            <a href="{{ route('posts.show', $outstanding_post) }}"
                                                                class="thumb"><img width = "120"
                                                                    src="{{ asset($outstanding_post->thumbnail) }}"
                                                                    alt=""></a>

                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a
                                                                            href="javascript:;">{{ $outstanding_post->created_at->locale('vi')->diffForHumans() }}</a>
                                                                    </li>
                                                                    <li><a href="javascript:;"><i
                                                                                class="fa fm fa-comments"></i>{{ count($outstanding_post->comments) }}</a>
                                                                    </li>
                                                                    <li><span><i
                                                                                class="fa fm fa-eye"></i>{{ $outstanding_post->views }}</span>
                                                                    </li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h3 class="h4">
                                                                        <a href="{{ route('posts.show', $outstanding_post) }}"
                                                                            class="btn-link">{{ $outstanding_post->title }}</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                            @endforeach

                                        </ul>


                                    </div>
                                    <!-- Post Items End -->
                                </div>
                                <!-- List Widgets End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Bắt đầu Từ khóa -->
                            <div class="widget">
                                <div class="widget--title  " data-ajax="tab">
                                    <h2 class="h4">Từ khóa</h2>
                                </div>
                                <div class="list--widget list--widget-1" data-ajax-content="outer">
                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3">
                                        <ul style="padding:20px" class="nav sidebar" data-ajax-content="inner">
                                            <x-blog.side-tags :tags="$tags" />
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Kết thúc từ khóa -->

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Kết nối với chúng tôi</h2>
                                    <i class="icon fa fa-share-alt"></i>
                                </div>

                                <!-- Social Widget Start -->
                                <div class="social--widget style--2">
                                    <ul class="nav row gutter--20">
                                        <li class="col-md-12 facebook">
                                            <a href="https://www.facebook.com/">
                                                <span class="icon">
                                                    <i class="fa fa-facebook"></i>
                                                    <span>Share</span>
                                                </span>

                                                <span class="text">
                                                    <span>Facebook</span>
                                                    <span>3.12 k</span>
                                                </span>
                                            </a>
                                        </li>

                                        <li class="col-md-12 twitter">
                                            <a href="https://www.facebook.com/">
                                                <span class="icon">
                                                    <i class="fa fa-twitter"></i>
                                                    <span>Tweet</span>
                                                </span>

                                                <span class="text">
                                                    <span>Twitter</span>
                                                    <span>869</span>
                                                </span>
                                            </a>
                                        </li>

                                        <li class="col-md-12 google-plus">
                                            <a href="https://www.facebook.com//">
                                                <span class="icon">
                                                    <i class="fa fa-google-plus"></i>
                                                    <span>Share</span>
                                                </span>

                                                <span class="text">
                                                    <span>Google+</span>
                                                    <span>639</span>
                                                </span>
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                                <!-- Social Widget End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Quảng cáo</h2>
                                    <i class="icon fa fa-bullhorn"></i>
                                </div>

                                <!-- Ad Widget Start -->
                                <div class="ad--widget--banner">
                                    <a href="https://mwc.com.vn/products/giay-sandal-nu-mwc-nusd--2887?c=N%C3%82U">
                                        <img src="{{ asset('kcnew/frontend/img/ads-img/ads.jpg') }}" alt="">
                                    </a>
                                </div>
                                <!-- Ad Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>
                    </div>
                    <!-- Main Sidebar End -->
                </div>

                <!-- Main Content Start -->
                <div class="main--content pd--30-0">
                    <!-- Post Items Title Start -->
                    <div class="post--items-title" data-ajax="tab">
                        <a href="{{ route('categories.show', $category_home[5]->slug) }}"
                            class="h4">{{ $category_home[5]->name }}</a>
                    </div>
                    <!-- Post Items Title End -->

                    <!-- Post Items Start -->
                    <div class="post--items post--items-4" data-ajax-content="outer">
                        <ul class="nav row" data-ajax-content="inner">
                            <li class="col-md-8">
                                <!-- Post Item Start -->
                                <div class="post--item post--layout-1 post--type-video post--title-large">
                                    <div class="post--img">
                                        <a href="{{ route('posts.show', $post_category_home5[0]) }}" class="thumb"><img
                                                style="height: 400px"
                                                src="{{ asset($post_category_home5[0]->thumbnail) }}"
                                                alt=""></a>
                                        <a href="{{ route('categories.show', $post_category_home5[0]->category) }}"
                                            class="cat">{{ $post_category_home5[0]->category->name }}</a>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a
                                                        href="javascript:;">{{ $post_category_home5[0]->author->name }}</a>
                                                </li>
                                                <li><a
                                                        href="javascript:;">{{ $post_category_home5[0]->created_at->locale('vi')->diffForHumans() }}</a>
                                                </li>
                                            </ul>

                                            <div class="title">
                                                <h2 class="h4"><a
                                                        href="{{ route('posts.show', $post_category_home5[0]) }}"
                                                        class="btn-link">{{ $post_category_home5[0]->title }}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->

                                <!-- Divider Start -->
                                <hr class="divider hidden-md hidden-lg">
                                <!-- Divider End -->
                            </li>
                            <li class="col-md-4">
                                <ul class="nav">

                                    @for ($i = 1; $i <= 4; $i++)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--type-audio post--layout-3">
                                                <div class="post--img">
                                                    <a href="{{ route('posts.show', $post_category_home5[$i]) }}"
                                                        class="thumb"><img
                                                            src="{{ asset($post_category_home5[$i]->thumbnail) }}"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a
                                                                    href="javascript:;">{{ $post_category_home5[$i]->author->name }}</a>
                                                            </li>
                                                            <li><a
                                                                    href="javascript:;">{{ $post_category_home5[$i]->created_at->locale('vi')->diffForHumans() }}</a>
                                                            </li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a
                                                                    href="{{ route('posts.show', $post_category_home5[$i]) }}"
                                                                    class="btn-link">{{ $post_category_home5[$i]->title }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                    @endfor

                                </ul>
                            </li>
                        </ul>


                    </div>
                    <!-- Post Items End -->
                </div>
                <!-- Main Content End -->

                <!-- Advertisement Start -->
                <div class="ad--space pd--30-0">
                    <a href="https://burine.vn/">
                        <img src="{{ asset('kcnew/frontend/img/ads-img/970x90_banner_burine.png') }}" alt=""
                            class="center-block">
                    </a>
                </div>
                <!-- Advertisement End -->

                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <div class="row">
                                <!-- Health and fitness Start -->
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="{{ route('categories.show', $category_home[6]->slug) }}"
                                            class="h4">{{ $category_home[6]->name }}</a>


                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="{{ route('posts.show', $post_category_home6[0]) }}"
                                                            class="thumb"><img style="height: 240px;"
                                                                src="{{ asset($post_category_home6[0]->thumbnail) }}"
                                                                alt=""></a>
                                                        <a href="{{ route('categories.show', $post_category_home6[0]->category) }}"
                                                            class="cat">{{ $post_category_home6[0]->category->name }}</a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home6[0]->author->name }}</a>
                                                                </li>
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home6[0]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                </li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a
                                                                        href="{{ route('posts.show', $post_category_home6[0]) }}"
                                                                        class="btn-link">{{ $post_category_home6[0]->title }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>

                                            @for ($i = 1; $i <= 4; $i++)
                                                <li>
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-3">
                                                        <div class="post--img">
                                                            <a href="{{ route('posts.show', $post_category_home6[$i]) }}"
                                                                class="thumb"><img
                                                                    src="{{ asset($post_category_home6[$i]->thumbnail) }}"
                                                                    alt=""></a>

                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a
                                                                            href="javascript:;">{{ $post_category_home6[$i]->author->name }}</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="javascript:;">{{ $post_category_home6[$i]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                    </li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h3 class="h4"><a
                                                                            href="{{ route('posts.show', $post_category_home6[$i]) }}"
                                                                            class="btn-link">{{ $post_category_home6[$i]->title }}</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                            @endfor

                                        </ul>


                                    </div>
                                    <!-- Post Items End -->
                                </div>
                                <!-- Health and fitness End -->

                                <!-- Lifestyle Start -->
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="{{ route('categories.show', $category_home[7]->slug) }}"
                                            class="h4">{{ $category_home[7]->name }}</a>


                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">

                                            <li class="col-xs-12">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="{{ route('posts.show', $post_category_home7[0]) }}"
                                                            class="thumb"><img style="height: 240px;"
                                                                src="{{ asset($post_category_home7[0]->thumbnail) }}"
                                                                alt=""></a>
                                                        <a href="{{ route('categories.show', $post_category_home7[0]->category) }}"
                                                            class="cat">{{ $post_category_home7[0]->category->name }}</a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home7[0]->author->name }}</a>
                                                                </li>
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home7[0]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                </li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a
                                                                        href="{{ route('posts.show', $post_category_home7[0]) }}"
                                                                        class="btn-link">{{ $post_category_home7[0]->title }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->

                                            </li>
                                            @for ($i = 1; $i <= 4; $i++)
                                                @if ($i === 1 || $i === 3)
                                                    <li class="col-xs-12">
                                                        <!-- Divider Start -->
                                                        <hr class="divider">
                                                        <!-- Divider End -->
                                                    </li>
                                                @endif
                                                <li class="col-xs-6">
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-2">
                                                        <div class="post--img">
                                                            <a href="{{ route('posts.show', $post_category_home7[$i]) }}"
                                                                class="thumb"><img style="height: 110px;"s
                                                                    src="{{ asset($post_category_home7[$i]->thumbnail) }}"
                                                                    alt=""></a>

                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a
                                                                            href="javascript:;">{{ $post_category_home7[$i]->author->name }}</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="javascript:;">{{ $post_category_home7[$i]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                    </li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h3 class="h4"><a
                                                                            href="{{ route('posts.show', $post_category_home7[$i]) }}"
                                                                            class="btn-link">{{ $post_category_home7[$i]->title }}</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                            @endfor
                                        </ul>

                                    </div>
                                    <!-- Post Items End -->
                                </div>
                                <!-- Lifestyle End -->

                                <div class="col-md-12 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="{{ route('categories.show', $category_home[8]->slug) }}"
                                            class="h4">{{ $category_home[8]->name }}</a>


                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row" data-ajax-content="inner">
                                            <li class="col-md-6">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="{{ route('posts.show', $post_category_home8[0]) }}"
                                                            class="thumb"><img
                                                                src="{{ asset($post_category_home8[0]->thumbnail) }}"
                                                                alt="">
                                                        </a>
                                                        <a href="{{ route('categories.show', $post_category_home8[0]->category) }}"
                                                            class="cat">{{ $post_category_home8[0]->category->name }}</a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home8[0]->author->name }}</a>
                                                                </li>
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home8[0]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                </li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a
                                                                        href="{{ route('posts.show', $post_category_home8[0]) }}"
                                                                        class="btn-link">{{ $post_category_home8[0]->title }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->

                                                <hr class="mar_bottom15 ">

                                                <ul class="list_news_show_home">
                                                    @for ($i = 3; $i <= 5; $i++)
                                                        @if ($i != 5)
                                                            <li class="boder_link_show_home">
                                                                <h3 class="h3"><a
                                                                        href="{{ route('posts.show', $post_category_home8[$i]) }}">{{ $post_category_home8[$i]->title }}</a>
                                                                </h3>
                                                            </li>
                                                        @endif

                                                        @if ($i == 5)
                                                            <li>
                                                                <h3 class="h3"><a
                                                                        href="{{ route('posts.show', $post_category_home8[$i]) }}">{{ $post_category_home8[$i]->title }}</a>
                                                                </h3>
                                                            </li>
                                                        @endif
                                                    @endfor
                                                </ul>
                                            </li>
                                            <li class="col-md-6">
                                                <ul class="nav row">
                                                    <li class="col-xs-12 hidden-md hidden-lg">
                                                        <!-- Divider Start -->
                                                        <hr class="divider">
                                                        <!-- Divider End -->
                                                    </li>
                                                    @for ($i = 1; $i <= 4; $i++)
                                                        @if ($i == 3)
                                                            <li class="col-xs-12">
                                                                <!-- Divider Start -->
                                                                <hr class="divider">
                                                                <!-- Divider End -->
                                                            </li>
                                                        @endif
                                                        <li class="col-xs-6">
                                                            <!-- Post Item Start -->
                                                            <div class="post--item post--layout-2">
                                                                <div class="post--img">
                                                                    <a href="{{ route('posts.show', $post_category_home8[$i]) }}"
                                                                        class="thumb"><img style="height: 110px"
                                                                            src="{{ asset($post_category_home8[$i]->thumbnail) }}"
                                                                            alt=""></a>

                                                                    <div class="post--info">
                                                                        <ul class="nav meta">
                                                                            <li><a
                                                                                    href="javascript:;">{{ $post_category_home8[$i]->author->name }}</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="javascript:;">{{ $post_category_home8[$i]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                            </li>
                                                                        </ul>

                                                                        <div class="title">
                                                                            <h3 class="h4"><a
                                                                                    href="{{ route('posts.show', $post_category_home8[$i]) }}"
                                                                                    class="btn-link">{{ $post_category_home8[$i]->title }}</a>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Post Item End -->
                                                        </li>
                                                    @endfor

                                                </ul>
                                            </li>
                                        </ul>


                                    </div>
                                    <!-- Post Items End -->
                                </div>

                                <!-- Photo Gallery Start -->
                                <div class="col-md-12 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="{{ route('categories.show', $category_home[9]->slug) }}"
                                            class="h4">{{ $category_home[9]->name }}</a>

                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-1" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                            <li class="col-md-12">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1 post--title-large">
                                                    <div class="post--img">
                                                        <a href="{{ route('posts.show', $post_category_home9[0]) }}"
                                                            class="thumb"><img style="height: 400px;"
                                                                src="{{ asset($post_category_home9[0]->thumbnail) }}"
                                                                alt=""></a>
                                                        <a href="{{ route('categories.show', $post_category_home9[0]->category) }}"
                                                            class="cat">{{ $post_category_home9[0]->category->name }}</a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home9[0]->author->name }}</a>
                                                                </li>
                                                                <li><a
                                                                        href="javascript:;">{{ $post_category_home9[0]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                </li>
                                                            </ul>

                                                            <div class="title text-xxs-ellipsis">
                                                                <h2 class="h4"><a
                                                                        href="{{ route('posts.show', $post_category_home9[0]) }}"
                                                                        class="btn-link">{{ $post_category_home9[0]->title }}</a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            @for ($i = 1; $i <= 3; $i++)
                                                <li class="col-md-4 col-xs-6 col-xxs-12">
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-1">
                                                        <div class="post--img">
                                                            <a href="{{ route('posts.show', $post_category_home9[$i]) }}"
                                                                class="thumb"><img style="height: 150px;"
                                                                    src="{{ asset($post_category_home9[$i]->thumbnail) }}"
                                                                    alt=""></a>

                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a
                                                                            href="javascript:;">{{ $post_category_home9[$i]->author->name }}</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="javascript:;">{{ $post_category_home9[$i]->created_at->locale('vi')->diffForHumans() }}</a>
                                                                    </li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h2 class="h4"><a
                                                                            href="{{ route('posts.show', $post_category_home9[$i]) }}"
                                                                            class="btn-link">{{ $post_category_home9[$i]->title }}</a>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                            @endfor
                                        </ul>

                                    </div>
                                    <!-- Post Items End -->
                                </div>
                                <!-- Photo Gallery End -->
                            </div>
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title" data-ajax="tab">
                                    <a href="https://vnexpress.net"><img
                                            src="https://s.vnecdn.net/vnexpress/i/v20/logos/vne_logo_rss.png"
                                            alt="VnExpress RSS">
                                    </a>
                                </div>

                                <!-- List Widgets Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3">
                                        <ul class="nav" data-ajax-content="inner">
                                            @foreach ($rss as $item)
                                                <li>
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-3">
                                                        <div class="post--img">
                                                            <a href="{{ $item['link'] }}" class="thumb"><img
                                                                    src="{{ $item['description'] != null ? $item['description'] : '' }}"
                                                                    alt="image"></a>

                                                            <div class="post--info">
                                                                <div class="title">
                                                                    <h3 class="h4"><a
                                                                            href="{{ $item['link'] }}">{{ $item['title'] }}</a>
                                                                    </h3>
                                                                </div>

                                                                {{-- <ul class="nav meta">
                                                            <li><span>{{ $item->created_at->format('d/m/Y') }}</span>
                                                            </li>
                                                        </ul> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                            @endforeach

                                        </ul>


                                    </div>
                                    <!-- Post Items End -->
                                </div>
                                <!-- List Widgets End -->
                            </div>
                            <!-- Widget End -->

                        </div>
                    </div> <!-- Main Sidebar End -->
                </div>

            </div>
        </div>
        <!-- Main Content Section End -->

    </div>

    <div class="colorlib-blog" style="display: none !important">
        <div class="container">
            <div class="row">
                <div class="col-md-8 post_col">

                    @if (!count($posts))
                        <p class="lead">Không có bài tin tức nào.</p>
                    @else
                        @forelse($posts as $post)

                            <div class="block-21 d-flex animate-box post">
                                <a href="{{ route('posts.show', $post) }}" class="blog-img"
                                    style="background-image: url({{ asset($post->thumbnail) }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a
                                            href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h3>
                                    <p class="excerpt">{{ $post->excerpt }}</p>
                                    </p>
                                    <div class="meta">
                                        <div><a class="date" href="javascript:;"><span
                                                    class="icon-calendar"></span>{{ $post->created_at->locale('vi')->diffForHumans() }}</a>
                                        </div>
                                        <div><a href="javascript:;"><span
                                                    class="icon-user2"></span>{{ $post->author->name }} </a></div>
                                        <div class="comments-count"><a href="{{ route('posts.show', $post) }}"><span
                                                    class="icon-chat"></span>
                                                {{ $post->comments_count != null ? $post->comments_count : '' }}</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <!-- phân trang -->
                    {{ $posts->links() }}
                </div>

                <!-- SIDEBAR: start -->
                <div class="col-md-4 animate-box">
                    <div class="sidebar">

                        <x-blog.side-categories :categories="$categories" />
                        <x-blog.side-recent_posts :recent_posts="$recent_posts" />
                        <x-blog.side-tags :tags="$tags" />

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
