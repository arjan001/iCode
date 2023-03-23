

@extends('layouts.admin')

@section('content')

@include('includes.tinyeditor')

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{clean( trans('niva-backend.edit_testimonial') , array('Attr.EnableID' => true))}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{clean( trans('niva-backend.edit_testimonial') , array('Attr.EnableID' => true))}}</h6>
        </div>
        <div class="card-body">

                <a href="{{route('testimonial.index') . '?language=' . request()->input('language')}}" class="btn btn-primary btn-back">{{clean( trans('niva-backend.back_testimonial') , array('Attr.EnableID' => true))}}</a>

                @if ($message = Session::get('testimonial_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @include('includes.form-errors')

                <div class="row">

                	<div class="col-md-12">

                		<form action="{{route('testimonial.update', $testimonial->id)}}" method="POST" enctype="multipart/form-data">
					        @csrf
					        @method('PUT')

					        <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.name') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="name" class="form-control" value="{{$testimonial->name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.position') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="position" class="form-control" value="{{$testimonial->position}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}} <span>{{clean( trans('niva-backend.upload_image') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.create')}}"> {{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}} </a> {{clean( trans('niva-backend.then_copy_url') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.index')}}"> {{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}} </a></span></strong>
                                                @if($testimonial->profile_pic)
                                                <img style="padding-bottom:10px" class="img-fluid" width="50" src="{{$testimonial->profile_pic}}" alt="">
                                                @endif
                                                <input type="text" name="profile_pic" class="form-control" value="{{$testimonial->profile_pic}}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.description') , array('Attr.EnableID' => true))}}</strong>
                                        <textarea name="description" class="form-control" rows="6">{{clean( $testimonial->description , array('Attr.EnableID' => true))}} </textarea>
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
