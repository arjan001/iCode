@extends('layouts.front')

@section('title') {{$project->meta_title}} @endsection
@section('meta') {{$project->meta_description}} @endsection

@section('styles')
<link href="{{ asset('css/front/magnific.min.css')}}" type="text/css" rel="stylesheet">
@endsection

@section('content')
  
  


    <div class="breadcrumb-area">
        <div class="container">
                <ul class="page-list">
                    <li class="item-home"><a class="bread-link" href="{{ route('home') }}" title="Home">{{clean( trans('niva-backend.home') , array('Attr.EnableID' => true))}}</a></li>
			            <li class="separator separator-home"></li>
			            <li class="item-home"><a class="bread-link" href="{{ route('portfolio') }}" title="Home">{{clean( trans('niva-backend.our_projects') , array('Attr.EnableID' => true))}}</a></li>
			            <li class="separator separator-home"></li>
			            <li class="item-current">{{$project->meta_title}}</li>
                </ul>
               <h1 class="breadcrumb-title">{!!$project->meta_title!!}</h1>

               <ul class="shape-group-code">
                    <li class="shape shape-1">
                        <img src="../img/bubble-9.png" alt="circle">
                    </li>
                    <li class="shape shape-2" >
                        <img src="../img/bubble-17.png" alt="circle">
                    </li>
                    <li class="shape shape-3" >
                        <img src="../img/line-4.png" alt="circle">
                    </li>
                </ul>
        </div>
   </div>


   <div class="project-content">

   		

   		<div class="container">

   			<div class="project__img_single">
	         	<img class="img-fluid thumparallax-down" width="900" height="938" src="{{$project->image_featured2}}">                
	       	</div>

   			<div class="row">
					<div class="col-md-8">
				        <h2 class="post-name">{{$project->meta_title}}</h2>
				        <span class="venor-animate-border"></span>
				        {!!$project->body!!}
					</div>
				    <div class="col-md-4">
				        <h4 class="post-name">{{clean( trans('niva-backend.info') , array('Attr.EnableID' => true))}}</h4>
				        <span class="venor-animate-border"></span>
				        
				        <p><strong>{{$project->date}}</strong></p>
				        <p><strong>{{$project->client}}</strong></p>
				        <p><strong>{{$project->project_category->name}}</strong></p>

				        <a href="{{$project->button_link}}" target="_blank" class="btn btn-style1"><span>{{$project->button_text}}</span></a>
				    </div>
				</div>

				<div class="gallery">
					<div class="row">

						<div class="col-md-6">
							<div class="featured-image">
								<a href="{{$project->img_gal1}}">
									<img class="thumparallax-down img-fluid lazy" src="/public/img/loading-blog.gif" data-src="{{$project->img_gal1}}">
								</a>
							</div>
						</div>

						<div class="col-md-6">
							<div class="featured-image">
								<a href="{{$project->img_gal2}}">
									<img class="thumparallax-down img-fluid lazy" src="/public/img/loading-blog.gif" data-src="{{$project->img_gal2}}">
								</a>
							</div>
						</div>

						<div class="col-md-6">
							<div class="featured-image">
								<a href="{{$project->img_gal3}}">
									<img class="thumparallax-down img-fluid lazy" src="/public/img/loading-blog.gif" data-src="{{$project->img_gal3}}">
								</a>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="featured-image">
								<a href="{{$project->img_gal4}}">
									<img class="thumparallax-down img-fluid lazy" src="/public/img/loading-blog.gif" data-src="{{$project->img_gal4}}">
								</a>
							</div>
						</div>

					</div>
					
				</div>

   		</div>
   		
   	</div>



@endsection

