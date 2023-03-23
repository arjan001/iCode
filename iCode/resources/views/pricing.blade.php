@extends('layouts.front')


@section('title') {{$pricingsetting->meta_title}} @endsection
@section('meta') {{$pricingsetting->meta_description}} @endsection

@section('content')
  
  


  

   <div class="breadcrumb-area">
        <div class="container">
                <ul class="page-list">
                    <li class="item-home"><a class="bread-link" href="{{ route('home') }}" title="Home">{{$pricingsetting->breadcrumbs_anchor}}</a></li>
                    <li class="separator separator-home"></li>
                    <li class="item-current">{{$pricingsetting->meta_title}}</li>
                </ul>
               <h1 class="breadcrumb-title">{!!$pricingsetting->meta_title!!}</h1>

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


   	<div class="pricing-elements">

   		<div class="container">

   			<h2>{!!$pricingsetting->title!!}</h2>
   			<p>{{$pricingsetting->description}}</p>

	   		<div class="row">

	   			@foreach($pricings as $pricing)
	   			<div class="col-md-4">
	   				<div class="venor-price-box @if($pricing->pricing_switch == 1) premium-pricing @endif">
	   					@if($pricing->pricing_switch == 1) <div class="plan-ribbon-wrapper"><div class="plan-ribbon">{{$pricing->popular_text}}</div></div> @endif
					    {!!$pricing->title!!}
					    <div class="plan-features">
					        {!!$pricing->description!!}
					    </div>
					    <div class="project-button">
							<a href="{{$pricing->button_link}}" target="_self" class="btn btn-style1"><span>{{$pricing->button_text}}</span><svg width="11.4" height="9.2"> <use xlink:href="#arrow"></use></svg></a>
						</div>
					</div>
	   			</div>
	   			@endforeach

	   		</div>
	    </div>
   	</div>
    




@endsection

