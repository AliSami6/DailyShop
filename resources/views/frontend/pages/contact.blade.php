@extends('frontend.layouts.master')

@section('title')
    Eshop
@endsection
  <!-- menu -->
@section('content')
 @include('frontend.partials.nav')

  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="frontend/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>Contact</h2>
         <ol class="breadcrumb">
           <li><a href="index.html">Home</a></li>
           <li class="active">Contact</li>
         </ol>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->
 <!-- start contact section -->
  <section id="aa-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-contact-area">
            <div class="aa-contact-top">
              <h2>We are wating to assist you..</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, quos.</p>
            </div>
            <!-- contact map -->
            <div class="aa-contact-map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.3714257064535!2d-86.7550931378034!3d34.66757706940219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8862656f8475892d%3A0xf3b1aee5313c9d4d!2sHuntsville%2C+AL+35813%2C+USA!5e0!3m2!1sen!2sbd!4v1445253385137" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Contact address -->
            <div class="aa-contact-address">
              <div class="row">
                <div class="col-md-8">
                  <div class="aa-contact-address-left">
                    <form name="contactForm" onsubmit="return validateForm()"  class="comments-form" action="{{url('/contact')}}" method="POST">
                        @csrf
                     <div class="row">
                       <div class="col-md-6">
                         <div class="form-group">
                           <input type="text"  name="name" placeholder="Your Name" class="form-control" pattern="[a-zA-Z][a-zA-Z ]{2,}">
                           <div class="error" id="nameErr"></div>
                         </div>
                       </div>
                       <div class="col-md-6">
                         <div class="form-group">
                           <input type="email"  name="email" placeholder="Email" class="form-control">
                           <div class="error" id="emailErr"></div>
                         </div>
                       </div>
                     </div>
                      <div class="row">
                       <div class="col-md-6">
                         <div class="form-group">
                           <input type="text" name="subject" placeholder="Subject" class="form-control">
                           <div class="error" id="subjectErr"></div>
                         </div>
                       </div>
                       <div class="col-md-6">
                         <div class="form-group">
                           <input type="text"  name="company" placeholder="Company" class="form-control">
                           <div class="error" id="companyErr"></div>
                         </div>
                       </div>
                     </div>
                     <div class="form-group">
                       <textarea class="form-control" rows="3" name="msg" placeholder="Message"></textarea>
                       <div class="error" id="msgErr"></div>
                     </div>
                     <button type="submit"  class="aa-secondary-btn">Send</button>
                   </form>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="aa-contact-address-right">
                    <address>
                      <h4>DailyShop</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum modi dolor facilis! Nihil error, eius.</p>
                      <p><span class="fa fa-home"></span>Huntsville, AL 35813, USA</p>
                      <p><span class="fa fa-phone"></span>+ 021.343.7575</p>
                      <p><span class="fa fa-envelope"></span>Email: support@dailyshop.com</p>
                    </address>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

   <!-- Subscribe section -->
   <section id="aa-subscribe">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="aa-subscribe-area">
             <h3>Subscribe our newsletter </h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
             <form action="" class="aa-subscribe-form">
               <input type="email" name="" id="" placeholder="Enter your Email">
               <input type="submit" value="Subscribe">
             </form>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- / Subscribe section -->
@endsection
