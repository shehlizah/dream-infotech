@extends('layouts.main')

@section('main-section')   
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<style>
 
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}
 

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
     

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
 
.slick-slide img
{
    display: block;
    height: 200px;
}
 
 
.slick-initialized .slick-slide
{
    display: block;
}

.img-thumbnail
{
    background-color: #2f6783;
}   
</style>
     <section class="margin-top page-section bg-light" id="clients">

        <div class="">
            <div class="container">
                    <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Clients</h2>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                    </div>
   <section class="customer-logos slider" style="padding-top:30px">
      <div class="slide"><a href="https://ahlibank.om/en-us" target="_"><img src="{{asset('/assets/img/client/1.png')}}" style="border-radius: 50%;" class="img-thumbnail"></a></div>
      <div class="slide"><a href="" target="_"><img src="{{asset('/assets/img/client/2.png')}}" style="border-radius: 50%;" class="img-thumbnail"></a></div>
      <div class="slide"><a href="https://tigoman.com/" target="_"><img src="{{asset('/assets/img/client/3.jpg')}}" style="border-radius: 50%;" class="img-thumbnail"></a></div>
      <div class="slide"><a href="https://www.oman-arabbank.com/" target="_"><img src="{{asset('/assets/img/client/4.jpg')}}" style="border-radius: 50%;" class="img-thumbnail"></a></div>
   </section>
   
    </div>
  </div>
</section>
<script type="text/javascript">
  $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});
</script>
@endsection()