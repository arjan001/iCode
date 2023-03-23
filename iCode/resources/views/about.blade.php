@extends('layouts.front')

@section('title') {{$aboutsetting->meta_title}} @endsection
@section('meta') {{$aboutsetting->meta_description}} @endsection

@section('styles')
<link href="{{ asset('css/front/magnific.min.css')}}" type="text/css" rel="stylesheet">
@endsection

@section('content')
  
  
    <div class="breadcrumb-area">
        <div class="container">
                <ul class="page-list">
                    <li class="item-home"><a class="bread-link" href="{{ route('home') }}" title="Home">{{$aboutsetting->breadcrumbs_anchor}}</a></li>
                    <li class="separator separator-home"></li>
                    <li class="item-current">{{$aboutsetting->meta_title}}</li>
                </ul>
               <h1 class="breadcrumb-title">{!!$aboutsetting->meta_title!!}</h1>

               <ul class="shape-group-code">
                    <li class="shape shape-1">
                        <img src="img/bubble-9.png" alt="circle">
                    </li>
                    <li class="shape shape-2" >
                        <img src="img/bubble-17.png" alt="circle">
                    </li>
                    <li class="shape shape-3" >
                        <img src="img/line-4.png" alt="circle">
                    </li>
                </ul>
        </div>
   </div>


   <div class="about-us light-section">
       <div class="container">
           <div class="row align-items-center">
               <div class="col-md-5">
       
                   <div class="simpleParallax-video">
                        <div class="simpleParallax">
                            <img width="500" height="665" src="/public/img/loading-blog.gif" class="lazy thumparallax img-fluid" data-src="{{$aboutsetting->about_image}}" alt="about-image">
                        </div>
                        <a class="popup-vimeo-video" href="{{$aboutsetting->about_ytlink}}">
                            <svg enable-background="new 0 0 30.051 30.051" version="1.1" viewBox="0 0 30.051 30.051" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"> <path d="m19.982 14.438-6.24-4.536c-0.229-0.166-0.533-0.191-0.784-0.062-0.253 0.128-0.411 0.388-0.411 0.669v9.069c0 0.284 0.158 0.543 0.411 0.671 0.107 0.054 0.224 0.081 0.342 0.081 0.154 0 0.31-0.049 0.442-0.146l6.24-4.532c0.197-0.145 0.312-0.369 0.312-0.607 1e-3 -0.242-0.117-0.465-0.312-0.607z"/>
                            <path d="m15.026 2e-3c-8.3 0-15.026 6.726-15.026 15.026 0 8.297 6.726 15.021 15.026 15.021 8.298 0 15.025-6.725 15.025-15.021 1e-3 -8.3-6.727-15.026-15.025-15.026zm0 27.54c-6.912 0-12.516-5.601-12.516-12.514 0-6.91 5.604-12.518 12.516-12.518 6.911 0 12.514 5.607 12.514 12.518 1e-3 6.913-5.603 12.514-12.514 12.514z"/></svg>
                        </a>
                    </div>
               </div>
               <div class="col-md-7">


                    <h4 class="about-heading1-home">{{$aboutsetting->about_subtitle}}</h4>
                    <h3 class="about-heading2-home">{!!$aboutsetting->about_title!!}</h3>

                    {!!$aboutsetting->about_description!!}

                    <a href="{{$aboutsetting->about_buttonlink}}" target="_self" class="btn btn-style1"><span>{{$aboutsetting->about_buttontext}}</span><svg width="11.4" height="9.2"> <use xlink:href="#arrow"></use></svg></a>
       
                   
               </div>
           </div>
       </div>
   </div>
   
   <div class="members-section">
        <div class="container">
            <h3 class="members-heading1">{!!$aboutsetting->member_title_section!!}</h3>
        

            <div class="row">
                @foreach($members as $member)
                  <div class="col-md-4">
                      <div class="venor-team">
                          <div class="thumbnail"> 
                              <img width="350" height="350" class="lazy img-fluid" src="/public/img/loading-blog.gif" data-src="{{$member->photo ? '/public/images/media/' . $member->photo->file : '/public/img/200x200.png'}}" alt="team-venor">
                          </div>
                          <div class="content">
                              <h5 class="title">{{$member->name}}</h5>
                              <p class="position">{{$member->position}}</p>
                          </div>
                          <ul class="social-icon">
                                @if($member->facebook) <li><a target="_blank" rel="noopener" href="{{$member->facebook}}"><i class="fab fa-facebook" aria-hidden="true"></i></a></li> @endif
                                @if($member->linkedin) <li><a target="_blank" rel="noopener" href="{{$member->linkedin}}"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>@endif
                                @if($member->twitter) <li><a target="_blank" rel="noopener" href="{{$member->twitter}}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>@endif
                          </ul>
                      </div>
                  </div>
                @endforeach
            </div>

        </div>
    </div>

    <div class="testimonial-section light-section">

        <div class="container">

            <div class="testimonial-section-slider owl-carousel">

                @foreach($testimonials as $testimonial)
                <blockquote class="testimonial-slide">
                    <div class="testimonial-layout1">
                        <div class="item-figure">
                            <img class="img-fluid" width="90px" height="90px" src="{{$testimonial->profile_pic ? $testimonial->profile_pic : '/public/img/200x200.png'}}" alt="">
                        </div>
                        <div class="item-content">
                            <h3 class="item-title">{{$testimonial->name}}</h3>
                            <div class="item-sub-title">{{$testimonial->position}}</div>
                            <div class="item-paragraph">{!!$testimonial->description!!}</div>
                        </div>
                    </div>
                </blockquote>
                @endforeach

            </div>

        </div>

    </div>


    <div class="clients-section">
        <div class="container">
            
            <div class="clients-slider owl-carousel">
                  @foreach($clients as $client)
                  <div class="clients-slide">
                      <a title="{{$client->company_name}}" target="_blank" href="{{$client->company_link}}"><img class="client_image owl-lazy" data-src="{{$client->photo ? '/public/images/media/' . $client->photo->file : '/public/img/200x200.png'}}" alt="{{$client->company_name}}"></a>
                  </div>
                  @endforeach
            </div>
            
        </div>
    </div>



@endsection

