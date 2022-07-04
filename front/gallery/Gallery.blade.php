<section class="ls portfolio s-py-xl-150 s-py-lg-120 s-py-md-80 s-py-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row isotope-wrapper shortcode-gallery masonry-layout c-gutter-30 c-mb-30"
                    data-filters=".gallery-filters">


                    @isset($GlobalData)

                        @foreach ($GlobalData as $data)
                            <div class="col-xl-3 col-sm-6 business entertainment corporate">
                                <div
                                    class="vertical-item item-gallery content-absolute content-show-hover text-center text-center cs">
                                    <div class="item-media">
                                        <img src="{{ $data->URL }}" alt="AfriChild Center Makerere">
                                    </div>
                                    <div class="item-content ">
                                        <h6>
                                            <a href="{{ $data->URL }}" data-lightbox="AfriChild Center Makerere"
                                                data-title="The AfriChild Center In Photos">
                                        </h6>
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" href="{{ $data->URL }}"></a>
                                            {{-- <a class="link-anchor" href="gallery-single.html"></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @endisset


                </div>
                <!-- .isotope-wrapper-->
            </div>
        </div>
    </div>
</section>
