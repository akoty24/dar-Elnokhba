<div class="position-relative">
    <!--Nav Start-->
    <header>
        <div class="top-header bg-soft-light d-none d-md-block">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <ul class="top-header-left list-inline d-flex align-items-center gap-3 m-0">
                            <li class="text-body">
                                <a class="text-body d-flex align-items-center" href="tel:480-555-0103">
                                    <svg class="icon-18 text-dark me-1" width="32" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11.5317 12.4724C15.5208 16.4604 16.4258 11.8467 18.9656 14.3848C21.4143 16.8328 22.8216 17.3232 19.7192 20.4247C19.3306 20.737 16.8616 24.4943 8.1846 15.8197C-0.493478 7.144 3.26158 4.67244 3.57397 4.28395C6.68387 1.17385 7.16586 2.58938 9.61449 5.03733C12.1544 7.5765 7.54266 8.48441 11.5317 12.4724Z"
                                              stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                    </svg>
                                    <span>{{$website_info->phone}}</span>
                                </a>
                            </li>
                            <li class="text-body d-flex align-items-center">
                                <svg class="icon-18 text-dark me-1" width="32" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M14.5 10.5005C14.5 9.11924 13.3808 8 12.0005 8C10.6192 8 9.5 9.11924 9.5 10.5005C9.5 11.8808 10.6192 13 12.0005 13C13.3808 13 14.5 11.8808 14.5 10.5005Z"
                                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.9995 21C10.801 21 4.5 15.8984 4.5 10.5633C4.5 6.38664 7.8571 3 11.9995 3C16.1419 3 19.5 6.38664 19.5 10.5633C19.5 15.8984 13.198 21 11.9995 21Z"
                                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                </svg>
                                <span>{{$website_info->address}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-5 text-md-end">
                        <ul class="iq-social list-inline d-flex align-items-center justify-content-end gap-3 m-0">
                            <li class="label text-body fw-500">{{ trans('backend.follow_us')}}</li>
                            <li>
                                <a href="{{$website_info->snapchat}}">
                                    <svg class="base-circle animated" width="38" height="38" viewBox="0 0 50 50">
                                        <circle class="c1" cx="25" cy="25" r="23" stroke="#6e7990" stroke-width="1"
                                                fill="none"></circle>
                                    </svg>
                                    <i style="padding-top: 10px" class="fab fa-snapchat"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$website_info->twitter}}">
                                    <svg class="base-circle animated" width="38" height="38" viewBox="0 0 50 50">
                                        <circle class="c1" cx="25" cy="25" r="23" stroke="#6e7990" stroke-width="1"
                                                fill="none"></circle>
                                    </svg>
                                    <i style="padding-top: 10px" class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$website_info->instagram}}">
                                    <svg class="base-circle animated" width="38" height="38" viewBox="0 0 50 50">
                                        <circle class="c1" cx="25" cy="25" r="23" stroke="#6e7990" stroke-width="1"
                                                fill="none"></circle>
                                    </svg>
                                    <i style="padding-top: 10px" class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu py-xl-0">
            <div class="container-fluid navbar-inner">
                <div class="d-flex align-items-center justify-content-between w-100 landing-header">
                    <div class="d-flex gap-3 gap-xl-0 align-items-center">
                        <div>
                            <button data-trigger="navbar_main"
                                    class="d-xl-none btn btn-primary rounded-pill p-1 pt-0 toggle-rounded-btn"
                                    type="button">
                                <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                          d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                                </svg>
                            </button>
                        </div>
                        <a href="{{route('/')}}" class="navbar-brand m-0">

                            <img style="width:150px;height:50px;object-fit:contain" src="{{asset($website_info->logo)}}"
                                 alt="logo">

                        </a>

                    </div>
                    <div class="right-panel">
                        <nav id="navbar_main"
                             class="mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav py-xl-0">
                            <div class="container-fluid p-lg-0">
                                <div class="offcanvas-header px-0">

                                    <button class="btn-close float-end px-3"></button>
                                </div>
                                <li class="dropdown tasks-menu">
                                    <a href="#" style="color: grey" class="dropdown-toggle text-right" data-toggle="dropdown"
                                       title="App Language" data-toggle='tooltip'>
                                        <i style="color: grey" class="fa fa-globe fa-lg"></i> &nbsp;
                                        {{ trans('backend.language') }}
                                    </a>
                                    <ul class="dropdown-menu" style="width: auto;height: auto;">
                                        <li>
                                            <ul class="menu languages">
                                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <li>
                                                        <a rel="alternate" hreflang="{{ $localeCode }}"
                                                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <a class="nav-link" href="{{route('/')}}" role="button"
                                   aria-expanded="false" aria-controls="homePages">
                                    <span style="color: black" class="item-name">{{ trans('backend.home')}}</span>
                                </a>
                                <a class="nav-link" href="{{route('contact_us')}}" role="button" aria-expanded="false"
                                   aria-controls="homePages">
                                    <span style="color: black" class="item-name">{{ trans('backend.contact_us')}}</span>
                                </a>

                                <a href="{{route('send-request')}}"  style="background-color: darkorange" class="iq-button text-capitalize" >
                                    {{ trans('backend.send_request')}}
                                </a>

                            </div>
                            <!-- container-fluid.// -->
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>



