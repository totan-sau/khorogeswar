@extends('layouts.common')

@section('content')
  <div class="sigma_subheader dark-overlay dark-overlay-2" style="background-image: url(assets/img/subheader.jpg)">

    <div class="container">
      <div class="sigma_subheader-inner">
        <div class="sigma_subheader-text">
          <h1>Contact Us</h1>
        </div>
      </div>
    </div>

    <!-- Map Start -->
  <div class="sigma_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236198.23129320677!2d87.46649265289304!3d22.331062306883297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02bbc2dab60fef%3A0x16abecdb9c1a23e8!2z4Ka24Ka_4KasIOCmruCmqOCnjeCmpuCmv-CmsCAo4KaW4Kah4Ka84KaX4KeH4Ka24KeN4Kas4Ka24KawIOCmnOCngOCmiSDgpq7gpqjgp43gpqbgpr_gprAp!5e0!3m2!1sen!2sin!4v1711705655645!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <!-- Map End -->

  <!-- Icons Start -->
  <div class="section section-padding pt-3">
    <div class="container">
      <div class="row">

        <div class="col-lg-4">
          <div class="sigma_icon-block text-center light icon-block-7">
            <i class="flaticon-email"></i>
            <div class="sigma_icon-block-content">
              <span>Send Email <i class="far fa-arrow-right"></i> </span>
              <h5> Email Address</h5>
              <p><a href="mailto:sreesreekhargeswarjewmandir@gmail.com">sreesreekhargeswarjewmandir@gmail.com</a></p>
            </div>
            <div class="icon-wrapper">
              <i class="flaticon-email"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="sigma_icon-block text-center light icon-block-7">
            <i class="flaticon-call"></i>
            <div class="sigma_icon-block-content">
              <span>Call Us Now <i class="far fa-arrow-right"></i> </span>
              <h5> Phone Number </h5>
              <p><a href="tel:(+91) 7047975458">(+91) 7047975458</a></p>
            </div>
            <div class="icon-wrapper">
              <i class="flaticon-call"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="sigma_icon-block text-center light icon-block-7">
            <i class="flaticon-location"></i>
            <div class="sigma_icon-block-content">
              <span>Find Us Here <i class="far fa-arrow-right"></i> </span>
              <h5> Location </h5>
              <p>Radhaballavchak, Panskura, Purba Medinipur, PIN-721634</p>
            </div>
            <div class="icon-wrapper">
              <i class="flaticon-location"></i>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Icons End -->
  </div>   
@endsection