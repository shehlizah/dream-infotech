   
@extends('layouts.main')

@section('main-section')     
 <!-- Team-->
 <section class="margin-top page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team-member">
                            <a href="{{url('team1_detail')}}" target="_" style="text-color: none;">
                            <img class="mx-auto rounded-circle" src="{{asset('/assets/img/team/team1.jpg')}}" alt="..." />
                            <h4>Dur Mohammed Al Bulushi</h4>
                            <p class="text-muted">CEO & Founder</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="team-member">
                            <a href="{{url('team2_detail')}}" target="_" style="text-color: none;">
                            <img class="mx-auto rounded-circle" src="{{asset('/assets/img/team/team2.jpg')}}" alt="..." />
                            <h4>Mansur Ikhlas</h4>
                            <p class="text-muted">Chief Technical Consultant</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </a>
                        </div>
                    </div>

                    
                </div>
                 
            </div>
        </section>
        @endsection()
