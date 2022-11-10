@extends('layouts.main')

@section('main-section')
 <!-- Team--> 
 <section class="margin-top page-section bg-light" id="team">
            <div class="container">
                
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Mansur Ikhlas</h2>
                    <h4 class="text-muted">Chief Technical Consultant</h4>
                </div>

<div class="profile__inner grid">
    <div class="row">
    <div class="col-md-4 text-center">
        <div ><img src="{{asset('/assets/img/team/team2.jpg')}}" alt="" style="border-radius: 50%;width: 300px;height: 300px;"></div>
    </div>

    <div class="col-md-8" style="margin: auto;">
    <p class="lead text-muted mb-0">Holds a masters degree and several other certifications and qualifications in technology and Business.</p>
    <p class="lead text-muted mb-0">Has over 35+ years of experience leading the Information Technology for several banks in GCC. During his career he has delivered high profile projects including core banking, e-channels etc. and has keen interest in solving business issues through innovative and emerging technology.</p>

          
        </div>
    </div>

  </div>

            </div>
        </section>
@endsection()        
