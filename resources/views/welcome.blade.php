@extends('layouts.master')

@section('title', 'Landing Page')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
@endpush    

@section('content')
    @include('layouts.parts.navbarlandingpage')

    <header>
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col">
                    <img class="mx-auto d-block p-5 img-fluid" src="{{ asset('img/Company-amico.svg') }}" alt="img_header" />
                </div>
                <div class="col d-flex">
                    <div class="align-self-center">
                        <p class="text-secondary">Dolor sit amet</p>
                        <p class="display-3 fw-bold">Lorem ipsum</p>
                        <p class="h6 fw-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <a class="btn btn-primary my-3" href="#">Getting Started</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Icons Grid-->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg-4">
                    <div class="features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <img class="mx-auto d-block my-5" src="{{ asset('img/icons8-employee-58.png') }}" alt="icon" />
                        <h3>Fully Responsive</h3>
                        <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <img class="mx-auto d-block my-5" src="{{ asset('img/icons8-employee-58.png') }}" alt="icon" />
                        <h3>Bootstrap 5 Ready</h3>
                        <p class="lead mb-0">Featuring the latest build of the new Bootstrap 5 framework!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <img class="mx-auto d-block my-5" src="{{ asset('img/icons8-employee-58.png') }}" alt="icon" />
                        <h3>Easy to Use</h3>
                        <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <!-- Image Showcases-->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img"">
                    <img class="img-fluid" src="{{ asset('img/bg-showcase-1.jpg') }}" alt="content_img">
                </div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Fully Responsive Design</h2>
                    <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img">
                    <img class="img-fluid" src="{{ asset('img/bg-showcase-2.jpg') }}" alt="content_img">
                </div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Updated For Bootstrap 5</h2>
                    <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 5 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 5!</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img">
                    <img class="img-fluid" src="{{ asset('img/bg-showcase-3.jpg') }}" alt="content_img">
                </div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Easy to Use & Customize</h2>
                    <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
                </div>
            </div>
        </div>
    </section>
        
    <!-- Testimonials-->
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">What people are saying...</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('img/testimonials-1.jpg') }}" alt="content_img" />
                        <h5>Margaret E.</h5>
                        <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('img/testimonials-2.jpg') }}" alt="content_img" />
                        <h5>Fred S.</h5>
                        <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('img/testimonials-3.jpg') }}" alt="content_img" />
                        <h5>Sarah W.</h5>
                        <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <!-- Call to Action-->
    <section class="call-to-action text-white text-center" id="signup">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                    <form class="form-subscribe" id="contactFormFooter">
                        <div class="row">
                            <div class="col">
                                <input class="form-control form-control-lg" type="email" placeholder="Email Address" />
                                <div class="invalid-feedback text-white">Email Address is required.</div>
                                <div class="invalid-feedback text-white">Email Address Email is not valid.</div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary btn-lg disabled" type="submit">Submit</button>
                            </div>
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                <p>To activate this form, sign up at</p>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.parts.footerlandingpage')

    @push('custom-js')
        <script src="{{ asset('js/script.js') }}"></script>
    @endpush
@endsection