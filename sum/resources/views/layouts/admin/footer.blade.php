	    </div>

    	<script src="{{ asset('admin/vendor/jQuery/jquery-2.2.3.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/jquery-fullscreen/jquery.fullscreen-min.js') }}"></script>
        <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/fastclick/fastclick.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/chartjs/Chart.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('admin/resources/js/app.min.js') }}"></script>

        <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
        
        <script src="{{ asset('admin/resources/js/demo.js') }}"></script>
        <script src="{{ asset('js/delete.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

        <script>var BASE_URL = jQuery('meta[name="site-url"]').attr('content');</script>
        
        @yield('script')

    </body>

</html>