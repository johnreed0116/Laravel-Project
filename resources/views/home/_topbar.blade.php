<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="social-media">
                    <ul>
                        @if($setting->facebook != null)<li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a></li>@endif
                        @if($setting->instagram != null)<li><a href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a></li>@endif
                        @if($setting->twitter != null)<li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>@endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-details">
                    <ul>
                        <li><i class="fas fa-phone fa-rotate-90"></i> {{ $setting->phone }}</li>
                        <li><i class="fas fa-map-marker-alt"></i> {{ $setting->address }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
