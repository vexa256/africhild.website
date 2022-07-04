<section class="ls ms s-py-xl-150 s-py-lg-130 s-py-md-90 s-py-60 c-gutter-0">
    <div class="container">
        @isset($GlobalData)

            @foreach ($GlobalData as $data)
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
