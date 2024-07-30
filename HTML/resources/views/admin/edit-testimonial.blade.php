<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
@include('admin.stylesheet')
</head>
<body>
@include('admin.navigation')
<!-- Right Panel -->
    @if(in_array('testimonials',$avilable))
    <div id="right-panel" class="right-panel">
      @include('admin.header')
       <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Testimonial</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    
                </div>
            </div>
        </div>
        @if (session('success'))
        <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
        </div>
       @endif
       @if (session('error'))
            <div class="col-sm-12">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            </div>
        @endif
        @if ($errors->any())
            <div class="col-sm-12">
             <div class="alert  alert-danger alert-dismissible fade show" role="alert">
             @foreach ($errors->all() as $error)
              {{$error}}
             @endforeach
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
             </div>
            </div>   
         @endif
         <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                   <div class="col-md-12">
                     <div class="card">
                        <form action="{{ route('admin.edit-testimonial') }}" method="post" id="setting_form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                         <div class="col-md-6">
                           <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                    <input type="hidden" name="id" value="{{ base64_encode($edit['value']->id) }}">
                                       <div class="form-group">
                                        <label for="name" class="control-label mb-1">Client Name<span class="require">*</span></label>
                                        <input id="name" name="name" type="text" class="form-control noscroll_textarea" value="{{ $edit['value']->name }}" data-bvalidator="required">
                                      </div>
                                      <div class="form-group">
                                        <label for="description" class="control-label mb-1">Description <span class="require">*</span></label>
                                        <textarea name="description" id="description" rows="3" class="form-control noscroll_textarea" data-bvalidator="required,maxlen[1000]">{{ $edit['value']->description }}</textarea>
                                      </div>
                                     </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                  <div class="card-body">
                                    <div class="form-group">
                                      <label for="designation" class="control-label mb-1">Client Deasignation <span class="require">*</span></label>
                                      <input id="designation" name="designation" type="text" class="form-control noscroll_textarea" value="{{ $edit['value']->designation }}" data-bvalidator="required"> 
                                    </div>
                                    <div class="form-group">
                                      <label for="customer_earnings" class="control-label mb-1">Client Image <span class="require">*</span></label>
                                      <input type="file" id="image" name="image" class="form-control-file" data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="{{ Helper::translation(1937,$translate,'') }}" multiple>
                                      @if($edit['value']->image != '')
                                        <img src="{{ url('/') }}/public/storage/testimonial/{{ $edit['value']->image }}"  class="image-size" alt="{{ $edit['value']->name }}"/>
                                      @else 
                                        <img src="{{ url('/') }}/public/img/no-image.jpg"  class="image-size" alt="{{ $edit['value']->name }}"/>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12 no-padding">
                             <div class="card-footer">
                                 <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> {{ Helper::translation(1919,$translate,'') }}</button>
                                 <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> {{ Helper::translation(2979,$translate,'') }} </button>
                             </div>
                             </div>
                    </form> 
                    </div>
                  </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    @else
    @include('admin.denied')
    @endif
    <!-- Right Panel -->
   @include('admin.javascript')
</body>
</html>