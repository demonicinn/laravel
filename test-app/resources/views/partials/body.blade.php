<div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
            @include('partials.nav')
        </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                <span data-feather="check-circle"></span>
                {{ Session::get('success') }}
            </div>
        @endif

        @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                <span data-feather="x-circle"></span>
                {{ Session::get('error') }}
            </div>
        @endif

        @yield('main')
    </main>
</div>