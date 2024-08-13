@extends('layouts.main')

@section('title', 'About Webkors')
@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>About <strong><span>Webkors</span></strong></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- about_info_area start  -->
    <div class="about_info_area plus_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_text">
                        <h3>Why Choose <strong>Webkors</strong>?</h3>
                        <p>
                            At <strong>Webkors</strong>, we are dedicated to delivering exceptional web development and
                            digital marketing
                            services tailored to your unique needs.
                            Our team combines creativity with technical expertise to build user-friendly, responsive
                            websites that not only look great but also perform seamlessly.
                        </p>
                        <p>
                            We prioritize your business goals, ensuring that every solution we provide enhances your online
                            presence, drives traffic, and boosts engagement. With a commitment to quality, transparency, and
                            customer satisfaction, Webkors is your trusted partner for growing your business in the digital
                            age.
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about_thumb">
                        <img src="img/about/about-webkors.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_thumb">
                        <img src="img/about/more-about-webkors.jpeg" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about_text">
                        <h3>More About <strong>Webkors</strong>!</h3>
                        <p>
                            <strong>Webkors</strong> is a forward-thinking digital agency committed to helping businesses
                            thrive in the online world. With years of experience and a passion for innovation, we specialize
                            in creating customized web solutions that align with your brand's vision and objectives.
                        </p>
                        <p>
                            Our comprehensive services range from web design and development to digital marketing and SEO,
                            all aimed at enhancing your brand's visibility and success. At Webkors, we believe in building
                            long-lasting partnerships by delivering results-driven strategies and exceptional customer
                            service. Whether you're looking to revamp your website or expand your digital footprint, Webkors
                            is here to guide you every step of the way.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <a href="#" class="boxed-btn3">Sign Up</a>
            </div>
        </div>
    </div>
    <!-- /about_info_area end  -->

    <!-- counter_area  -->
    <div class="counter_area counter_bg_1 overlay_03">
        <div class="container">
            <div class="row">
                {{-- <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="img/svg_icon/group.svg" alt="">
                        </div>
                        <h3> <span class="counter">200</span> <span> +</span> </h3>
                        <p>Team Members</p>
                    </div>
                </div> --}}
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="img/svg_icon/cart.svg" alt="">
                        </div>
                        <h3> <span class="counter">97</span> <span>%</span> </h3>
                        <p>Business Success</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="img/svg_icon/heart.svg" alt="">
                        </div>
                        <h3> <span class="counter">500</span></h3>
                        <p>Happy Client</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="img/svg_icon/respect.svg" alt="">
                        </div>
                        <h3> <span class="counter">500</span></h3>
                        <p>Business Done</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /counter_area  -->

    <!-- service_area_start -->
    <div class="service_area minus_padding mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>What we Do?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @include('layouts.includes.services')
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- team_area  -->
    {{-- <div class="team_area minus_padding">
        <div class="container">
            <div class="border_bottom">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-40 text-center">
                            <h3>
                                Expert Team
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_team">
                            <div class="team_thumb">
                                <img src="img/team/3.png" alt="">
                            </div>
                            <div class="team_info text-center">
                                <h3>Milani Mou</h3>
                                <p>Photographer</p>
                                <div class="social_link">
                                    <ul>
                                        <li><a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_team">
                            <div class="team_thumb">
                                <img src="img/team/2.png" alt="">
                            </div>
                            <div class="team_info text-center">
                                <h3>Jasmine Pinky</h3>
                                <p>Photographer</p>
                                <div class="social_link">
                                    <ul>
                                        <li><a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_team">
                            <div class="team_thumb">
                                <img src="img/team/1.png" alt="">
                            </div>
                            <div class="team_info text-center">
                                <h3>Piya Zosoldos</h3>
                                <p>Photographer</p>
                                <div class="social_link">
                                    <ul>
                                        <li><a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- /team_area  -->

    <div class="contact_form_quote">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="form_wrap">
                        <h3>Get Free Quote</h3>
                        <form action="{{ route('home.quotes') }}" method="POST">@csrf
                            <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <textarea type="text" name="message" id="" cols="30" rows="10" placeholder="Message"
                                value="{{ old('message') }}"></textarea>
                            @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <button type="submit" class="boxed-btn3">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="contact_thumb">
                        <img src="img/banner/contact_thumb.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Information_area  -->
    <div class="Information_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-8">
                    <div class="info_text text-center">
                        <h3>Get in Touch Today!</h3>
                        <p>Have questions or need assistance? Our team is here to help you every step of the way.</p>
                        <a class="boxed-btn3" href="#">+27 60-636-0629</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Information_area  end -->
@endsection
