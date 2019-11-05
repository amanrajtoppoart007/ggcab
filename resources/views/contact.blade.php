@extends('user.layout.app')

@section('content')
<div class="banner row no-margin" style="background-image: url('{{ asset('asset/img/banner-bg.jpg') }}');">
    <div class="banner-overlay"></div>
    <div class="container">
        <div class="col-md-8">
            <h2 class="banner-head"><span class="strong">Our safety standards make sure that your families,
friends and girls are</span><br>comfortable and secure throughout the trip!</h2>
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
            <h2>24/7 Customer Support</h2>
            <div class="title-divider"></div>
            <p>A dedicated 24x7 customer support team always at your service to help solve any problem</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Your Safety First</h2>
            <div class="title-divider"></div>
            <p>Keep your loved ones informed about your travel routes or call emergency services when in need</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Top Rated Driver-Partners</h2>
            <div class="title-divider"></div>
            <p>All our driver-partners are background verified and trained to deliver only the best experience</p>
        </div>

    </div>
</div>

<div class="row gray-section no-margin full-section">
    <div class="container">                
        <div class="col-md-6 content-block">
            <h3>Our Location </h3>
            <h2>Registered office:</h2>
            <div class="title-divider"></div>
            <p>Go Green cab services private limited <br>2 Street, behind shiv bagh pandri, Raipur, Chhattisgarh, 492001
<br>Phone no. 07714062888</p>
           <!-- <a class="content-more-btn" href="https://www.ggcab.in/login">SEE HOW IT WORKS <i class="fa fa-chevron-right"></i></a>-->
        </div>
        <div class="col-md-6 full-img text-center" style="background-image: url({{ asset('asset/img/driver-car.jpg') }});"> 
            <img src="img/anywhere.png">
        </div>
    </div>
</div>

<!--<div class="row white-section no-margin">
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
</div>-->
            
<div class="row find-city no-margin">
    <div class="container">
        <h2>Start making money</h2>
        <p>Ready to make money? The first step is to sign up online.</p>

        <a class="content-more-btn" href="https://www.ggcab.in/login">START DRIVE NOW<i class="fa fa-chevron-right"></i></a>
    </div>
</div>

<div class="footer-city row no-margin" style="background-image: url({{ asset('asset/img/footer-city.png') }});"></div>
@endsection