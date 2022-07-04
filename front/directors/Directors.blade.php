<section class="ls ms s-py-xl-150 s-py-lg-130 s-py-md-90 s-py-60 c-gutter-0">
    <div class="container">
        @isset($Directors)

            @foreach ($Directors as $data)
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-small-left">
                        <div class="img-wrap">
                            <img style="height: 40vh" src="{{ asset($data->URL) }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-sm-left">
                        <div class="fw-divider-space divider-40 divider-lg-0"></div>
                        <p class="special-heading color-darkgrey sub-title">
                            <span class="text-uppercase">
                                {{ $data->Title }}
                            </span>
                        </p>
                        <h4 class="special-heading ">
                            <span class="text-capitalize ">
                                {{ $data->Name }} </span>
                        </h4>
                        <div class="fw-divider-space divider-30 divider-lg-55"></div>
                        <p style="height: 40vh; overflow-y:scroll">

                            {{ $data->Desc }}


                        </p>

                        <div class="fw-divider-space divider-30 divider-lg-60"></div>

                    </div>
                </div>
            @endforeach

        @endisset
    </div>
</section>



<section class="ls s-py-xl-150 s-py-lg-130 s-py-md-90 s-py-60 d-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row learn-press-courses isotope-wrapper masonry-layout c-gutter-30 c-mb-30">
                    @isset($Directors)

                        @foreach ($Directors as $data)
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="vertical-item ls text-center course box-shadow" style="padding:6px">
                                    <div class="item-media"
                                        style="background-image: url({{ asset($data->URL) }}); height:45vh; background-size:100%; background-repeat: no-repeat; background-position:center">
                                        <a href="#"></a>
                                    </div>
                                    <div class="item-content">
                                        <h6 style="font-size: 15px; height: 7vh; overflow-y: scroll;">

                                            {{ $data->Name }} | {{ $data->Title }}

                                        </h6>
                                        <p
                                            style="height: 40vh; overflow-y: scroll; text-align: justify; padding-left: 10px; padding-right: 10px
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
