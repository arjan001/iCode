@extends('layouts.admin')

@section('content')

@include('includes.tinyeditor')

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{clean( trans('niva-backend.home_settings') , array('Attr.EnableID' => true))}}</h1>


                @if ($message = Session::get('setting_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <div class="pb-2 text-right">
                    @if (!empty($langs))
                        <select name="language" class="form-control language-control" onchange="window.location='{{url()->current() . '?language='}}'+this.value">
                            <option value="" selected disabled>{{clean( trans('niva-backend.select_language') , array('Attr.EnableID' => true))}}</option>
                            @foreach ($langs as $lang)
                                <option value="{{$lang->code}}" {{$lang->code == request()->input('language') ? 'selected' : ''}}>{{$lang->name}}</option>
                            @endforeach
                        </select>
                    @endif
                </div>


                @include('includes.form-errors')

                <div class="row">

                	<div class="col-md-12">

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.section_1_main_slider') , array('Attr.EnableID' => true))}}</h6>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-primary" href="{{ route('slider.index') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.view_all') , array('Attr.EnableID' => true))}}</a>
                                <a class="btn btn-primary" href="{{ route('slider.create') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.create') , array('Attr.EnableID' => true))}}</a>
                            </div>
                        </div>

                        

                        <!-- about -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.section_3_about') , array('Attr.EnableID' => true))}}</h6>
                            </div>
                            <div class="card-body">
                                <form action="{{route('home-setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.title') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="about_title" class="form-control" value="{{$setting->about_title}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.subtitle') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="about_subtitle" class="form-control" value="{{$setting->about_subtitle}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.description') , array('Attr.EnableID' => true))}}</strong>
                                                <textarea name="about_description" class="form-control" rows="15">{{clean( $setting->about_description , array('Attr.EnableID' => true))}}</textarea>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.button_text') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="about_buttontext" class="form-control" value="{{$setting->about_buttontext}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.button_link') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="about_buttonlink" class="form-control" value="{{$setting->about_buttonlink}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <p> 

                                                        <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}}</strong> <span>{{clean( trans('niva-backend.upload_image') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.create') . '?language=' . request()->input('language')}}"> {{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}} </a> {{clean( trans('niva-backend.then_copy_url') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.index'). '?language=' . request()->input('language')}}"> {{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}} </a></span>

                                                        </p>

                                                        @if($setting->about_image1) 
                                                        <img style="max-height: 80px" class="img-fluid" src="{{$setting->about_image1}}" />
                                                        @endif

                                                        <br>

                                                        <input type="text" name="about_image1" class="form-control" value="{{$setting->about_image1}}">

                                                        <p class="mt-3">{{clean( trans('niva-backend.tooltip_text') , array('Attr.EnableID' => true))}} 1</p>
                                                        <input type="text" name="about_image1_titlu1" class="form-control" value="{{$setting->about_image1_titlu1}}">

                                                        <p class="mt-3">{{clean( trans('niva-backend.tooltip_text') , array('Attr.EnableID' => true))}} 2</p>
                                                        <input type="text" name="about_image1_titlu2" class="form-control" value="{{$setting->about_image1_titlu2}}">

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <p> 

                                                        <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}}</strong> <span>{{clean( trans('niva-backend.upload_image') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.create') . '?language=' . request()->input('language')}}"> {{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}} </a> {{clean( trans('niva-backend.then_copy_url') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.index'). '?language=' . request()->input('language')}}"> {{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}} </a></span>

                                                        </p>
                                                        @if($setting->about_image1) 
                                                        <img style="max-height: 80px" class="img-fluid" src="{{$setting->about_image2}}" />
                                                        @endif
                                                        <input type="text" name="about_image2" class="form-control" value="{{$setting->about_image2}}">

                                                        <p class="mt-3">{{clean( trans('niva-backend.tooltip_text') , array('Attr.EnableID' => true))}} 1</p>
                                                        <input type="text" name="about_image2_titlu1" class="form-control" value="{{$setting->about_image2_titlu1}}">

                                                        <p class="mt-3">{{clean( trans('niva-backend.tooltip_text') , array('Attr.EnableID' => true))}} 2</p>
                                                        <input type="text" name="about_image2_titlu2" class="form-control" value="{{$setting->about_image2_titlu2}}">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <p> 

                                                        <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}}</strong> <span>{{clean( trans('niva-backend.upload_image') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.create') . '?language=' . request()->input('language')}}"> {{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}} </a> {{clean( trans('niva-backend.then_copy_url') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.index'). '?language=' . request()->input('language')}}"> {{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}} </a></span>

                                                        </p>
                                                        @if($setting->about_image1) 
                                                        <img style="max-height: 80px" class="img-fluid" src="{{$setting->about_image3}}" />
                                                        @endif
                                                        <input type="text" name="about_image3" class="form-control" value="{{$setting->about_image3}}">

                                                        <p class="mt-3">{{clean( trans('niva-backend.tooltip_text') , array('Attr.EnableID' => true))}} 1</p>
                                                        <input type="text" name="about_image3_titlu1" class="form-control" value="{{$setting->about_image3_titlu1}}">

                                                        <p class="mt-3">{{clean( trans('niva-backend.tooltip_text') , array('Attr.EnableID' => true))}} 2</p>
                                                        <input type="text" name="about_image3_titlu2" class="form-control" value="{{$setting->about_image3_titlu2}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.years_experience_number') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="about_yearstitle" class="form-control" value="{{$setting->about_yearstitle}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.years_experience_text') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="about_yearstext" class="form-control" value="{{$setting->about_yearstext}}">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>  

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- about -->

                        <!-- services -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.section_4_services') , array('Attr.EnableID' => true))}}</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a class="btn btn-primary" href="{{ route('service.index') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.view_all') , array('Attr.EnableID' => true))}}</a>
                                    <a class="btn btn-primary" href="{{ route('service.create') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.create') , array('Attr.EnableID' => true))}}</a>
                                </div>
                                <form action="{{route('home-setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.title') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="services_title" class="form-control" value="{{$setting->services_title}}">
                                            </div>
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.description') , array('Attr.EnableID' => true))}}</strong>
                                                <textarea name="sevices_text" class="form-control" rows="6">{{clean( $setting->sevices_text , array('Attr.EnableID' => true))}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <!-- services -->

                        <!-- fun facts -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.section_2_fun_facts') , array('Attr.EnableID' => true))}}</h6>
                            </div>
                            <div class="card-body">
                                <form action="{{route('home-setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                               
                                       
                                       <div class="col-xs-12 col-sm-12 col-md-12">
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.title') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="fun_title" class="form-control" value="{{$setting->fun_title}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.description') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="fun_description" class="form-control" value="{{$setting->fun_description}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.box_icon') , array('Attr.EnableID' => true))}} <a target="_blank" href="https://fontawesome.com/">{{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}}</a></strong>
                                                        <input type="text" name="count_icon1" class="form-control" value="{{$setting->count_icon1}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.box_icon') , array('Attr.EnableID' => true))}} 2</strong>
                                                        <input type="text" name="count_icon2" class="form-control" value="{{$setting->count_icon2}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.box_icon') , array('Attr.EnableID' => true))}} 3</strong>
                                                        <input type="text" name="count_icon3" class="form-control" value="{{$setting->count_icon3}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.box_icon') , array('Attr.EnableID' => true))}} 4</strong>
                                                        <input type="text" name="count_icon4" class="form-control" value="{{$setting->count_icon4}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.count_number_1') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="count_number1" class="form-control" value="{{$setting->count_number1}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.count_number_2') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="count_number2" class="form-control" value="{{$setting->count_number2}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.count_number_3') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="count_number3" class="form-control" value="{{$setting->count_number3}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.count_number_4') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="count_number4" class="form-control" value="{{$setting->count_number4}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.count_text_1') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="count_description1" class="form-control" value="{{$setting->count_description1}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.count_text_2') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="count_description2" class="form-control" value="{{$setting->count_description2}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.count_text_3') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="count_description3" class="form-control" value="{{$setting->count_description3}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.count_text_4') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="count_description4" class="form-control" value="{{$setting->count_description4}}">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- fun facts -->

                        <!-- portfolio -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.section_5_portfolio') , array('Attr.EnableID' => true))}}</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a class="btn btn-primary" href="{{ route('project.index') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.view_all') , array('Attr.EnableID' => true))}}</a>
                                    <a class="btn btn-primary" href="{{ route('project.create') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.create') , array('Attr.EnableID' => true))}}</a>
                                </div>
                                <form action="{{route('home-setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.title') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="projects_title" class="form-control" value="{{$setting->projects_title}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.subtitle') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="projects_subtitle" class="form-control" value="{{$setting->projects_subtitle}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <!-- portfolio -->

                        <!-- testimonial -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.section_6_testimonials') , array('Attr.EnableID' => true))}}</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a class="btn btn-primary" href="{{ route('testimonial.index') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.view_all') , array('Attr.EnableID' => true))}}</a>
                                    <a class="btn btn-primary" href="{{ route('testimonial.create') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.create') , array('Attr.EnableID' => true))}}</a>
                                </div>

                                <form action="{{route('home-setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.title') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="testimonial_title" class="form-control" value="{{$setting->testimonial_title}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.subtitle') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="testimonial_subtitle" class="form-control" value="{{$setting->testimonial_subtitle}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- testimonial -->

                        <!-- blog -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.section_7_blog') , array('Attr.EnableID' => true))}}</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a class="btn btn-primary" href="{{ route('post.index') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.view_all') , array('Attr.EnableID' => true))}}</a>
                                    <a class="btn btn-primary" href="{{ route('post.create') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.create') , array('Attr.EnableID' => true))}}</a>
                                </div>
                                <form action="{{route('home-setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.title') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="blog_title" class="form-control" value="{{$setting->blog_title}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.subtitle') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="blog_subtitle" class="form-control" value="{{$setting->blog_subtitle}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <!-- blog -->

                        <!-- SEO -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.seo') , array('Attr.EnableID' => true))}}</h6>
                            </div>
                            <div class="card-body">
                                <form action="{{route('home-setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.meta_title') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="meta_title" class="form-control" value="{{$setting->meta_title}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.meta_description') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="meta_description" class="form-control" value="{{$setting->meta_description}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <!-- SEO -->

                		
                	</div>
                </div>



</div>
<!-- /.container-fluid -->




@endsection