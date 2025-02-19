@extends('layout.site')

@section('stylesheet')
  
@endsection


@section('content')

  
<!-- Start home -->
<section class="bg-half page-next-level"> 
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h4 class="text-uppercase title mb-4">Contact Us</h4>
                    <ul class="page-next d-inline-block mb-0">
                        <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                        <li>
                            <span class="text-uppercase text-white font-weight-bold">Contact Us</span> 
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home -->

<!-- MAP START -->
<section class="section pt-0 bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" style="border: 0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="contact-item mt-40">
                    <div class="float-left">
                        <div class="contact-icon d-inline-block border rounded-pill shadow text-primary mt-1 mr-4">
                            <i class="mdi mdi-earth"></i>
                        </div>
                    </div>
                    <div class="contact-details">
                        <h4 class="text-dark mb-1">Website</h4>
                        <p class="mb-0 text-muted">www.unijobs.com</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="contact-item mt-40">
                    <div class="float-left">
                        <div class="contact-icon d-inline-block border rounded-pill shadow text-primary mt-1 mr-4">
                            <i class="mdi mdi-cellphone-iphone"></i>
                        </div>
                    </div>
                    <div class="contact-details">
                        <h4 class="text-dark mb-1">Call us</h4>
                        @if ($contact_no_1)
                        <p class="mb-0 text-muted">+{{$contact_no_1->value ?? 0}}</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="contact-item mt-40">
                    <div class="float-left">
                        <div class="contact-icon d-inline-block border rounded-pill shadow text-primary mt-1 mr-4">
                            <i class="mdi mdi-email"></i>
                        </div>
                    </div>
                    <div class="contact-details">
                        <h4 class="text-dark mb-1">Email</h4>
                        @if ($email)
                        <p class="mb-0 text-muted">{{$email->value ?? 0}}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT END -->

<!-- CONTACT FORM START -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-dark mb-0">Get In Touch :</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-7 mt-4 pt-2">
                <div class="custom-form rounded border p-4">
                    <div id="message"></div>
                    <form method="post" action="https://themesdesign.in/jobya/php/contact.php" name="contact-form" id="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label class="text-muted">Name</label>
                                    <input name="name" id="name2" type="text" class="form-control resume" placeholder="Enter Name..">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label class="text-muted">Email address</label>
                                    <input name="email" id="email1" type="email" class="form-control resume" placeholder="Enter Email..">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label class="text-muted">Subject</label>
                                    <input type="text" class="form-control resume" id="subject" placeholder="Subject..">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label class="text-muted">Message</label>
                                    <textarea name="comments" id="comments" rows="5" class="form-control resume" placeholder="Message.."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 mt-4 pt-2">
                <div class="border rounded text-center p-4">
                    <h5 class="text-dark pb-3">Contact Info</h5>
                    <div class="contact-location rounded mt-5 p-4">
                        <div class="contact-location-icon bg-white text-primary rounded-pill">
                            <i class="mdi mdi-map-marker"></i>
                        </div>
                        <p class="text-muted pt-4 f-20 mb-0">Dhaka Rampura</p>
                    </div>
                    <h6 class="text-muted mt-4 mb-0">Share</h6>
                    <ul class="list-unstyled social-icon mt-3 mb-0">
                        @if ($facebook)
                        <li class="list-inline-item"><a href="{{$facebook->value ?? 0}}" class=""><i class="mdi mdi-facebook"></i></a></li>
                        @endif
                        @if ($twitter)
                        <li class="list-inline-item"><a href="{{$twitter->value ?? 0}}" class=""><i class="mdi mdi-twitter"></i></a></li>
                        @endif
                        {{--  @if ($instragram)
                        <li class="list-inline-item"><a href="{{$instragram->value ?? 0}}" class=""><i class="mdi mdi-instagram"></i></a></li>
                        @endif  --}}
                        @if ($linkedin)
                        <li class="list-inline-item"><a href="{{$linkedin->value ?? 0}}" class=""><i class="mdi mdi-linkedin"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT FORM END -->




@endsection
@section('script')
@endsection