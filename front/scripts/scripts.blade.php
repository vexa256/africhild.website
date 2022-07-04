<script src="{{ asset('js/compressed.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
{{-- <script src="{{ asset('js/switcher.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@isset($Photo)
    <script src="{{ asset('assets/light/dist/js/lightbox.min.js') }}"></script>
@endisset
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
</body>


</html>
