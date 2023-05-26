@extends('master')
@section('content')
    <!-- start hero section -->
    <section class="section pb-0 hero-section" id="hero">
        <div class="bg-overlay bg-overlay-pattern"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-10">
                    <div class="text-center mt-lg-5 pt-5">
                        <h1 class="display-6 fw-semibold mb-3 lh-base">The better way to manage your website with <span
                                class="text-success">Velzon </span></h1>
                        <p class="lead text-muted lh-base">Velzon is a fully responsive, multipurpose and premium Bootstrap 5
                            Admin & Dashboard Template built in multiple frameworks.</p>

                        <div class="d-flex gap-2 justify-content-center mt-4">
                            <a href="auth-signup-basic.html" class="btn btn-primary">Get Started <i
                                    class="ri-arrow-right-line align-middle ms-1"></i></a>
                            <a href="pages-pricing.html" class="btn btn-danger">View Plans <i
                                    class="ri-eye-line align-middle ms-1"></i></a>
                        </div>
                    </div>

                    <div class="mt-4 mt-sm-5 pt-sm-5 mb-sm-n5 demo-carousel">
                        <div class="demo-img-patten-top d-none d-sm-block">
                            <img src="assets/images/landing/img-pattern.png" class="d-block img-fluid" alt="...">
                        </div>
                        <div class="demo-img-patten-bottom d-none d-sm-block">
                            <img src="assets/images/landing/img-pattern.png" class="d-block img-fluid" alt="...">
                        </div>
                        <div class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner shadow-lg p-2 bg-white rounded">
                                @foreach($home as $data)
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="{{ getImage('site', $data->home_featured_image) }}" class="d-block w-100" alt="...">
                                </div>
                                @endforeach
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="assets/images/demos/saas.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="assets/images/demos/material.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="assets/images/demos/minimal.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="assets/images/demos/creative.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="assets/images/demos/modern.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="assets/images/demos/interactive.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 1440 120">
                <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">
                    <path d="M 0,118 C 288,98.6 1152,40.4 1440,21L1440 140L0 140z">
                    </path>
                </g>
            </svg>
        </div>
        <!-- end shape -->
    </section>
    <!-- end hero section -->

    <!-- start client section -->
    <div class="pt-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="text-center mt-5">
                        <h5 class="fs-20">Trusted <span class="text-primary text-decoration-underline">by</span> the
                            world's best</h5>

                        <!-- Swiper -->
                        <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                            <div class="swiper-wrapper">
                                @foreach($confidant as $data)
                                <div class="swiper-slide">
                                    <div class="client-images">
                                        <img  src="{{ getImage('confidant', $data->featured_image) }}"alt="client-img"
                                            class="mx-auto img-fluid d-block">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end client section -->

    <!-- start services -->
    <section class="section" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h1 class="mb-3 ff-secondary fw-semibold lh-base">A Digital web design studio creating modern &
                            engaging online</h1>
                        <p class="text-muted">To achieve this, it would be necessary to have uniform grammar, pronunciation
                            and more common words. If several languages coalesce the grammar</p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row g-3">
                @foreach ($services as $service)
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="{{$service->class}}"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">{{ $service->title }}</h5>
                                <p class="text-muted my-3 ff-secondary">{{ $service->description }}</p>
                                <div>
                                    <a href="#" class="fs-13 fw-medium">Learn More <i
                                            class="ri-arrow-right-s-line align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end services -->

    <!-- start features -->
    <section class="section bg-light py-5" id="features">
        <div class="container">
            <div class="row align-items-center gy-4">
                @foreach ($feature1 as $feature)
                    <div class="col-lg-6 col-sm-7 mx-auto">
                        <div>
                            <img src="{{ getImage('features', $feature->featured_image) }}" alt="image"
                                class="img-fluid mx-auto">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-muted">
                            <div class="avatar-sm icon-effect mb-4">
                                <div class="avatar-title bg-transparent rounded-circle text-success h1">
                                    <i class="ri-collage-line fs-36"></i>
                                </div>
                            </div>
                            <h3 class="mb-3 fs-20">{{ $feature->title }}</h3>
                            <p class="mb-4 ff-secondary fs-16">{{ $feature->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end features -->

    <!-- start cta -->
    <section class="py-5 bg-primary position-relative">
        <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-sm">
                    <div>
                        <h4 class="text-white mb-0 fw-semibold">Build your web App/SaaS with Velzon dashboard</h4>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-sm-auto">
                    <div>
                        <a href="https://1.envato.market/velzon-admin" target="_blank"
                            class="btn bg-gradient btn-danger"><i class="ri-shopping-cart-2-line align-middle me-1"></i>
                            Buy Now</a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta -->

    <!-- start features -->
    <section class="section">
        <div class="container">
            @foreach($feature2 as $feat2)
            <div class="row align-items-center gy-4">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="text-muted">
                        <h5 class="fs-12 text-uppercase text-success">Design</h5>
                        <h4 class="mb-3">{{$feat2->title}}</h4>
                        <p class="mb-4 ff-secondary">){{$feat2->description}}</p>

                        @php
                            $feature2_keypoint = DB::table('feature_key_point')
                                ->where('feature_category', $feat2->id)
                                ->where('is_active', true)
                                ->get();
                        @endphp
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="vstack gap-2">
                                    @foreach($feature2_keypoint as $key2)
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar-xs icon-effect">
                                                <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                    <i class="ri-check-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 mb-0">{{$key2->title}}</h5>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="index.html" class="btn btn-primary">Learn More <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                    <div>
                        <img src="assets/images/landing/features/img-2.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end row -->

            <div class="row align-items-center mt-5 pt-lg-5 gy-4">
                <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                    <div>
                        <img src="assets/images/landing/features/img-3.png" alt="" class="img-fluid">
                    </div>
                </div>
                @foreach($feature3 as $feat3)
                <div class="col-lg-6">
                    <div class="text-muted ps-lg-5">
                        <h5 class="fs-12 text-uppercase text-success">structure</h5>
                        <h4 class="mb-3">{{$feat3->title}}</h4>
                        <p class="mb-4">{{$feat3->description}}</p>

                        <div class="vstack gap-2">
                            @php
                            $feature3_keypoint = DB::table('feature_key_point')
                                ->where('feature_category', $feat3->id)
                                ->where('is_active', true)
                                ->get();
                            @endphp
                            @foreach($feature3_keypoint as $key3)
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2">
                                    <div class="avatar-xs icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                            <i class="ri-check-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">{{$key3->title}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end features -->

    <!-- start plan -->
    <section class="section bg-light" id="plans">
        <div class="bg-overlay bg-overlay-pattern"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 fw-semibold">Choose the plan that's right for you</h3>
                        <p class="text-muted mb-4">Simple pricing. No hidden fees. Advanced features for you business.</p>

                        <div class="d-flex justify-content-center align-items-center">
                            <div>
                                <h5 class="fs-14 mb-0">Month</h5>
                            </div>
                            <div class="form-check form-switch fs-20 ms-3 " onclick="check()">
                                <input class="form-check-input" type="checkbox" id="plan-switch">
                                <label class="form-check-label" for="plan-switch"></label>
                            </div>
                            <div>
                                <h5 class="fs-14 mb-0">Annual <span class="badge badge-soft-success">Save 20%</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row gy-4">
                @foreach ($plans as $plan)
                    <div class="col-lg-4">
                        <div class="card plan-box mb-0">
                            <div class="card-body p-4 m-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fw-semibold">{{ $plan->title }}</h5>
                                    </div>
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light rounded-circle text-primary">
                                            <i class="ri-book-mark-line fs-20"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <h1 class="month">
                                        <span class="ff-secondary fw-bold">{{$plan->price}}</span> <span
                                            class="fs-13 text-muted">/Month</span></h1>
                                    <h1 class="annual"><sup><small>$</small></sup><span
                                            class="ff-secondary fw-bold">171</span> <span
                                            class="fs-13 text-muted">/Year</span></h1>
                                </div>

                                <div>
                                    <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                        @php
                                            $plans_details = DB::table('plan_subtitle')
                                                ->where('plan_category_id', $plan->id)
                                                ->where('is_active', true)
                                                ->get();
                                        @endphp
                                        @foreach ($plans_details as $detail)
                                            <li>
                                                <div class="d-flex">
                                                    {{-- @foreach ($plan_subtitle as $info) --}}
                                                    <div class="flex-shrink-0 text-success me-1">
                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">{{ $detail->sub_title }}</div>
                                                    {{-- @endforeach/ --}}
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                    <div class="mt-4">
                                        <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--end row-->
        </div>
        <!-- end container -->
    </section>
    <!-- end plan -->

    <!-- start faqs -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 fw-semibold">Frequently Asked Questions</h3>
                        <p class="text-muted mb-4 ff-secondary">If you can not find answer to your question in our FAQ, you
                            can always contact us or email us. We will answer you shortly!</p>

                        <div class="hstack gap-2 justify-content-center">
                            <button type="button" class="btn btn-primary btn-label rounded-pill"><i
                                    class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i> Email
                                Us</button>
                            <button type="button" class="btn btn-info btn-label rounded-pill"><i
                                    class="ri-twitter-line label-icon align-middle rounded-pill fs-16 me-2"></i> Send Us
                                Tweet</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row g-lg-5 g-4">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-shrink-0 me-1">
                            <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">General Questions</h5>
                        </div>
                    </div>
                    <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box"
                        id="genques-accordion">
                        @foreach ($question1 as $ques)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseOne" aria-expanded="true"
                                        aria-controls="genques-collapseOne">
                                        {{ $ques->question }}</button>
                                </h2>
                                @php
                                    $answers = DB::table('answer')
                                        ->where('question_id', $ques->id)
                                        ->where('is_active', true)
                                        ->get();
                                @endphp
                                @foreach ($answers as $ans)
                                    <div id="genques-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body ff-secondary">
                                            {{ $ans->answer }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <!--end accordion-->

                </div>
                <!-- end col -->
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-shrink-0 me-1">
                            <i class="ri-shield-keyhole-line fs-24 align-middle text-success me-1"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Privacy &amp; Security</h5>
                        </div>
                    </div>

                    <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box"
                        id="genques-accordion">
                        @foreach ($question2 as $ques)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseOne" aria-expanded="true"
                                        aria-controls="genques-collapseOne">
                                        {{ $ques->question }}</button>
                                </h2>
                                @php
                                    $answers = DB::table('answer')
                                        ->where('question_id', $ques->id)
                                        ->where('is_active', true)
                                        ->get();
                                @endphp
                                @foreach ($answers as $ans)
                                    <div id="genques-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body ff-secondary">
                                            {{ $ans->answer }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <!--end accordion-->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end faqs -->

    <!-- start review -->
    <section class="section bg-primary" id="reviews">
        <div class="bg-overlay bg-overlay-pattern"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center">
                        <div>
                            <i class="ri-double-quotes-l text-success display-3"></i>
                        </div>
                        <h4 class="text-white mb-5"><span class="text-success">19k</span>+ Satisfied clients</h4>

                        <!-- Swiper -->
                        <div class="swiper client-review-swiper rounded" dir="ltr">
                            <div class="swiper-wrapper">
                                @foreach ($reviews as $data)
                                    <div class="swiper-slide">
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="text-white-50">
                                                    <p class="fs-20 ff-secondary mb-4">{{ $data->description }}</p>

                                                    <div>
                                                        <h5 class="text-white">{{ $data->customer_name }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- end slide -->
                                <!-- end slide -->
                            </div>
                            <div class="swiper-button-next bg-white rounded-circle"></div>
                            <div class="swiper-button-prev bg-white rounded-circle"></div>
                            <div class="swiper-pagination position-relative mt-2"></div>
                        </div>
                        <!-- end slider -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end review -->

    <!-- start counter -->
    <section class="py-5 position-relative bg-light">
        <div class="container">
            <div class="row text-center gy-4">
                <div class="col-lg-3 col-6">
                    <div>
                        <h2 class="mb-2"><span class="counter-value" data-target="100">0</span>+</h2>
                        <div class="text-muted">Projects Completed</div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-3 col-6">
                    <div>
                        <h2 class="mb-2"><span class="counter-value" data-target="24">0</span></h2>
                        <div class="text-muted">Win Awards</div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-3 col-6">
                    <div>
                        <h2 class="mb-2"><span class="counter-value" data-target="20.3">0</span>k</h2>
                        <div class="text-muted">Satisfied Clients</div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3 col-6">
                    <div>
                        <h2 class="mb-2"><span class="counter-value" data-target="50">0</span></h2>
                        <div class="text-muted">Employees</div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end counter -->

    <!-- start Work Process -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 fw-semibold">Our Work Process</h3>
                        <p class="text-muted mb-4 ff-secondary">In an ideal world this website wouldn’t exist, a client
                            would acknowledge the importance of having web copy before the Proin vitae ipsum vel ex finibus
                            semper design starts.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="process-card mt-4">
                        <div class="process-arrow-img d-none d-lg-block">
                            <img src="assets/images/landing/process-arrow-img.png" alt="" class="img-fluid">
                        </div>
                        <div class="avatar-sm icon-effect mx-auto mb-4">
                            <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                <i class="ri-quill-pen-line"></i>
                            </div>
                        </div>

                        <h5>Tell us what you need</h5>
                        <p class="text-muted ff-secondary">The profession and the employer and your desire to make your
                            mark.</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="process-card mt-4">
                        <div class="process-arrow-img d-none d-lg-block">
                            <img src="assets/images/landing/process-arrow-img.png" alt="" class="img-fluid">
                        </div>
                        <div class="avatar-sm icon-effect mx-auto mb-4">
                            <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                <i class="ri-user-follow-line"></i>
                            </div>
                        </div>

                        <h5>Get free quotes</h5>
                        <p class="text-muted ff-secondary">The most important aspect of beauty was, therefore, an inherent
                            part.</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="process-card mt-4">
                        <div class="avatar-sm icon-effect mx-auto mb-4">
                            <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                <i class="ri-book-mark-line"></i>
                            </div>
                        </div>

                        <h5>Deliver high quality product</h5>
                        <p class="text-muted ff-secondary">We quickly learn to fear and thus automatically avoid
                            potentially.</p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end Work Process -->

    <!-- start team -->
    <section class="section bg-light" id="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 fw-semibold">Our <span class="text-danger">Team</span></h3>
                        <p class="text-muted mb-4 ff-secondary">To achieve this, it would be necessary to have uniform
                            grammar, pronunciation and more common words. If several languages coalesce the grammar.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                @foreach ($team as $data)
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">

                            <div class="card-body margin: auto text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="{{ getImage('team', $data->featured_image) }}" alt="team-image"
                                        class="img-fluid rounded-circle">
                                    <a href="apps-mailbox.html"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile.html"
                                        class="text-body">{{ $data->name }}</a></h5>
                                <p class="text-muted mb-0 ff-secondary">{{ $data->role }}</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                @endforeach
            </div>

            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end team -->

    <!-- start contact -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 fw-semibold">Get In Touch</h3>
                        <p class="text-muted mb-4 ff-secondary">We thrive when coming up with innovative ideas but also
                            understand that a smart concept should be supported with faucibus sapien odio measurable
                            results.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row gy-4">
                <div class="col-lg-4">
                    <div>
                        <div class="mt-4">
                            <h5 class="fs-13 text-muted text-uppercase">Office Address 1:</h5>
                            <div class="ff-secondary fw-semibold">4461 Cedar Street Moro, <br />AR 72368</div>
                        </div>
                        <div class="mt-4">
                            <h5 class="fs-13 text-muted text-uppercase">Office Address 2:</h5>
                            <div class="ff-secondary fw-semibold">2467 Swick Hill Street <br />New Orleans, LA</div>
                        </div>
                        <div class="mt-4">
                            <h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
                            <div class="ff-secondary fw-semibold">9:00am to 6:00pm</div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-8">
                    <div>
                        <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="name" class="form-label fs-13">Name</label>
                                        <input name="name" id="name" type="text"
                                            class="form-control bg-light border-light" placeholder="Your name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="email" class="form-label fs-13">Email</label>
                                        <input name="email" id="email" type="email"
                                            class="form-control bg-light border-light" placeholder="Your email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-4">
                                        <label for="subject" class="form-label fs-13">Subject</label>
                                        <input type="text" class="form-control bg-light border-light" id="subject"
                                            name="subject" placeholder="Your Subject.." />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="comments" class="form-label fs-13">Message</label>
                                        <input type="text" name="comment" id="comments" rows="3" class="form-control bg-light border-light"
                                            placeholder="Your message...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <button type="submit" class="submitBnt btn btn-primary"  id="submit">
                                    Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end contact -->

    <!-- start cta -->
    <section class="py-5 bg-primary position-relative">
        <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-sm">
                    <div>
                        <h4 class="text-white mb-0 fw-semibold">Build your web App/SaaS with Velzon dashboard</h4>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-sm-auto">
                    <div>
                        <a href="https://1.envato.market/velzon-admin" target="_blank"
                            class="btn bg-gradient btn-danger"><i class="ri-shopping-cart-2-line align-middle me-1"></i>
                            Buy Now</a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta -->
@endsection
