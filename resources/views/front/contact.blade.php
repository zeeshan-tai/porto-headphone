@extends('front.layout.master')
@section('main-content')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="demo4.html"><i class="icon-home"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Contact Us
                </li>
            </ol>
        </div>
    </nav>

    <div id="map">{!! $site_settings->contact_us_map !!}</div>

    <div class="container contact-us-container">
        <div class="contact-info">
            <div class="row">
                <div class="col-12">
                    <h2 class="ls-n-25 m-b-1">
                        Contact Info
                    </h2>
                    <p value="{{ $site_settings->contact_info_text }}">{{ $site_settings->contact_info_text }}</p>
                    {{-- <p value={{ $site_settings->contact_info_text }}> --}}
                        {{-- Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Sed imperdiet libero id nisi euismod, sed
                        porta est consectetur. Vestibulum auctor felis eget
                        orci semper vestibulum. Pellentesque ultricies nibh
                        gravida, accumsan libero luctus, molestie nunc.L
                        orem ipsum dolor sit amet, consectetur adipiscing
                        elit. --}}
                    {{-- </p> --}}
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box text-center">
                        <i class="sicon-location-pin"></i>
                        <div class="feature-box-content">
                            <h3>Address</h3>
                            <h5 value="{{ $site_settings->address }}">{{ $site_settings->address }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box text-center">
                        <i class="fa fa-mobile-alt"></i>
                        <div class="feature-box-content">
                            <h3>Phone Number</h3>
                            <h5 value="{{ $site_settings->phone_number }}">{{ $site_settings->phone_number }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box text-center">
                        <i class="far fa-envelope"></i>
                        <div class="feature-box-content">
                            <h3>E-mail Address</h3>
                            <h5><a value="{{ $site_settings->email }}">{{ $site_settings->email }}</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box text-center">
                        <i class="far fa-calendar-alt"></i>
                        <div class="feature-box-content">
                            <h3>Working Days/Hours</h3>
                            <h5 value="{{ $site_settings->working_hours }}">{{ $site_settings->working_hours }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h2 class="mt-6 mb-2">Send Us a Message</h2>
                <form action="{{ route('front.contact') }}" method="post">
                    @csrf
                {{-- <form class="mb-0" action="#"> --}}
                    <div class="form-group">
                        <label class="mb-1" for="name">Your Name
                            <span class="required">*</span></label>
                        <input type="text" class="form-control" id="name" name="name"
                            required />
                    </div>

                    <div class="form-group">
                        <label class="mb-1" for="email">Your E-mail
                            <span class="required">*</span></label>
                        <input type="email" class="form-control" id="email" name="email"
                            required />
                    </div>

                    <div class="form-group">
                        <label class="mb-1" for="subject">Your subject
                            <span class="required">*</span></label>
                        <input type="text" class="form-control" id="subject" name="subject"
                            required />
                    </div>

                    <div class="form-group">
                        <label class="mb-1" for="message">Your Message
                            <span class="required">*</span></label>
                        <textarea cols="30" rows="1" id="message" class="form-control"
                            name="message" required></textarea>
                    </div>

                    <div class="form-footer mb-0">
                        <button type="submit" class="btn btn-dark font-weight-normal">
                            Send Message
                        </button>
                    </div>
                </form>
                {{-- </form> --}}
            </div>

            <div class="col-lg-6">
                <h2 class="mt-6 mb-1">Frequently Asked Questions</h2>
                @foreach ($faqs as $faq)
                <div id="accordion">
                    <div class="card card-accordion">
                        <a class="card-header" href="#" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            {{$faq->question}}
                        </a>

                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <p>{{$faq->answwer}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="mb-8"></div>
</main>
@endsection
