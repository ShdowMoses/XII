@extends('layouts.frontend.master')

@section('content')
    <div class="wrapper">
        <!-- ============================
                                                                                                                                                                        Slider
                                                                                                                                                                    ============================== -->
        <section class="slider">
            <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
                data-slick='{"slidesToShow": 1, "arrows": false, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
                <div class="slide-item align-v-h bg-overlay bg-overlay-2">
                    <div class="bg-img brightness-75"><img src="{{ url('solatec/assets/images/sliders/img1.jpg') }}"
                            alt="slide img"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                                <div class="slide__body">
                                    <h2 class="slide__title">Temukan beragam resep kuliner dari penjuru Nusantara</h2>
                                    <p class="slide__desc">Sejak ada kita, masak jadi gampang euy!</p>
                                    </p>
                                    <div class="d-flex">
                                        <a href="{{ url('/article') }}" class="btn btn__primary mr-30">
                                            <i class="icon-arrow-right"></i><span>Blog</span>
                                        </a>
                                    </div>
                                </div><!-- /.slide__body -->
                            </div><!-- /.col-xl-8 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
                <div class="slide-item align-v-h bg-overlay">
                    <div class="bg-img brightness-50"><img src="{{ url('solatec/assets/images/sliders/aj.jpg') }}"
                            alt="slide img">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                                <div class="slide__body">
                                    <span class="slide__subtitle">Apa ya MasakEuy itu?</span>
                                    <h2 class="slide__title">website food blog seru buat kita semua!
                                    </h2>
                                    <p class="slide__desc">Website kami dirancang khusus untuk komunitas foodie dan home
                                        cook
                                        yang ingin eksplorasi tentang resep kuliner.</p>
                                    <div class="d-flex">
                                        <a href="{{ url('/') }}" class="btn btn__primary mr-30">
                                            <i class="icon-arrow-right"></i><span>Panduan Event</span>
                                        </a>
                                    </div>
                                </div><!-- /.slide__body -->
                            </div><!-- /.col-xl-8 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
            </div><!-- /.carousel -->
        </section><!-- /.slider -->

        <!-- ========================
                                                                                                                                                                        About Layout 1
                                                                                                                                                                      =========================== -->


        <!-- ======================
                                                                                                                                                                      services Layout 2
                                                                                                                                                                      ========================= -->


        <!-- ======================
                                                                                                                                                                        Blog Grid
                                                                                                                                                                      ========================= -->
        <section class="post-grid pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-50">
                            <h2 class="heading__subtitle">Article & Blog</h2>
                            <h3 class="heading__title">Blog</h3>
                        </div><!-- /.heading -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    @forelse ($articles as $artcls)
                        <!-- Post Item #1 -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="post-item">
                                <div class="post__img">
                                    <a href="blog-single-post.html">
                                        <img style=" width: 100%;
                                        height: 320px;
                                        object-fit: cover;"
                                            src="{{ url('storage/images/' . $artcls->thumbnail) }}" alt="blog">
                                    </a>
                                    <span class="post__date">{{ $artcls->tanggal }}</span>
                                </div><!-- /.post-img -->
                                <div class="post__body">
                                    <div class="post__meta d-flex align-items-center">
                                        <div class="post__cat">
                                            <a href="#">Blog</a>
                                        </div><!-- /.post-meta-cat -->
                                        <a class="post__author" href="#">Administrator</a>
                                    </div><!-- /.post-meta -->
                                    <h4 class="post__title"><a href="#">{{ $artcls->judul }}
                                        </a></h4>
                                    <p class="post__desc">
                                        {{ substr(strip_tags(htmlspecialchars_decode($artcls->content)), 0, 100) }} ...</a>
                                    </p>
                                    @auth
                                        <a href="{{ route('article.show', $artcls->id) }}"
                                            class="btn btn__secondary btn__outlined btn__custom">
                                            <i class="icon-arrow-right"></i>
                                            <span>Baca Selengkapnya</span>
                                        </a>
                                    @endauth
                                </div><!-- /.post-content -->
                            </div><!-- /.post-item -->
                        </div><!-- /.col-lg-4 -->
                    @empty
                        <div class="col-lg-12 text-center mx-auto mt-3">
                            <h1 class="mb-2">Tidak ada artikel yang ada disini</h1>
                            <p class="mb-4">Kami sedang menyiapkan artikel atau berita bagi anda.
                            </p>
                        </div>
                    @endforelse
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog Grid -->
    </div>
@endsection
