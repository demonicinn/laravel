<div class="content-wrapper">
    <section class="content-title">
        <h1>{{ $title }}</h1>
    </section>
    

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ Session::get('error') }}
        </div>
    @endif

    @yield('content')
</div>