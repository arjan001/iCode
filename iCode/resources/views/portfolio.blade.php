@extends('layouts.front')


@section('title') {{$portfoliosettings->meta_title}} @endsection
@section('meta') {{$portfoliosettings->meta_description}} @endsection


@section('content')
  
  
   <div class="breadcrumb-area">
        <div class="container">
                <ul class="page-list">
                    <li class="item-home"><a class="bread-link" href="{{ route('home') }}" title="Home">{{$portfoliosettings->breadcrumbs_anchor}}</a></li>
                    <li class="separator separator-home"></li>
                    <li class="item-current">{{$portfoliosettings->meta_title}}</li>
                </ul>
               <h1 class="breadcrumb-title">{!!$portfoliosettings->meta_title!!}</h1>

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

   <div class="portfolio-section-page light-section">
       <div class="projects-page-row">

                      @php $count = 1; @endphp  
                      @foreach($projects as $project)
        

                        <div class="project-row @php if($count % 2 == 0){ echo 'project-row-right'; } @endphp">
                            <div class="project_index">0.@php echo $count; @endphp  </div>
                            <div class="project__img">
                              <img class="img-fluid thumparallax-down" width="900" height="938" src="{{$project->image_featured2}}">                
                            </div>
                            <div class="container">
                                <div class="info-row__info">
                                    <span class="case_tt">{{$project->project_category->name}}</span>
                                    <h2 class="info-row__title"><a href="{{URL::to('/')}}/project/{{$project->slug}}">{{$project->title}}</a></h2>
                                    <div class="project-desc">
                                        {!!$project->excerpt!!}
                                    </div>
                                    <div class="project-button">
                                         <a href="{{URL::to('/')}}/project/{{$project->slug}}" target="_self" class="btn btn-style1"><span>{{clean( trans('niva-backend.view_project') , array('Attr.EnableID' => true))}}</span><svg width="11.4" height="9.2"> <use xlink:href="#arrow"></use></svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        @php $count++; @endphp  
                        @endforeach

       </div>
   </div>

 

@endsection





