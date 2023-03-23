@extends('layouts.admin')

@section('content')

@include('includes.tinyeditor')

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{clean( trans('niva-backend.title_log_favicon') , array('Attr.EnableID' => true))}}</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{clean( trans('niva-backend.title_log_favicon') , array('Attr.EnableID' => true))}}</h6>
        </div>
        <div class="card-body">


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

                		<form action="{{route('setting.update', $lang_id)}}" method="POST" enctype="multipart/form-data">
					        @csrf
					        @method('PUT')

					        <div class="row">
					            
                                <div class="col-xs-12 col-sm-12 col-md-12">
					                <div class="form-group">
					                    <strong>{{clean( trans('niva-backend.website_title') , array('Attr.EnableID' => true))}}</strong>
					                    <input type="text" name="title" value="{{$setting->title}}" class="form-control" placeholder="Name">
					                </div>
					            </div>

                                

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <p> <strong>{{clean( trans('niva-backend.logo') , array('Attr.EnableID' => true))}}</strong></p>
                                        <img style="padding-bottom:10px" class="img-fluid" width="50" src="/public/images/media/{{$setting->photo ? $setting->photo->file : '/public/img/200x200.png'}}" alt="">
                                        <input type="file" name="photo_id" class="form-control-file" placeholder="Photo">
                                    </div>
                                </div>



	                           
                               <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.favicon') , array('Attr.EnableID' => true))}} 
                                        
                                        <span>{{clean( trans('niva-backend.upload_image') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.create')}}"> {{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}} </a> {{clean( trans('niva-backend.then_copy_url') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.index')}}"> {{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}} </a></span>

                                        </strong>
                                        @if ($setting->favicon) <img style="max-height: 30px; background: #ccc;" src="{{$setting->favicon}}" /> @endif
                                        <input type="text" name="favicon" value="{{$setting->favicon}}" class="form-control" placeholder="favicon">

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 maintenance_radio">
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.maintenance_status') , array('Attr.EnableID' => true))}}</strong>
                                        
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="maintenance_status" id="maintenance_status1" value="1" 
                                            @if($setting->maintenance_status == 1) checked @endif>
                                          <label class="form-check-label" for="maintenance_status1"> {{clean( trans('niva-backend.on') , array('Attr.EnableID' => true))}}  </label>
                                        </div>

                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="maintenance_status" id="maintenance_status0" value="0" 
                                            @if($setting->maintenance_status == 0) checked @endif>
                                          <label class="form-check-label" for="maintenance_status0"> {{clean( trans('niva-backend.off') , array('Attr.EnableID' => true))}}  </label>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 maintenance_text @if($setting->maintenance_status == 0) hide @endif">
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.maintenance_text') , array('Attr.EnableID' => true))}}</strong>
                                        <textarea name="maintenance_text" class="form-control" id="maintenance_text" rows="6">{{clean( $setting->maintenance_text , array('Attr.EnableID' => true))}}</textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.loader_status') , array('Attr.EnableID' => true))}}</strong>
                                        
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="loader_status" id="loader_status1" value="1" 
                                            @if($setting->loader_status == 1) checked @endif>
                                          <label class="form-check-label" for="loader_status1"> {{clean( trans('niva-backend.on') , array('Attr.EnableID' => true))}}  </label>
                                        </div>

                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="loader_status" id="loader_status0" value="0" 
                                            @if($setting->loader_status == 0) checked @endif>
                                          <label class="form-check-label" for="loader_status0"> {{clean( trans('niva-backend.off') , array('Attr.EnableID' => true))}}  </label>
                                        </div>
                                        
                                        
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.image_loader') , array('Attr.EnableID' => true))}} 
                                        
                                        <span>{{clean( trans('niva-backend.upload_image') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.create')}}"> {{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}} </a> {{clean( trans('niva-backend.then_copy_url') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.index')}}"> {{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}} </a></span>

                                        </strong>
                                        @if ($setting->loader_img) <img style="max-height: 30px; background: #ccc;" src="{{$setting->loader_img}}" /> @endif
                                         <input type="text" name="loader_img" value="{{$setting->loader_img}}" class="form-control" placeholder="favicon">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.loader_color') , array('Attr.EnableID' => true))}}</strong>
                                        @if ($setting->loader_img) <div style="height: 20px; width: 20px; background-color:{{$setting->loader_color}}"></div> @endif
                                        <input type="text" name="loader_color" value="{{$setting->loader_color}}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.keywords') , array('Attr.EnableID' => true))}}</strong>
                                        <input type="text" name="keywords" value="{{$setting->keywords}}" class="form-control">
                                    </div>
                                </div>



                               
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.enable_disable_ogg') , array('Attr.EnableID' => true))}}</strong>
                                        
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="OGgraph_switch" id="OGgraph_switch1" value="1" 
                                            @if($setting->OGgraph_switch == 1) checked @endif>
                                          <label class="form-check-label" for="OGgraph_switch1"> {{clean( trans('niva-backend.on') , array('Attr.EnableID' => true))}}  </label>
                                        </div>

                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="OGgraph_switch" id="OGgraph_switch0" value="0" 
                                            @if($setting->OGgraph_switch == 0) checked @endif>
                                          <label class="form-check-label" for="OGgraph_switch0"> {{clean( trans('niva-backend.off') , array('Attr.EnableID' => true))}}  </label>
                                        </div>
                                        
                                        
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.enable_disable_anali') , array('Attr.EnableID' => true))}}</strong>
                                        
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="analytics_switch" id="analytics_switch1" value="1" 
                                            @if($setting->analytics_switch == 1) checked @endif>
                                          <label class="form-check-label" for="analytics_switch1"> {{clean( trans('niva-backend.on') , array('Attr.EnableID' => true))}}  </label>
                                        </div>

                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="analytics_switch" id="analytics_switch0" value="0" 
                                            @if($setting->analytics_switch == 0) checked @endif>
                                          <label class="form-check-label" for="analytics_switch0"> {{clean( trans('niva-backend.off') , array('Attr.EnableID' => true))}}  </label>
                                        </div>

                                        <br>
                                        
                                        <strong>{{clean( trans('niva-backend.tracking_code') , array('Attr.EnableID' => true))}}</strong>
                                        <input type="text" name="analytics" value="{{$setting->analytics}}" class="form-control">
                                        
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Enable or disable Facebook Pixel</strong>
                                        
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="facebook_pixel_switch" id="pixel_switch1" value="1" 
                                            @if($setting->facebook_pixel_switch == 1) checked @endif>
                                          <label class="form-check-label" for="pixel_switch1"> {{clean( trans('niva-backend.on') , array('Attr.EnableID' => true))}}  </label>
                                        </div>

                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="facebook_pixel_switch" id="pixel_switch0" value="0" 
                                            @if($setting->facebook_pixel_switch == 0) checked @endif>
                                          <label class="form-check-label" for="pixel_switch0"> {{clean( trans('niva-backend.off') , array('Attr.EnableID' => true))}}  </label>
                                        </div>

                                        <br>

                                        <strong>Pixel code</strong>
                                        <input type="text" name="facebook_pixel" value="{{$setting->facebook_pixel}}" class="form-control">
                                        
                                        
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.enable_disable_schema') , array('Attr.EnableID' => true))}}</strong>
                                        
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="SchmeaORG_switch" id="schema_switch1" value="1" 
                                            @if($setting->SchmeaORG_switch == 1) checked @endif>
                                          <label class="form-check-label" for="schema_switch1"> {{clean( trans('niva-backend.on') , array('Attr.EnableID' => true))}}  </label>
                                        </div>

                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="SchmeaORG_switch" id="schema_switch0" value="0" 
                                            @if($setting->SchmeaORG_switch == 0) checked @endif>
                                          <label class="form-check-label" for="schema_switch0"> {{clean( trans('niva-backend.off') , array('Attr.EnableID' => true))}}  </label>
                                        </div>
                                        
                                        
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="form-group">
                                        <div class="row">

                                            <div class="col-md-4">
                                                <strong>{{clean( trans('niva-backend.author') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="author" value="{{$setting->author}}" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <strong>{{clean( trans('niva-backend.contact_address') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="contact" value="{{$setting->contact}}" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <strong>{{clean( trans('niva-backend.phone') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="phone" value="{{$setting->phone}}" class="form-control">
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">

                                            <div class="col-md-4">
                                                <strong>{{clean( trans('niva-backend.price_range') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="price_range" value="{{$setting->price_range}}" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <strong>{{clean( trans('niva-backend.country') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="country" value="{{$setting->country}}" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                                <strong>{{clean( trans('niva-backend.address') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="address" value="{{$setting->address}}" class="form-control">
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                                    
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.enable_disable_whatsapp') , array('Attr.EnableID' => true))}}</strong>
                                        
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="whatsapp" id="enable_disable_whatsapp1" value="1" 
                                            @if($setting->whatsapp == 1) checked @endif>
                                          <label class="form-check-label" for="enable_disable_whatsapp1"> {{clean( trans('niva-backend.on') , array('Attr.EnableID' => true))}}  </label>
                                        </div>

                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="whatsapp" id="enable_disable_whatsapp0" value="0" 
                                            @if($setting->whatsapp == 0) checked @endif>
                                          <label class="form-check-label" for="enable_disable_whatsapp0"> {{clean( trans('niva-backend.off') , array('Attr.EnableID' => true))}}  </label>
                                        </div>
                                        
                                        
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.google_font') , array('Attr.EnableID' => true))}}</strong>
                                        <input type="text" name="font" value="{{$setting->font}}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.custom_css') , array('Attr.EnableID' => true))}}</strong>
                                        <textarea data-editor="css" name="custom_css" class="form-control" id="custom_css" data-gutter="1" rows="10">{{$setting->custom_css}}</textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.custom_js') , array('Attr.EnableID' => true))}}</strong>
                                        <textarea data-editor="javascript" name="custom_js" class="form-control" id="custom_js" data-gutter="1" rows="10">{{$setting->custom_js}}</textarea>
                                    </div>
                                </div>




                               


					            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
					                <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button>
					            </div>
                                
					        </div>

					    </form>
                		
                	</div>
                </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->




@endsection



@section('footer')
<script src="{{ asset('js/libs/ace.js') }}"></script>
@endsection