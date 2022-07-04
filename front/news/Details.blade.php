<section class="ls s-py-xl-150 s-py-lg-130 s-py-md-90 s-py-60">
    <div class="container">
        <div class="row c-gutter-60">

            <main class="col-12">
                {{-- @isset($GlobalData)
                    @foreach ($GlobalData as $GlobalData) --}}
                <article
                    class="text-center text-sm-left vertical-item ls content-padding box-shadow post type-post status-publish format-standard has-post-thumbnail">
                    <div class="item-media post-thumbnail">
                        <a href="#">
                            <img src="{{ asset($GlobalData->URL) }}" alt="AfriChild Center">
                        </a>
                        <span class="cat-links">

                        </span>
                    </div><!-- .post-thumbnail -->
                    <div class="item-content">
                        <header class="entry-header">
                            <h5 class="entry-title">
                                <a href="#" rel="bookmark">
                                    {{ $GlobalData->Title }}
                                </a>
                            </h5>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <div>

                                {!! $GlobalData->Desc !!}
                            </div>
                        </div><!-- .entry-content -->
                        <footer class="entry-footer">
                            <div class="entry-meta">
                                <span class="byline">
                                    <span class="author vcard">
                                        <i class="far fa-user"></i>
                                        <a class="url fn n" href="#">@AfriChildCenter</a>
                                    </span>
                                </span>
                            </div>
                            {{-- <a href="#" class="btn btn-danger"
                                        style="background-color: rgb(223, 10, 129)">Read More</a> --}}
                        </footer>
                    </div><!-- .item-content -->
                </article>
                {{-- @endforeach
                @endisset --}}



            </main>

            {{-- <aside class="col-lg-5 col-xl-4">

                <div class="widget widget_categories">

                    <h3 class="widget-title">Popular Posts</h3>

                    <ul style="max-height: 500px ; overflow-y: scroll;">
                        @isset($GlobalData)
                            @foreach ($GlobalData as $Pop)
                                <li class="cat-item">
                                    <a href="#">{{ $Pop->Title }}</a>

                                </li>
                            @endforeach
                        @endisset



                    </ul>
                </div>


                <div class="widget widget_gallery/square/01">
                    <h3 class="widget-title">Latest News</h3>
                    <ul class="list-unstyled" style="max-height: 600px; overflow-y: scroll;">

                        @isset($News)
                            @foreach ($News as $GlobalData)
                                <li class="media">
                                    <a class="media-image" href="blog-single-right.html">
                                        <img src="{{ asset($GlobalData->URL) }}" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4>
                                            <a href="#">{{ $GlobalData->Title }}</a>
                                        </h4>
                                        <p class="item-meta">
                                            <i class="fas fa-people-carry"></i>
                                            <a href="#">@AfriChildCenter</a>
                                        </p>

                                    </div>
                                </li>
                            @endforeach
                        @endisset



                    </ul>
                </div>


                <div class="widget widget_tag_cloud">

                    <h3 class="widget-title">Our Twitter Feed</h3>

                    <div class="tagcloud" style="height: 600px; overflow-y: scroll;">

                        <div class="col-md-12">
                            <div class="card card-body shadow-lg"> <a class="twitter-timeline"
                                    href="https://twitter.com/AfriChildCentre?ref_src=twsrc%5Etfw">Tweets by
                                    AfriChildCentre</a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>

                    </div>
                </div>


            </aside> --}}


        </div>

    </div>
</section>
