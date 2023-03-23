@extends('layouts.front')

@section('title') {{$homesetting->meta_title}} @endsection
@section('meta') {{$homesetting->meta_description}} @endsection


@section('content')



    <div class="slider-venor-section">
        <div class="slider-venor owl-carousel">
            
            @php $count = 0; @endphp
            @foreach( $sliders as $slido )
            
            <div class="slider-inner-venor @if( $count == 0 ) slider-count-0 @endif">
                
                <div class="container">
                   <div class="row">
                        <div class="col-md-5">

                            <div class="slider-content">
                               <h1 @if( $count == 0 ) class="active" @endif>{!!$slido->heading1!!} </h1>
                               <h2 @if( $count == 0 ) class="active" @endif>{!!$slido->heading2!!}</h2>

                             

                               <div class="slider-body  @if( $count == 0 ) active @endif">{!!$slido->bodyslider!!}</div>
                               
                                @if($slido->button_text)
                                    <div class="button-slider-b">
                                        <a href="{!!$slido->button_link!!}" target="_self" class="btn btn-slider"><span>{!!$slido->button_text!!}</span><svg width="11.4" height="9.2"> <use xlink:href="#arrow"></use></svg></a>
                                    </div>
                                @endif

                                @if($slido->button_text2)
                                    <div class="button-slider-b button-slider-b2">
                                        <a href="{!!$slido->button_link2!!}" target="_self" class="btn btn-slider"><span>{!!$slido->button_text2!!}</span><svg width="11.4" height="9.2"> <use xlink:href="#arrow"></use></svg></a>
                                    </div>
                                @endif
                               
                            </div>

                        </div>

                        <div class="col-md-7">
                            <div class="slider-image">
                                <div class="slider-image-inner">
                                    <img class="owl-lazy img-fluid slider-img" data-src="{{$slido->photo ? '/public/images/media/' . $slido->photo->file : '/public/img/200x200.png'}}" alt="" >
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            @php $count++; @endphp

            @endforeach
        
        </div>

        <div class="header-social-share">
            {!!$headerfooter->social_links!!}
        </div>

        <a href="#" class="hero__scroll"><svg width="15" height="22.1"><use xlink:href="#scroll"></use></svg></a>
    </div>

    

    <div class="about-section light-section">
        <div class="container">
            <div class="row">
               
                <div class="col-md-6">
                    
              
                    <div class="item-about">

                        <div class="item-about-row">
                            <div class="item-about-img2">
                                <div class="avo-image avo-tooltip about-img3 big-paral">
                                    <div class="simpleParallax imago" data-tooltip-tit="{{$homesetting->about_image3_titlu1}}" data-tooltip-sub="{{$homesetting->about_image3_titlu2}}"><img src="/public/img/loading-blog.gif" width="500" height="666" class="lazy thumparallax-down img-fluid" data-src="{{$homesetting->about_image3}}" alt="about-us" /></div>
                                </div>
                            </div>
                            
                            <div class="item-about-img1">
                                <div class="avo-image avo-tooltip about-img1 big-paral">
                                    <div class="simpleParallax imago" data-tooltip-tit="{{$homesetting->about_image2_titlu1}}" data-tooltip-sub="{{$homesetting->about_image2_titlu2}}"><img src="/public/img/loading-blog.gif" width="500" height="666" class="lazy thumparallax-down img-fluid" data-src="{{$homesetting->about_image2}}" alt="about-us" /></div>
                                </div>
                                <div class="avo-image avo-tooltip about-img2 big-paral">
                                    <div class="simpleParallax imago" data-tooltip-tit="{{$homesetting->about_image1_titlu1}}" data-tooltip-sub="{{$homesetting->about_image1_titlu2}}"><img src="/public/img/loading-blog.gif" width="500" height="666" class="lazy thumparallax-down img-fluid" data-src="{{$homesetting->about_image1}}" alt="about-us" /></div>
                                </div>
                            </div>
                        </div>
                       

                        <div class="exp-about">
                            <h5 class="nmb-font-about">{{$homesetting->about_yearstitle}}</h5>
                            <h6 class="service_summary-about">{{$homesetting->about_yearstext}}</h6>
                        </div>

                    </div>

                 

                </div>


                <div class="col-md-6">

                    <h4 class="about-heading1-home">{!!$homesetting->about_subtitle!!}</h4>
                    <h3 class="about-heading2-home">{!!$homesetting->about_title!!}</h3>

                    {!!$homesetting->about_description!!}

                    <a href="{{$homesetting->about_buttonlink}}" target="_self" class="btn btn-style1"><span>{{$homesetting->about_buttontext}}</span><svg width="11.4" height="9.2"> <use xlink:href="#arrow"></use></svg></a>

                </div>


            </div>
        </div>
    </div>


    <div class="services-section light-section">
        <div class="container">
            
            <h3>{!!$homesetting->services_title!!}</h3>

            <div class="description-services">{!!$homesetting->sevices_text!!}</div>

            <div class="service-boxes-slider owl-carousel">
                
                @foreach( $services as $service )

                <div class="card-parent">
                    <div class="card-inner-row">
                        <div class="card featured to-top-left">

                            <a href="{{$service->button_link}}" alt="{{$service->title}}">
                                <div class="card-img">
                                    <img class="img-fluid project-image lazy" width="100" height="100" src="/public/img/loading-blog.gif " data-src="{{$service->photo ? '/public/images/media/' . $service->photo->file : '/public/img/200x200.png'}}" alt="{{$service->title}}">
                                </div>

                                <div class="heading-wrapper">
                                    <h4 class="heading"> {{$service->title}}</h4>
                                </div> 
                
                                <div class="paragraph-wrapper">
                                    <p class="paragraph">{{$service->description}}</p>
                                </div>
                            </a>

                        </div>
                        
                    </div>
                </div>
                @endforeach

            </div> 
     
        </div>
    </div>


     <div class="fun-facts-section light-section" id="fun-facts">
        <div class="container">

            <h3 class="fun-facts-heading1">{{$homesetting->fun_title}}</h3>

            <p>{{$homesetting->fun_description}}</p>

            <div class="row fun-facts-timer">
                <div class="col-md-3">
                    <div class="radial">
                        <div class="radial-icon">{!!$homesetting->count_icon1!!}</div>
                        <span class="timer" data-from="0" data-to="{{$homesetting->count_number1}}" data-speed="4000">{{$homesetting->count_number1}}</span>
                        <h4>{{$homesetting->count_description1}}</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="radial">
                        <div class="radial-icon">{!!$homesetting->count_icon2!!}</div>
                        <span class="timer" data-from="0" data-to="{{$homesetting->count_number2}}" data-speed="4000">{{$homesetting->count_number2}}</span>
                        <h4>{{$homesetting->count_description2}}</h4>
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="radial">
                        <div class="radial-icon">{!!$homesetting->count_icon3!!}</div>
                        <span class="timer" data-from="0" data-to="{{$homesetting->count_number3}}" data-speed="4000">{{$homesetting->count_number3}}</span>
                        <h4>{{$homesetting->count_description3}}</h4>
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="radial">
                        <div class="radial-icon">{!!$homesetting->count_icon4!!}</div>
                        <span class="timer" data-from="0" data-to="{{$homesetting->count_number4}}" data-speed="4000">{{$homesetting->count_number4}}</span>
                        <h4>{{$homesetting->count_description4}}</h4>
                    </div>
                </div>
            </div>


        </div>
    </div>

     <div class="portfolio-section">
        <div class="container">
            
            <h3>{!!$homesetting->projects_title!!}</h3>
            <h4>{{$homesetting->projects_subtitle}}</h4>


            <div class="portfolio-slider owl-carousel">
                
                @foreach($projects as $key=>$project)
                    
                    <div class="portfolio-slider-inner">
                
                            <div class="project-box-div"> 
                                @php $count = $key + 1 @endphp
                                <a href="{{URL::to('/')}}/project/{{$project->slug}}" title="{{$project->title}}">
                                       <img class="img-fluid project-image lazy" width="400" height="400" src="/public/img/loading-blog.gif " data-src="{{$project->photo ? '/public/images/media/' . $project->photo->file : '/public/img/200x200.png'}}" alt="{{$project->title}}">
                                </a>
                                <div class="project-meta">

                                    <div class="project-meta-title">
                                        <a href="{{URL::to('/')}}/project/{{$project->slug}}" title="{{$project->title}}"><span class="project__text">{{$project->title}}</span></a>
                                    </div>

                                    <div class="project-category">
                                        <span class="block_text">{{$project->project_category->name}} </span>
                                    </div>
                                    
                                </div>
                            </div>
                       
                    </div>

                    @if ($key == 3)
                        @break
                    @endif


                @endforeach

            
            </div>
        </div>
    </div>

    


    <div class="testimonial-section light-section">

        <div class="container">

            <h3>{{$homesetting->testimonial_title}}</h3>
            <p>{{$homesetting->testimonial_subtitle}}</p>

            <div class="testimonial-section-slider owl-carousel">

                @foreach($testimonials as $testimonial)
                <blockquote class="testimonial-slide">
                    <div class="testimonial-layout1">
                        <div class="item-figure">
                            <img class="img-fluid" width="90" height="90" src="{{$testimonial->profile_pic ? $testimonial->profile_pic : '/public/img/200x200.png'}}" alt="">
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

    <div class="blog-section">

        <div class="container">

            <h3 class="blog-section-subtitle">{!!$homesetting->blog_subtitle!!}</h3>
            <h3 class="blog-section-title">{!!$homesetting->blog_title!!}</h3>

            <div class="row">

                @foreach($posts as $post)
                <div class="col-md-4">
                    <article class="blog-single-post">

                        <div class="after-bg">
                           <a href="{{URL::to('/')}}/post/{{$post->slug}}" title="{{$post->title}}"><img class="lazy blog_post_image img-fluid" width="370" height="380" src="https://cdn.dribbble.com/users/105033/screenshots/1132714/loading-animation-800.gif" data-src="{{$post->photo ? '/public/images/media/' . $post->photo->file : '/public/img/200x200.png'}}" alt="{{$post->title}}"></a>
                           <div class="entry-meta">
                                <div class="entry-date"><span>{{ date('d', strtotime($post->created_at)) }}</span><span>{{ date('m.y', strtotime($post->created_at)) }}</span></div>
                            </div>
                        </div>
                        <div class="blog-item">
                           <div class="box-content p-relative">
                              <div class="box-content-body">
                                
                                <div class="post-category-comment-date">
                                   <span class="post-tags"><i class="fa fa-tag"></i>{{$post->category->name}}</span>
                                </div>
                                <h2 class="title-block">
                                    <a href="{{URL::to('/')}}/post/{{$post->slug}}" title="{{$post->title}}">{{$post->title}}</a>
                                 </h2>
                              </div>
                           </div>
                        </div>

                    </article>
                </div>
                @endforeach

                
            </div>

            <div class="text-center"><a href="blog" target="_self" class="btn btn-style1  btn-style12"><span>{{clean( trans('niva-backend.view_articles'), array('Attr.EnableID' => true))}}</span><svg width="11.4" height="9.2"> <use xlink:href="#arrow"></use></svg></a></div>





        </div>

    </div>



@endsection

