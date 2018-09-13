<footer>
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4 col-md-4">
                    <div class="ftr-logo">
                        @if($setting->footer_logo)
                        <img src="{{ asset('uploads/site/'.$setting->footer_logo) }}">
                        @endif
                    </div>
                </div>
                <div class="col-12 col-sm-3 col-md-3">
                    <div class="site-widget">
                        <h2>Get in Touch</h2>
                        <ul>
                            <li>
                                <a href="mailto:{{ $setting->support_email }}">{{ $setting->support_email }}</a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}">{{ $setting->domain }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-2 col-md-2">
                    <div class="site-widget">
                        <h2>SiteMap</h2>
                        <ul>
                            <li>
                                <a href="">Home</a>
                            </li>
                            <li>
                                <a href="">About Us</a>
                            </li>
                            <li>
                                <a href="">Success Stories</a>
                            </li>
                            <li>
                                <a href="">My Programs</a>
                            </li>
                            <li>
                                <a href="">Contact Us</a>
                            </li>
                            <li>
                                <a href="">Book With Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-sm-3 col-md-3">
                    <div class="site-widget social-widget">
                        <h2>Have a question? Contact us <a href="#">here</a></h2>
                        <div class="social-icon">
                            <ul>
                                @if($setting->facebook)
                                <li>
                                  <a href="{{ $setting->facebook }}">
                                    <i class="fa fa-facebook" aria-hidden="true"></i> 
                                  </a>
                                </li>
                                @endif

                                @if($setting->twitter)
                                <li>
                                  <a href="{{ $setting->twitter }}">
                                    <i class="fa fa-twitter" aria-hidden="true"></i> 
                                  </a>
                                </li>
                                @endif

                                @if($setting->youtube)
                                <li>
                                  <a href="{{ $setting->youtube }}">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i> 
                                  </a>
                                </li>
                                @endif

                                @if($setting->vimeo)
                                <li>
                                  <a href="{{ $setting->vimeo }}">
                                    <i class="fa fa-vimeo-square" aria-hidden="true"></i> 
                                  </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>