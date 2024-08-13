@extends('layouts.single-service')

@section('title', 'Website Maintenance')
@section('service-name', 'Website Maintenance')

@section('content')
    <div class="col-xl-12 services-hero-section overlay web-maintenance-img">
        <div class="container sslider_text" style="padding-top: 105px;">
            <h3>Expert <strong>Website <br> Maintenance </strong><span class="main-h1">| Webkors</span></h3>
        </div>
    </div>

    <div class="about_info_area plus_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_text">
                        <h3><strong>Website Maintenance</strong> At It's Best</h3>
                        <p>
                            At Webkors, our Website Maintenance service is designed to keep your site running seamlessly and securely. We offer a comprehensive suite of maintenance options, including regular security updates to protect against vulnerabilities, performance monitoring to ensure optimal speed, and routine backups for data safety.
                        </p>
                        <p>
                            Our team handles content updates, plugin and theme management, and broken link checks to keep your site fresh and user-friendly. Additionally, we conduct security scans to identify and remove malware, monitor uptime to prevent downtime, optimize your database for improved performance, and provide technical support for any issues that arise. With Webkors, you can trust that your website will remain in top shape, allowing you to focus on your business while we handle the details.
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about_thumb">
                        <img src="/img/service/web-maintenance.jpeg" alt="" style="max-height: 500px; width:95%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Price List --}}
    <div class="service_area pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h2>Website Maintenance Prices</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="/img/svg_icon/1.svg" alt="">
                        </div>
                        <h2 class="mt-4 mb-0">Silver</h2>
                        <h3  class="mt-2" style="font-weight: 900">R500<small style="font-size: 60%; font-weight: 600">/Per Month</small></h3>
                        <ul class="unordered-list text-left">
                            <li>Website Performance Optimization</li>
                            <li>2 hour Brainstorming</li>
                            <li>Website Revamp</li>
                            <li>Security Scans</li>
                            <li>3 Website Reviews</li>
                            <li style="text-decoration: line-through;">Website Revamp</li>
                            <li style="text-decoration: line-through;">E-commerce Integration</li>
                            <li style="text-decoration: line-through;">Technical Support</li>
                            <li style="text-decoration: line-through;">Plugin and Theme Management</li>
                            <li style="text-decoration: line-through;">Backup and Restore Services</li>
                        </ul>
                        <a class="genric-btn primary-border radius mt-3" href="/services/digital-marketing" class="learn_more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="/img/svg_icon/1.svg" alt="">
                        </div>
                        <h2 class="mt-4 mb-0">Gold</h2>
                        <h3  class="mt-2" style="font-weight: 900">R1 500<small style="font-size: 60%; font-weight: 600">/Per Month</small></h3>
                        <ul class="unordered-list text-left">
                            <li>SEO</li>
                            <li>Video Marketing</li>
                            <li>Keyword Research</li>
                            <li>Pay-Per-Click (PPC)</li>
                            <li>Content Marketing</li>
                            <li>Email Marketing Campaign</li>
                            <li>Social Media Management</li>
                            <li style="text-decoration: line-through;">Brand Strategy Development</li>
                            <li style="text-decoration: line-through;">Conversion Rate Optimization </li>
                            <li style="text-decoration: line-through;">Website Analytics and Reporting</li>
                        </ul>
                        <a class="genric-btn primary-border radius mt-3" href="/services/digital-marketing" class="learn_more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="/img/svg_icon/1.svg" alt="">
                        </div>
                        <h2 class="mt-4 mb-0">Premium</h2>
                        <h3  class="mt-2" style="font-weight: 900">R3 500+<small style="font-size: 60%; font-weight: 600">/Per Month</small></h3>
                        <ul class="unordered-list text-left">
                            <li>SEO</li>
                            <li>Video Marketing</li>
                            <li>Keyword Research</li>
                            <li>Pay-Per-Click (PPC)</li>
                            <li>Content Marketing</li>
                            <li>Email Marketing Campaign</li>
                            <li>Social Media Management</li>
                            <li>Brand Strategy Development</li>
                            <li>Conversion Rate Optimization </li>
                            <li>Website Analytics and Reporting</li>
                        </ul>
                        <a class="genric-btn primary-border radius mt-3" href="/services/digital-marketing" class="learn_more">Learn More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- Price List --}}

    <!-- case_study_area  -->
    <div class="case_study_area case_page">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40">
                        <h3>More Services</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_case">
                        <div class="case_thumb">
                            <img src="/img/case/1.png" alt="">
                        </div>
                        <div class="case_heading">
                            <span>Finance Solution</span>
                            <h3><a href="#">Consumer Products Consulting</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_case">
                        <div class="case_thumb">
                            <img src="/img/case/2.png" alt="">
                        </div>
                        <div class="case_heading">
                            <span>Finance Solution</span>
                            <h3><a href="#">Consumer Products Consulting</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_case">
                        <div class="case_thumb">
                            <img src="/img/case/3.png" alt="">
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
    <!-- /case_study_area  -->

    <!-- Information_area  -->
    <div class="Information_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-8">
                    <div class="info_text text-center">
                        <h3>For Any Information Call Us</h3>
                        <p>Stay updated with our latest news and offers. Enter your email below!</p>
                        <a class="boxed-btn3" href="#">+10 673 763 6786</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Information_area  end -->
@endsection
