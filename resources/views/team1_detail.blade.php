@extends('layouts.main')

@section('main-section')     
 <!-- Team--> 
 <section class="margin-top page-section bg-light" id="team">
            <div class="container">
                
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Dur Mohammed Al Bulushi</h2>
                    <h4 class="text-muted">CEO & Founder</h4>
                </div>

<div class="profile__inner grid">
    <div class="row">
    <div class="col-md-4 text-center">
        <div ><img src="{{asset('/assets/img/team/team1.jpg')}}" alt="" style="border-radius: 50%;width: 300px;height: 300px;"></div>
    </div>

    <div class="col-md-8" style="margin: auto;">
    <p class="lead text-muted mb-0">Hold a masters degree in IT management from university of Wollongong, Australia, Pg, diploma from Maastricht School of Management, Netherlands and BTEC national diploma from Redcar & Cleveland college, UK.</p>
    <p class="lead text-muted mb-0">Over 35 years of experience in Technology implementation, management and leadership role in local and regional banks in GCC. Led several strategic projects and awarded by government for best consumer technology in financial sector. Passionate and vivid advocate of payment inclusions and how payment technologies can shape modern economies.</p>

          
        </div>
    </div>

  </div>

            </div>
        </section>
@endsection()