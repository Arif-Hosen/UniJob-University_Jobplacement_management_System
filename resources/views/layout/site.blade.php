<!DOCTYPE html>
<html lang="en" class="no-js">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UniJobs - University Jobplacement Management System</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{asset('favicon.png')}}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/materialdesignicons.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/fontawesome.css')}}" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/selectize.css')}}" />

    <!--Slider-->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.transitions.css')}}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/style.css')}}" />

    @yield('stylesheet')

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        <!-- Tagline STart -->
        <div class="tagline">
            <div class="container">
                <div class="float-left">
                    <div class="phone">
                        @isset ($contact_no_1)
                        <i class="mdi mdi-phone-classic"></i> +{{$contact_no_1->value ?? 0}}
                        @endisset
                    </div>
                    <div class="email">
                        <a href="#">
                            @isset ($email)
                            <i class="mdi mdi-email"></i> {{$email->value ?? 0}}
                            @endisset
                        </a>
                    </div>
                </div>
                <div class="float-right">
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                        
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i>Benny Simpson</a></li>
                        <li class="list-inline-item">
                            <select id="select-lang" class="demo-default">
                                <option value="">Language</option>
                                <option value="4">English</option>
                                <option value="1">Spanish</option>
                                <option value="3">French</option>
                                <option value="5">Hindi</option>
                            </select>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Tagline End -->

        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="{{route('home')}}" class="logo">
                    @isset ($logo)
                    <img src="{{$logo->value ?? 0}}" alt="" class="logo-light" height="50" />
                    @endisset
                    @isset ($logo)
                    <img src="{{$logo->value ?? 0}}" alt="" class="logo-dark" height="50" />
                    @endisset
                </a>
            </div>
            <div class="buy-button">
                @guest()
                <a href="{{route('login')}}" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Login</a>
                @else
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Dashboard</a>
                <a href="{{ route('admin.logout') }}" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i>Logout</a>
                @endguest
            </div><!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="has-submenu">
                        <a href="javascript:void(0)">Jobs</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="{{route('jobpost')}}">Job List</a></li>
                            {{--  <li><a href="job-grid.html">Job Grid</a></li>
                            <li><a href="job-details.html">Job Details</a></li>
                            <li><a href="job-details-2.html">Job Details-2</a></li>  --}}
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="{{route('about_us')}}">About us</a></li>
                            {{--  <li><a href="services.html">Services</a></li>  --}}
                            {{--  <li><a href="team.html">Team</a></li>
                            <li><a href="faq.html">Faqs</a></li>
                            <li><a href="pricing.html">Pricing plans</a></li>
                            <li class="has-submenu"><a href="javascript:void(0)"> Candidates</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="candidates-listing.html">Candidates Listing</a></li>
                                    <li><a href="candidates-profile.html">Candidates Profile</a></li>
                                    <li><a href="create-resume.html">Create Resume</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)"> Blog</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="blog-grid.html">Blogs</a></li>
                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)"> Employers</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="employers-list.html">Employers List</a></li>
                                    <li><a href="company-detail.html">Company Detail</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)"> User Pages</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="signup.html">Signup</a></li>
                                    <li><a href="recovery_passward.html">Forgot Password</a></li>
                                </ul>
                            </li>
                            <li><a href="components.html"> Components</a></li>  --}}
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('graduate.list')}}">Students</a>
                    </li>
                    <li>
                        <a href="{{ route('jobfair.list') }}">Job Fair List</a>
                    </li>
                    <li>
                        <a href="{{route('contact_us')}}">contact</a>
                    </li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
        <!--end end-->
    </header><!--end header-->
    <!-- Navbar End -->


    @yield('content')


    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="javascript:void(0)"><img src="images/logo-light.png" height="20" alt=""></a>
                    @isset ($office_address)
                    <p class="mt-4">{{$office_address->value ?? 0}}</p>
                    @endisset
                    <ul class="social-icon social list-inline mb-0">
                        @isset ($facebook)
                        <li class="list-inline-item"><a href="{{$facebook->value}}" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                        @endisset
                        @isset ($twitter)
                        <li class="list-inline-item"><a href="{{$twitter->value}}" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        @endisset
                        @isset ($linkedin)
                        <li class="list-inline-item"><a href="{{$linkedin->value}}" class="rounded"><i class="mdi mdi-linkedin"></i></a></li>
                        @endisset
                        {{--  <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google"></i></a></li>  --}}
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Company</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="{{route('about_us')}}" class="text-foot"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                        <li><a href="{{route('contact_us')}}" class="text-foot"><i class="mdi mdi-chevron-right"></i> Contact Us</a></li>
                        <li><a href="{{route('jobpost')}}" class="text-foot"><i class="mdi mdi-chevron-right"></i> Job List</a></li>
                        {{--  <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Blog</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Pricing</a></li>  --}}
                        
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Resources</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="{{route('graduate.list')}}" class="text-foot"><i class="mdi mdi-chevron-right"></i> Students</a></li>
                        <li><a href="{{ route('jobfair.list') }}" class="text-foot"><i class="mdi mdi-chevron-right"></i> Job Fair</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Terms</a></li>
                        {{--  <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Accounting </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Billing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> F.A.Q.</a></li>  --}}
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title f-17">Business Hours</p>
                    <ul class="list-unstyled text-foot mt-4 mb-0">
                        <li>Monday - Friday : 9:00 to 17:00</li>
                        <li class="mt-2">Saturday : 10:00 to 15:00</li>
                        <li class="mt-2">Sunday : Day Off (Holiday)</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                        <p class="mb-0">© 2023 UniJobs Design with <i class="mdi mdi-heart text-danger"></i> by <a href="" target="_blank">UniJobs</a>.</p>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top">
        <i class="mdi mdi-chevron-up d-block"> </i>
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins.js')}}"></script>

    <!-- selectize js -->
    <script src="{{asset('assets/frontend/js/selectize.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/counter.int.js')}}"></script>

    <script src="{{asset('assets/frontend/js/app.js')}}"></script>
    <script src="{{asset('assets/frontend/js/home.js')}}"></script>



    <script>
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
      
        function printDiv($id, $title = 'Document') {
          let head = document.getElementById("head").innerHTML;
          let divContents = document.getElementById($id).innerHTML;
          console.log(divContents)
          let a = window.open('', '', '');
          a.document.write('<!DOCTYPE html><html lang="en">');
          a.document.write(head);
          a.document.write(`<body onload="document.title = '${$title}'">`);
          a.document.write(divContents);
          a.document.write('</body></html>');
          a.document.close();
          setTimeout(function () {
            setTimeout(a.print(), 400)
            a.close();
          }, 500)
        }
      </script>
    @yield('script')
    <script>
        $('select[name="division_id"]').change(function () {
          const $this = $('select[name="district_id"]')
          var idDivision = this.value;
          $this.html('');
          $.ajax({
            url: "{{url('api/fetch-districts')}}/" + idDivision,
            type: "GET",
            dataType: 'json',
            success: function (result) {
              $this.html('<option value="">Choose a district</option>');
              $.each(result.districts, function (key, value) {
                $this.append('<option value="' + value
                  .id + '">' + value.name + '</option>');
              });
            }
          });
        });
        $('select[name="district_id"]').change(function () {
          const $this = $('select[name="upazila_id"]')
          var idUpazila = this.value;
          $this.html('');
          $.ajax({
            url: "{{url('api/fetch-upazilas')}}/" + idUpazila,
            type: "GET",
            dataType: 'json',
            success: function (result) {
              $this.html('<option value="">Choose a upazila</option>');
              $.each(result.upazilas, function (key, value) {
                $this.append('<option value="' + value
                  .id + '">' + value.name + '</option>');
              });
            }
          });
        });
        $('select[name="institute_type_id"]').change(function () {
          const $this = $('select[name="institute_id"]')
          var idInstituteType = this.value;
          $this.html('');
          $.ajax({
            url: "{{url('api/fetch-institutes')}}/" + idInstituteType,
            type: "GET",
            dataType: 'json',
            success: function (result) {
              $this.html('<option value="">Choose a Institute</option>');
              $.each(result.institutes, function (key, value) {
                $this.append('<option value="' + value
                  .id + '">' + value.name + '</option>');
              });
            }
          });
        });
      
      
        function checkWordValidation($id, $min, $max) {
          const $this = $('#' + $id)
          var $regex = /\s+/gi;
          var $wordcount = $.trim($this.val()).replace($regex, ' ').split(' ').length;
          if ($min > $wordcount) {
            $this.addClass('is-invalid')
            $('#' + $id + '_error').text('Minimum ' + $min + ' word required.')
          } else if ($wordcount > $max) {
            $this.addClass('is-invalid')
            $('#' + $id + '_error').text('Maximum ' + $max + ' word allow.')
          } else {
            $('#' + $id + '_error').text('')
            $this.removeClass('is-invalid')
          }
        }
      
      </script>

</body>

</html>
