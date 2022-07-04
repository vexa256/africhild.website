<section class="ls s-py-xl-150 s-py-lg-130 s-py-md-90 s-py-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row learn-press-courses isotope-wrapper masonry-layout c-gutter-30 c-mb-30">
                    @isset($GlobalData)

                        @foreach ($GlobalData as $data)
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="vertical-item ls text-center course box-shadow" style="padding:6px">
                                    <div class="item-media"
                                        style="background-image: url({{ asset($data->URL) }}); height:45vh; background-size:100%; background-repeat: no-repeat; background-position:center">
                                        {{-- <a href="#"></a> --}}
                                    </div>
                                    <div class="item-content">
                                        <h6 style="font-size: 15px; height: 7vh; overflow-y: scroll;">
                                            {{-- <a href="#" style=""> --}}
                                            {{ $data->Title }}
                                            {{-- </a> --}}
                                        </h6>
                                        <p
                                            style="height: 50vh; overflow-y: scroll; text-align: justify; padding-left: 10px; padding-right: 10px
                                        ">
                                            {{ $data->Desc }}
                                        </p>
                                        {{-- <div class="item-footer">
                                            <span class="price">
                                                <span>$</span>365
                                            </span>
                                            <a href="courses_single.html" class="btn btn-darkgrey round">more</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @endisset

                </div>
                <div class="mt--30"></div>
            </div>
        </div>
    </div>
</section>
