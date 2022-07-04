@include('header.header')
@include('modals.modals')

<div id="canvas">
    <div id="box_wrapper">

        @include('nav.top')
        @include('nav.nav')

        @isset($Page)
            @include('partials.PageTitle')

            @include($Page)
        @else
            @include('slider.slider')
        @endisset




        @include('footer.footer')

    </div>
</div>
@include('scripts.scripts')
