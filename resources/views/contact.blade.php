<!-- use App\Http\Controllers\ContactController; -->

@extends('layouts.main')

@section('main-section')        


 <!-- Contact-->
<style>

.gmap_canvas{
    margin-top: 25px;
}
    .dbox .icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #bc9864;
    margin: 0 auto;
    margin-bottom: 20px;
}
       
.dbox p span {
    font-weight: 500;
    color: #bc9864;
    display: block;
}

.dbox p a {
    color: rgba(255,255,255,.8);
}

</style>
 <section class="margin-top page-section" id="contact">
            <div class="container">

                <div class="col-lg-12 mb-5">
                    <div class="row">

                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text">
                                    <p>
                                            <span>Address:</span>
                                             <a href="#">Al Assalah Towers,
       2nd floor, Office # 204 Al Ghoubra, Sultanate of Oman
                                        </a>

                                        </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                    <p>
                                            <span>Phone:</span>
                                             <a href="#">+ 968 9067 2525</a><br>
                                             <a href="#">+ 968 9639 4768</a>

                                        </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                    <p>
                                            <span>Email:</span>
                                             <a href="#">dur.albulushi@dream-infotech.co.om</a><br>
                                             <a href="#">mikhlas@dream-infotech.co.om</a>

                                        </p>
                                </div>
                            </div>
                        </div>
                        


                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="text">
                                    <p>
                                            <span>Website:</span>
                                             <a href="https://www.dream-infotech.co.om">www.dream-infotech.co.om</a>

                                        </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">LET'S TALK</h2>
                </div>
                @if(session('status'))
                    <div class='alert alert-success'>
                    {{ session('status') }}
                    </div>
                @endif
                @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                @endif
                <!-- {{url('/')}}/contact -->
        <div class="row">
            <div class="col-md-6">                
                <form method="post" action="{{route('send.email')}}" id="contactForm">
                    @csrf
                <!-- {{ csrf_field() }} -->
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-12">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name="email" d="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>

                            <div class="form-group">
                                <input class="form-control" name="company" id="company" type="text" placeholder="Company Name"/>

                            </div>

                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" name="message" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>

                    
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            <!-- To activate this form, sign up at -->
                            <br />
                            <!-- <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a> -->
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button></div>
                </form>

                </div>


            <div class="col-md-6">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Al Asala building, Al Ghoubra, 2nd floor, office no 204&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        <a href="https://piratebay-proxys.com/">Piratebay</a>
                    </div>
                    <style>.mapouter{position:relative;text-align:right;width: 100%;height:430px;}.gmap_canvas {overflow:hidden;background:none!important;width: 100%;;height:430px;}.gmap_iframe {width: 100% !important;height:430px!important;}</style>
                </div>
            </div>

        </div>


            </div>
        </section>

        @endsection()
