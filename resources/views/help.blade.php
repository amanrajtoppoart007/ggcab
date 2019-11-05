@extends('user.layout.app')

@section('content')
<div class="banner row no-margin" style="background-image: url('{{ asset('asset/img/banner-bg.jpg') }}');">
    <div class="banner-overlay"></div>
    <div class="container">
        <div class="col-md-8">
            <h2 class="banner-head"><span class="strong">Gg Cab Safety Standards</span><br>comfortable and secure throughout the trip!</h2>
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
            <h2>TRACK YOUR RIDE</h2>
            <div class="title-divider"></div>
            <p>Real time ride details can be shared with family and friends.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>VERIFIED PROFESSIONAL DRIVERS</h2>
            <div class="title-divider"></div>
            <p>Police verification and thorough background checks are conducted on Gg cab drivers.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>NUMBER PRIVACY</h2>
            <div class="title-divider"></div>
            <p>Customer’s mobile number is masked at the driver’s end to ensure privacy.</p>
        </div>

    </div>
</div>

<div class="row gray-section no-margin full-section">
    <div class="container">                
        <div class="col-md-6 content-block">
            <h3>Find answers</h3>
            <h3>To all your important questions</h3>
            <div class="title-divider"></div>
            <p>1. How do I become a Ggcab Fleet Operator?<br> You can become a Ggcab Fleet Operator by attaching multiple cars owned by you or your company.<br> 2. How will I receive my daily bookings? <br>You will receive your daily bookings on the Ggcab app installed on your device. Training will be provided on the office and App. <br>3. Will I get priority bookings? <br>No, we do not have a concept of priority bookings. However Ggcab has a large customer base, hence there is no shortage of bookings for you. <br>4. What is the difference between a Ggcab Fleet Operator and a DCO (driver-cum- owner)?<br> Since you can have multiple cars attached as a Ggcab Fleet Operator, the revenue will be higher. You function like a business entity than just an individual driver-partner. Hence the financial growth rate is higher. <br>5. Is there a limitation on the number of cars I can attach to my fleet? <br>No, we do not impose any limitation to the number of cars you can attach to your Ggcab Fleet. <br>6. Will Ggcab provide driver-partners for my fleet? <br>We cannot guarantee providing driver-partners for your fleet but we will definitely assist you in finding them. <br>7. When can I become a Ggcab Fleet Operator? <br>Visit the nearest Ggcab Partner office with the required documents. Our team will be happy to assist you. <br>8. Can I have two drivers for a single car?<br> Yes, of course you can have two drivers for any single car, provided they are both attached as driver-partners with us. <br>9. What kind of support can I expect from Ggcab to handle my daily fleet operations?<br> A. We provide an operator app for mobile phones and web portal for computers. It allows you to access the productivity and performance of all your cars attached on our platform in real-time.<br> B. 24/7 partner care helpline<br> C. Attachment training program. <br>D. Dedicated counter at offices for any issue resolution. <br>E. On-field training programs. <br>10. Will Ggcab pay my drivers directly? <br>No, we do not pay your drivers directly. For an operator, payments are processed to a single operator a/c. You will need to pay your drivers. <br>11. Will I make more money as a Ggcab Fleet Operator? <br>The amount of money you earn as a Fleet Operator totally depends on your fleet’s performance. However, you will earn more revenue compared to a DCO as your revenue is not limited to one car. <br>12. Will I continue getting the same incentive scheme for a specific time period? <br>This is purely decided by the management after considering the market fluctuations.</p>
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