@extends('master-page.portfolio_master')

@section('main_content')
    <!-- Intro & banner -->
    <section id="home">
        <div class="hero-wrap">
            <div class="hero-mask opacity-8 bg-dark"></div>
            <div class="hero-bg parallax" style="background-image:url('{{asset('upload-photos/banner-background-photo')}}/{{$banner_update_data->background_photo}}');"></div>
            <div class="hero-content d-flex flex-column fullscreen py-5">
                <div class="container my-auto">
                    <div class="row">
                        <div class="col-lg-10 mx-auto text-center">
                            <div class="bg-white shadow rounded-pill p-2 mb-4 d-inline-block wow zoomIn"> <img class="img-fluid rounded-pill d-block" src="{{asset('upload-photos/banner-profile-photo')}}/{{$banner_update_data->profile_photo}}" title="I'm David" alt=""> </div>
                            <h2 class="text-10 text-white text-uppercase fw-600 mb-4 wow fadeInUp">{{$banner_update_data->self_description}}</h2>
                            <p class="text-5 text-light pb-3 wow fadeInUp">{{$banner_update_data->self_location}}</p>
                            <a href="#about" class="btn btn-primary rounded-0 smooth-scroll wow fadeInUp">About Me</a>
                        </div>
                    </div>
                </div>
                <div class="container py-2 text-center"> <a href="#about" class="scroll-down-arrow text-white smooth-scroll"><span class="animated"><i class="fas fa-arrow-down"></i></span></a> </div>
            </div>
        </div>
    </section>
     <!-- Intro & banner end -->

    <!-- Header -->
    <header id="header" class="sticky-top">
        <!-- Navbar -->
        <nav class="primary-menu navbar navbar-expand-lg text-uppercase navbar-line-under-text fw-600">
            <div class="container position-relative">
                <div class="col-auto col-lg-2 d-inline-flex ps-lg-0">
                    <!-- Logo -->
                    <a class="logo" href="{{route('index')}}" title="Callum"> <img src="{{asset('upload-photos/logo')}}/{{$logo_and_favicon_update_data->logo_image}}" alt="logo"/> </a>
                    <!-- Logo End -->
                </div>
                <div class="col col-lg-8 navbar-accordion px-0">
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"><span></span><span></span><span></span></button>
                    <div id="header-nav" class="collapse navbar-collapse justify-content-center">
                        <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link smooth-scroll active" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#resume">Resume</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#testimonial">Client</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-lg-2 d-flex justify-content-end ps-0">
                    <ul class="social-icons">
                        @foreach ($social_icons_all_data as $social_icons )
                            <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="{{$social_icons->social_link}}" target="_blank" title="" data-bs-original-title="Facebook"><i class="fab {{$social_icons->social_icon}}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
    </header>
    <!-- Header End -->

    <div id="content" role="main">
        <!-- About start -->
        <section id="about" class="section">
            <div class="container">
                <!-- Heading -->
                <p class="text-center mb-2 wow fadeInUp"><span class="bg-primary text-dark px-2">About Me</span></p>
                <h2 class="text-10 fw-600 text-center mb-5 wow fadeInUp">Know Me More</h2>
                <!-- Heading end-->

                <div class="row">
                <div class="col-lg-8 text-center text-lg-start wow fadeInUp">
                    <h2 class="text-8 fw-400 mb-3">{{$about_update_data->simple_text}} <span class="fw-700 border-bottom border-3 border-primary">{{$about_update_data->name}}</span></h2>
                    <p class="text-5">{{$about_update_data->description}}</p>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="featured-box style-4">
                    <div class="featured-box-icon text-25 fw-500 bg-primary rounded-circle"><span class="wow heartBeat" data-wow-delay="1.3s">{{$about_update_data->experiance_number}}</span></div>
                    <h3 class="text-7 wow rubberBand" data-wow-delay="2s">{{$about_update_data->month_year}} of <span class="fw-700">Experiance</span></h3>
                    </div>
                </div>
                </div>
                <div class="row gy-3 mt-4">
                <div class="col-6 col-lg-3 wow fadeInUp">
                    <p class="text-muted fw-500 mb-0">Name:</p>
                    <p class="text-4 text-dark fw-600 mb-0">{{$self_information_update_data->name}}</p>
                </div>
                <div class="col-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <p class="text-muted fw-500 mb-0">Email:</p>
                    <p class="text-4 fw-600 mb-0"><a class="link-dark" href="{{$self_information_update_data->email_link}}">{{$self_information_update_data->email}}</a></p>
                </div>
                <div class="col-6 col-lg-2 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="text-muted fw-500 mb-0">Date of birth:</p>
                    <p class="text-4 text-dark fw-600 mb-0">{{$self_information_update_data->date_of_birth}}</p>
                </div>
                <div class="col-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                    <p class="text-muted fw-500 mb-0">From:</p>
                    <p class="text-4 text-dark fw-600 mb-0">{{$self_information_update_data->address}}</p>
                </div>
                </div>
            </div>
        </section>
        <!-- About end -->

        <!-- Services start -->
        <section id="services" class="section bg-light">
            <div class="container">
                <!-- Heading -->
                <p class=" text-center mb-2 wow fadeInUp"><span class="bg-primary text-dark px-2">What I Do?</span></p>
                <h2 class="text-10 fw-600 text-center mb-5 wow fadeInUp">How I can help your next project</h2>
                <!-- Heading end-->

                <div class="row gy-5 mt-5">
                    @forelse ($services_all_data as $services_data )
                        <div class="col-sm-6 col-lg-4 wow fadeInUp">
                            <div class="featured-box text-center px-md-4">
                            <div class="featured-box-icon text-primary text-13"> <i class="fas {{$services_data->icon}}"></i> </div>
                            <h3 class="text-6 fw-600 mb-3">{{$services_data->title}}</h3>
                            <p class="text-muted mb-0">{{$services_data->short_description}}</p>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-10 m-auto">
                            <div class="alert alert-danger">
                                <p>No data To show</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- Services end -->

        <!-- Resume start -->
        <section id="resume" class="section">
            <div class="container">
                <!-- Heading -->
                <p class=" text-center mb-2 wow fadeInUp"><span class="bg-primary text-dark px-2">Resume</span></p>
                <h2 class="text-10 fw-600 text-center mb-5 wow fadeInUp">A summary of My Resume</h2>
                <!-- Heading end-->

                <div class="row g-5 mt-5">
                <!-- My Education -->
                <div class="col-lg-6 wow fadeInUp">
                    <h2 class="text-7 fw-600 mb-4 pb-2">My Education</h2>
                    <div class="border-start border-2 border-primary ps-3">
                        @foreach ($education_all_data as $education_data )
                            <h3 class="text-5">{{$education_data->name_of_degree}}</h3>
                            <p class="mb-2">{{$education_data->collage_university_name}} / {{$education_data->duration}}</p>
                            <p class="text-muted">{{$education_data->short_description}}</p>
                            <hr class="my-4">
                        @endforeach
                    </div>
                </div>
                <!-- My Experience -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="text-7 fw-600 mb-4 pb-2">My Experience</h2>
                    <div class="border-start border-2 border-primary ps-3">
                        @foreach ($experiance_all_data as $experiance_data )
                            <h3 class="text-5">{{$experiance_data->designation}}</h3>
                            <p class="mb-2">{{$experiance_data->company_name}} / {{$experiance_data->duration}}</p>
                            <p class="text-muted">{{$experiance_data->short_description}}</p>
                            <hr class="my-4">
                        @endforeach
                    </div>
                </div>
                </div>

                <!-- My Skills -->
                <h2 class="text-7 fw-600 mb-4 pb-2 mt-5 wow fadeInUp">My Skills</h2>
                <div class="row gx-5">

                    <div class="col-md-6 wow fadeInUp">
                        @forelse ($design_skills_all_data as $design_skills )
                            <p class="fw-500 text-start mb-2">{{$design_skills->skill_name}} <span class="float-end">{{$design_skills->skill_percentage}}%</span></p>
                            <div class="progress progress-sm mb-4">
                                <div class="progress-bar" role="progressbar" style="width: {{$design_skills->skill_percentage}}%" aria-valuenow="{{$design_skills->skill_percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        @empty
                            <div class="col-md-10 m-auto">
                                <div class="alert alert-danger">
                                    <p>No Skill To show</p>
                                </div>
                            </div>
                        @endforelse
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        @forelse ($develop_skills_all_data as $develop_skills )
                            <p class="fw-500 text-start mb-2">{{$develop_skills->skill_name}} <span class="float-end">{{$develop_skills->skill_percentage}}%</span></p>
                            <div class="progress progress-sm mb-4">
                                <div class="progress-bar" role="progressbar" style="width: {{$develop_skills->skill_percentage}}%" aria-valuenow="{{$develop_skills->skill_percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        @empty
                            <div class="col-md-10 m-auto">
                                <div class="alert alert-danger">
                                    <p>No Skill To show</p>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
                <p class="text-center mt-5 wow fadeInUp"><a href="{{route('cv.download',$cv_download->id)}}" class="btn btn-outline-dark shadow-none rounded-0">Download CV</a></p>
            </div>
        </section>
        <!-- Resume end -->

        <!-- Portfolio start -->
        <section id="portfolio" class="section bg-light">
            <div class="container">
                <!-- Heading -->
                <p class=" text-center mb-2 wow fadeInUp"><span class="bg-primary text-dark px-2">Portfolio</span></p>
                <h2 class="text-10 fw-600 text-center mb-5 wow fadeInUp">Some of my most recent projects</h2>
                <!-- Heading end-->

                <!-- Filter Menu -->
                <ul class="portfolio-menu nav nav-tabs fw-600 justify-content-start justify-content-md-center border-bottom-0 mb-4 wow fadeInUp">
                <li class="nav-item"> <a data-filter="*" class="nav-link rounded-0 active" href="#">All</a></li>
                    @foreach ($category_all_data as $category_data )
                        <li class="nav-item"> <a data-filter=".id_number{{$category_data->id}}" href="#" class="nav-link rounded-0">{{$category_data->category_name}}</a></li>
                    @endforeach
                </ul>
                <!-- Filter Menu end -->
                <div class="portfolio wow fadeInUp">
                    <div class="row g-4 mt-3 portfolio-filter">
                        @foreach ($portfolio_area_all_data as $portfolio_area_data )
                            <div class="col-sm-6 col-lg-4 id_number{{$portfolio_area_data->category_id}}" data-wow-delay="{{0.2 * $loop->iteration}}s">
                                <div class="portfolio-box">
                                    <div class="portfolio-img"> <img class="img-fluid d-block" src="{{asset('upload-photos/portfolio_photo')}}/{{$portfolio_area_data->thumbnail_photo}}" alt="not found">
                                    <div class="portfolio-overlay"> <a class="popup-img stretched-link" href="{{asset('upload-photos/portfolio_photo')}}/{{$portfolio_area_data->thumbnail_photo}}"></a>
                                        <div class="portfolio-overlay-details">
                                        <p class="text-primary text-8"><i class="fas {{$portfolio_area_data->icon}}"></i></p>
                                        <h5 class="text-white text-5">{{$portfolio_area_data->title}}</h5>
                                        <span class="text-light">{{$portfolio_area_data->subtitle}}</span> </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </section>
        <!-- Portfolio end -->

        <!-- Call to Action start -->
        <section>
            <div class="hero-wrap">
                <div class="hero-mask opacity-8 bg-dark"></div>
                <div class="hero-bg parallax" style="background-image:url('{{asset('upload-photos/hire-background-photo')}}/{{$hire_text_update_data->bg_photo}}');"></div>
                <div class="hero-content section">
                <div class="container text-center py-5 wow fadeInUp">
                    <h2 class="text-10 fw-600 text-white mb-5">{{$hire_text_update_data->hire_text}}</h2>
                    <a href="#contact" class="btn btn-primary rounded-0 smooth-scroll wow rubberBand" data-wow-delay="1s">Hire Me!</a> </div>
                </div>
            </div>
        </section>
        <!-- Call to Action end -->

        <!-- Testimonial start -->
        <section id="testimonial" class="section bg-secondary">
            <div class="container">
                <!-- Heading -->
                <p class=" text-center mb-2 wow fadeIn"><span class="bg-primary text-dark px-2">Client Speak</span></p>
                <h2 class="text-10 fw-600 text-white text-center mb-5 wow fadeIn">What Some of my Clients Say</h2>
                <!-- Heading end-->
                <div class="row">
                    <div class="col-lg-9 mx-auto wow fadeInUp">
                        <div class="owl-carousel owl-theme owl-light" data-autoplay="true" data-loop="true" data-nav="true" data-margin="30" data-slideby="1" data-stagepadding="5"  data-items-xs="1" data-items-sm="1" data-items-md="1" data-items-lg="1">
                            @foreach ($testimonial_all_data as $testimonial_data )
                                <div class="item text-center px-5"> <span class="text-9 text-primary"><i class="fa fa-quote-start"></i></span>
                                    <p class="text-5 text-white">“{{$testimonial_data->short_description}}”</p>
                                    <img class="img-fluid d-inline-block w-auto rounded-circle shadow" src="{{asset('upload-photos/tastimonial_photo')}}/{{$testimonial_data->photo}}" alt="photo"> <strong class="d-block text-3 fw-600 text-white">{{$testimonial_data->name}}</strong> <span class="text-light">{{$testimonial_data->title}}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial end -->

        <!-- Contact Me start -->
        <section id="contact" class="section bg-primary">
            <div class="container">
                <div class="row">
                <div class="col-lg-5 text-center text-lg-start wow fadeInUp">
                    <h2 class="text-10 fw-600 mb-5">Let's get in touch</h2>
                    <p class="text-5 mb-5">{{$contact_description_update_data->short_description}}</p>
                    <h3 class="text-5 fw-600">Living In:</h3>
                    <address class="text-4">
                        {{$self_information_update_data->address}}
                    </address>
                    <h3 class="text-5 fw-600">Call:</h3>
                    <p class="text-4">{{$self_information_update_data->phone_number}}</p>
                    <ul class="social-icons social-icons-lg justify-content-center justify-content-lg-start mt-5">
                        @foreach ($social_icons_all_data as $social_icons )
                            <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="{{$social_icons->social_link}}" target="_blank" title="" data-bs-original-title="Twitter"><i class="fab {{$social_icons->social_icon}}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6 ms-auto mt-5 mt-lg-0 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="text-10 fw-600 text-center text-lg-start mb-5">Estimate your Project?</h2>
                    <!-- Contact Form -->
                    <form  class="form-border" action="{{route('contact_form.data')}}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-12">
                                <label class="form-label" for="name">Name</label>
                                <input id="name" name="name" type="text" class="form-control py-1">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="email">Email</label>
                                <input id="email" name="email" type="email" class="form-control py-1">
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="form-message">Message</label>
                                <textarea id="form-message" name="message" class="form-control py-1" rows="4" ></textarea>
                                @error('message')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-12 text-center text-lg-start">
                                <button id="submit-btn" class="btn btn-dark " type="submit">Send <span class="ms-3"><i class="fas fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                    </form>
                    <!-- Contact Form end -->
                </div>
                </div>
            </div>
        </section>
        <!-- Contact Me end -->
    </div>
@endsection
