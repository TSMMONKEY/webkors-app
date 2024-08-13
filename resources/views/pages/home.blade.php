@extends('layouts.main')
@section('title', 'home')


@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Expert Marketing and <br><span class="main-h1">Ad Services | Webkors</span></h3>
                                <div class="video_service_btn">
                                    <a href="/services" class="boxed-btn3">All Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Website & Web App<br> <span class="main-h1">Development | Webkors</span></h3>
                                <div class="video_service_btn">
                                    <a href="/services" class="boxed-btn3">All Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Website & Web App<br> <span class="main-h1">Maintenance | Webkors</h3>
                                <div class="video_service_btn">
                                    <a href="/services" class="boxed-btn3">All Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>What we Do?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Marketing & SEO Agency</h3>
                        <p>At Webkors is Where we craft tailored strategies to drive traffic, increase visibility, and grow
                            your business.
                        </p>
                        <a href="/services/digital-marketing" class="learn_more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Website Design Solutions</h3>
                        <p>Solutions designed to optimize rankings, engage audiences, and deliver measurable results.</p>
                        <a href="/services/website-design" class="learn_more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Website Maintenance</h3>
                        <p>
                            Website maintenance to ensure your site runs smoothly, stays secure, and performs at its best.
                        </p>
                        <a href="/services/website-maintenance" class="learn_more">Learn More</a>
                    </div>
                </div>
                {{-- <div class="col-xl-4 col-md-6 col-lg-3">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="img/svg_icon/4.svg" alt="">
                        </div>
                        <h3>Finance Solution</h3>
                        <p>Stay updated with our latest news and offers. Enter your email below!</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- about_info_area start  -->
    <div class="about_info_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_text">
                        <h3>Why Webkors?</h3>
                        <p>
                            Welcome to <strong>WebKors</strong>, where creativity meets functionality in web design. At
                            <strong>WebKors</strong>, we specialize in crafting compelling digital experiences...
                        </p>
                        <a href="/about" class="boxed-btn3">About Us</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about_thumb">
                        <img src="img/service/about.png" alt="">
                    </div>
                </div>
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

    <!-- case_study_area  -->
    <div class="case_study_area mt-5">
        <div class="container">
            <div class="border_bottom">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-4">
                            <h3>Projects</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="case_active owl-carousel">
                            <div class="single_case">
                                <div class="case_thumb">
                                    <img src="img/case/1.png" alt="">
                                </div>
                                <div class="case_heading">
                                    <span>Finance Solution</span>
                                    <h3><a href="#">Consumer Products Consulting</a></h3>
                                </div>
                            </div>
                            <div class="single_case">
                                <div class="case_thumb">
                                    <img src="img/case/2.png" alt="">
                                </div>
                                <div class="case_heading">
                                    <span>Finance Solution</span>
                                    <h3><a href="#">Consumer Products Consulting</a></h3>
                                </div>
                            </div>
                            <div class="single_case">
                                <div class="case_thumb">
                                    <img src="img/case/3.png" alt="">
                                </div>
                                <div class="case_heading">
                                    <span>Finance Solution</span>
                                    <h3><a href="#">Consumer Products Consulting</a></h3>
                                </div>
                            </div>
                            <div class="single_case">
                                <div class="case_thumb">
                                    <img src="img/case/1.png" alt="">
                                </div>
                                <div class="case_heading">
                                    <span>Finance Solution</span>
                                    <h3><a href="#">Consumer Products Consulting</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /case_study_area  -->

    <!-- accordion  -->
    <div class="accordion_area pt-0">
        <div class="container">
            <h2 class="col-12 text-center mb-3">Frequently ask</h2>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6  ">
                    <div class="accordion_thumb  ">
                        <img src="/img/banner/faq.jpeg" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="faq_ask">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How much does it cost to design a website?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion" style="">
                                    <div class="card-body">
                                        The cost of designing a website can vary greatly depending on the scope of the
                                        project, the level of customization and the experience of the designer. On average,
                                        the cost can range from a few hundred to several thousand rands.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            What are some of the latest trends in web design?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion" style="">
                                    <div class="card-body">
                                        Some of the latest trends in web design include responsive design, minimalism, bold
                                        typography, dynamic scrolling, and the use of microinteractions. It's also becoming
                                        increasingly common to use AI and machine learning in web design, to create more
                                        personalized and interactive user experiences.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            What are the key components of web design?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion" style="">
                                    <div class="card-body">
                                        The key components of web design include layout, typography, color scheme, images,
                                        and functionality. A well-designed website should also be easy to navigate,
                                        accessible, and optimized for search engines.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingeFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Why is web design important?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordion" style="">
                                    <div class="card-body">
                                        Web design is important because it is the first thing a user sees when they visit a
                                        website and it can impact the user's overall experience and impression of the brand.
                                        A well-designed website can increase engagement and lead to more conversions.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- accordion  -->

    <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>
                                    Webkors did an exceptional job on our PHP MVC site. Their expertise in Laravel ensured
                                    that our complex application was built with clean, maintainable code.
                                </p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Gondo Skills Institute</h3>
                                    <span>Founder</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>
                                    The PHP MVC site that Webkors created for us is simply outstanding. Their attention to
                                    detail and understanding of our requirements led to a robust, scalable solution.
                                </p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Instant Solar</h3>
                                    <span>Founder</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>
                                    Webkors did an exceptional job on our PHP MVC site. Their expertise in Laravel ensured
                                    that our complex application was built with clean, maintainable code.
                                </p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Karas the DJ</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- team_area  -->
    {{-- <div class="team_area">
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

    <div class="contact_form_quote mt-5">
        <div class="container">
            <h2 class="col-12 text-center">Get A Free Quote</h2>
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="form_wrap">
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
                        <img src="img/banner/contact.jpeg" alt="">
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
                        <a class="boxed-btn3 mt-3" href="#">+27 60-636-0629</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Information_area  end -->
@endsection
