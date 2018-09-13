<div class="copy-right">
    {{ $setting->footer_text }}
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/delete.js') }}"></script>

<script>var BASE_URL = jQuery('meta[name="site-url"]').attr('content');</script> 
@yield('script')

{{ $setting->footercode }}

</body>
</html>