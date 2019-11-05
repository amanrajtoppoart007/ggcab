@extends('user.layout.app')

@section('content')
<div class="banner row no-margin" style="background-image: url('{{ asset('asset/img/banner-bg.jpg') }}');">
    <div class="banner-overlay"></div>
    <div class="container">
        <div class="col-md-8">
            <h2 class="banner-head"><span class="strong">The Field of Joy</span><br>Join when you want, make your career with us</h2>
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
            <h2>Why at GG</h2>
            <div class="title-divider"></div>
            <p>We believe in the saying &quot;Ambitious goals make for outstanding achievements&quot; and If you are oriented towards making an impact, then GG cab is the place for you! As an organisation, we focus on working fast and hard to make a quick impact. we set audacious goals for ourselves.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Enterprising</h2>
            <div class="title-divider"></div>
            <p>We have the courage to be creative and always willing to experiment with new
opportunities!</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>We are Passionate</h2>
            <div class="title-divider"></div>
            <p>We are passionate about our mission to provide mobility for a billion Indians. What&#39;s
more? Once we are done with work we party even harder!</p>
        </div>

    </div>
</div>

<div class="row gray-section no-margin full-section">
    <div class="container">                
        <div class="col-md-6 content-block">
            <h2>Ambitious Goals</h2>
            <div class="title-divider"></div>
            <p>We believe in the saying &quot;Ambitious goals make for outstanding achievements&quot; and
we set audacious goals for ourselves.</p>
            <!--<a class="content-more-btn" href="#">SEE HOW IT WORKS <i class="fa fa-chevron-right"></i></a>-->
        </div>
        <div class="col-md-6 full-img text-center" style="background-image: url({{ asset('asset/img/driver-car.jpg') }});"> 
            <!-- <img src="img/anywhere.png"> -->
        </div>
    </div>
</div>

<div class="row white-section no-margin">
    <div class="container">
        
        <div class="col-md-4 content-block small">
            <h2>Obsessively Hyper Local</h2>
            <div class="title-divider"></div>
            <p>We intrinsically understand the transportation needs of India. Our teams continue to
create hyper local solutions to meet those needs.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Infectious Energy</h2>
            <div class="title-divider"></div>
            <p>There is never a dull moment at GG cab. We are constantly ideating, innovating and
deliberating! Join us to be part of this buzz.</p>
        </div>

        <div class="col-md-4 content-block small">
            <h2>Let us know your interset</h2>
            <div class="title-divider"></div>
            <p>If you think you are ready to be part of a dynamic, fast growing versatile and
young workforce apply for our existing openings across cities today.</p>
        </div>

    </div>
</div>
            
<div class="row find-city no-margin">
    <div class="container">
        <h2>Join with Us</h2>
        <p>Ready to make first step with us apply online for our existing openings across cities today, we will get back to you shortly.</p>
        <h3>career@ggcab.in</h3>

        <!--<button type="submit" class="full-primary-btn drive-btn"href="carrer@ggcab.in">carre@ggcab.in</button>-->
    </div>
</div>

<div class="footer-city row no-margin" style="background-image: url({{ asset('asset/img/footer-city.png') }});"></div>
@endsection


