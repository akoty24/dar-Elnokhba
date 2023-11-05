@extends('Front.layouts.master')
@section('content')

    <main class="main-content">
        <div class="text-center">
            <div class="container section-padding border-bottom">
                <div class="row">
                    <div class="col-md-4">
                        <i class="fas fa-map-marker-alt text-success font-size-60 mb-5"></i>
                        <div class="iq-title-box mb-0">
                            <span class="iq-subtitle text-uppercase">{{trans('backend.location')}}</span>
                            <h5 class="iq-title iq-heading-title mt-3">
                                <span class="right-text text-capitalize ">{{$website_info->location}}</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-5">
                        <i class="far fa-envelope text-success font-size-60 mb-5"></i>
                        <div class="iq-title-box mb-0">
                            <span class="iq-subtitle text-uppercase">{{trans('backend.email')}}</span>
                            <h5 class="iq-title iq-heading-title mt-3">
                                <span class="right-text text-capitalize ">{{$website_info->email}}</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-5">
                        <i class="fas fa-phone  text-success font-size-60 mb-5"></i>
                        <div class="iq-title-box mb-0">
                            <span class="iq-subtitle text-uppercase">{{trans('backend.call_anytime')}}</span>
                            <h5 class="iq-title iq-heading-title mt-3">
                                <span class="right-text text-capitalize ">{{$website_info->phone}}</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-padding">
            <div class="container text-center">
                <div class="iq-title-box">
                    <span class="iq-subtitle text-uppercase">{{trans('backend.call_anytime')}}</span>
                    <h2 class="iq-title iq-heading-title">
                        <span class="left-text text-capitalize fw-light">{{trans('backend.hear_from_you!')}}</span>
                    </h2>
                    <p class="iq-title-desc text-body mt-3 mb-0">
                        {{trans('backend.We are here and always ready to help you. Let us know how we serve you and we’ll get back within no time')}}.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-2 d-lg-block d-none"></div>
                    <div class="col-lg-8">
                        <form action="{{ route('send_message') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="custom-form-field">
                                        <input style="width: 100%" type="text" name="name" placeholder="Your Name"
                                               class="form-control mb-5"
                                               required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="custom-form-field">
                                        <input style="width: 100%" type="tel" name="phone" minlength="10"
                                               maxlength="140" placeholder="Phone Number"
                                               class="form-control mb-5" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="custom-form-field">
                                        <input style="width: 100%" type="email" name="email" placeholder="Your Email"
                                               class="form-control mb-5"
                                               required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="custom-form-field">
                                        <input style="width: 100%" type="text" name="subject" placeholder="Subject"
                                               class="form-control mb-5"
                                               required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="custom-form-field">
                        <textarea style="width: 100%" name="message" placeholder="Your Message"
                                  class="form-control mb-5"
                                  required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-start">
                                    <div class="iq-btn-container">
                                        <button style="background-color: darkorange"
                                                class="iq-button text-capitalize border-0" type="submit">
                                            <span class="iq-btn-text-holder position-relative">{{trans('backend.send_message')}}</span>
                                            <span class="iq-btn-icon-holder">
                              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 8 8"
                                   fill="none">
                                 <path d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                       fill="currentColor"></path>
                              </svg>
                           </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 d-lg-block d-none"></div>
                </div>
            </div>
        </div>

    </main>
    <!-- Wrapper End -->

@endsection

