@extends('user.layout.app')

@section('content')
<div class="banner row no-margin" style="background-image: url('{{ asset('asset/img/banner-bg.jpg') }}');">
    <div class="banner-overlay"></div>
    <div class="container">
        <div class="col-md-8">
            <h2 class="banner-head"><span class="strong">Work that puts you first</span><br>Drive when you want, make what you need</h2>
        </div>
        <div class="col-md-4">
            <div class="banner-form">
                <div class="row no-margin fields">
                    <div class="left">
                    	<img src="{{asset('asset/img/ride-form-icon.png')}}">
                    </div>
                    <div class="right">
                        <a href="{{url('provider/register')}}">
                            <h3>Sign up to drive</h3>
                            <h5>SIGN UP <i class="fa fa-chevron-right"></i></h5>
                        </a>
                    </div>
                </div>

                <div class="row no-margin fields">
                    <div class="left">
                    	<img src="{{asset('asset/img/ride-form-icon.png')}}">
                    </div>
                    <div class="right">
                        <a href="{{url('provider/login')}}">
                            <h3>Sign in to drive</h3>
                            <h5>SIGN IN <i class="fa fa-chevron-right"></i></h5>
                        </a>
                    </div>
                </div>

                <p class="note-or">Or <a href="{{ url('login') }}">sign in</a> with your rider account.</p>
            </div>
        </div>
    </div>
</div>

<div class="row white-section no-margin">
    <div class="container">
        
        <div class="col-md-4 content-block small">
            <h2>Set your own schedule</h2>
            <div class="title-divider"></div>
            <p>You can drive with {{ Setting::get('site_title', 'Tranxit') }} anytime, day or night, 365 days a year. When you drive is always up to you, so it never interferes with the important things in your life.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Make more at every turn</h2>
            <div class="title-divider"></div>
            <p>Trip fares start with a base amount, then increase with time and distance. And when demand is higher than normal, drivers make more.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Let the app lead the way</h2>
            <div class="title-divider"></div>
            <p>Just tap and go. You’ll get turn-by-turn directions, tools to help you make more, and 24/7 support—all available right there in the app.</p>
        </div>

    </div>
</div>

<div class="row gray-section no-margin full-section">
    <div class="container">                
        <div class="col-md-6 content-block">
            <h3>About GG</h3>
            <h2>Designed just for you</h2>
            <div class="title-divider"></div>
            <p>Founded in 2018 by Amit Rastogi and Laxmi Rastogi, GG cab integrates city transportation
for customers and driver-partners onto a mobile technology platform ensuring convenient,
transparent, and quick service fulfillment. <br><br>GG cab is focused on leveraging the best of
technology and building innovative solutions ground-up, that are relevant at global scale.<br> <br>
Beyond offering a highly personal experience for users during their rides, GG Play also
allows its partners like Microsoft, Android Music, amongst others, to build a high quality
interactive and productive experience for its users. <br><br>Using the GG cab mobile app, users
across cities, can connect with over 10000 driver-partners across cabs, auto-rickshaws, and
taxis. Driven by a hyper local approach, GG cab is committed to its mission of building
mobility for a billion people.</p>
            <a class="content-more-btn" href="https://www.ggcab.in/login">SEE HOW IT WORKS <i class="fa fa-chevron-right"></i></a>
        </div>
        <div class="col-md-6 full-img text-center" style="background-image: url({{ asset('asset/img/driver-car.jpg') }});"> 
            <!-- <img src="img/anywhere.png"> -->
        </div>
    </div>
</div>

<div class="row white-section no-margin">
    <div class="container">
        
        <div class="col-md-4 content-block small">
            <h2>Rewards</h2>
            <div class="title-divider"></div>
            <p>You’re in the driver’s seat. So reward yourself with discounts on fuel, vehicle maintenance, cell phone bills, and more. Reduce your daily expenses and take home extra cash.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Requirements</h2>
            <div class="title-divider"></div>
            <p>Know you’re ready to hit the road. Whether you’re driving your own car or a commercially-licensed vehicle, you must meet the minimum requirements and complete a safety screening online.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Safety</h2>
            <div class="title-divider"></div>
            <p>When you drive with {{ Setting::get('site_title', 'Tranxit') }}, you get 24/7 driver support and insurance coverage. And all riders are verified with their personal information and phone number, so you’ll know who you’re picking up and so will we.</p>
        </div>

    </div>
</div>
            
<div class="row find-city no-margin">
    <div class="container">
        <h2>Start making money</h2>
        <p>Ready to make money? The first step is to sign up online.</p>

        <a class="content-more-btn" href="https://www.ggcab.in/login">START DRIVE NOW<i class="fa fa-chevron-right"></i></a>
    </div>
</div>

<div class="footer-city row no-margin" style="background-image: url({{ asset('asset/img/footer-city.png') }});"></div>
@endsection