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
    @if($allsettings->site_blog_display == 1)
    @if(in_array('blog',$avilable))
    <div id="right-panel" class="right-panel">
    @include('admin.header')
       <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>{{ Helper::translation(3042,$translate,'') }}</h1>
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
                    @if($demo_mode == 'on')
                           @include('admin.demo-mode')
                           @else
                       <form action="{{ route('admin.add-post') }}" method="post" enctype="multipart/form-data" id="category_form">
                        {{ csrf_field() }}
                        @endif
                        <div class="card">
                          <div class="col-md-8">
                           <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                    <div class="card mt-3 tab-card">
        {{--
        <div class="card-header tab-card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            @php $j = 1; @endphp
            @foreach($language['data'] as $language)
            <li class="nav-item">
                <a class="nav-link @if($j == 1) active show @endif"  data-toggle="tab" href="#{{ $language->language_name }}" role="tab"  aria-selected="true">{{ $language->language_name }}</a>
            </li>
            @php $j++; @endphp
            @endforeach
          </ul>
        </div>
        --}}
        <div class="tab-content" id="myTabContent">
          @php $i = 1; @endphp
          @foreach($languages['data'] as $language)
          <div class="tab-pane fade @if($i == 1) show active @endif mt-4" id="{{ $language->language_name }}" role="tabpanel">
              <div class="form-group">
                   <label for="name" class="control-label mb-1">{{ Helper::translation(3030,$translate,'') }} <span class="require">*</span></label>
                   <input type="text" name="post_title[]" id="post_title" value=""   class="form-control" data-bvalidator="required">
              </div>
              <div class="form-group">
                       <label for="site_desc" class="control-label mb-1">{{ Helper::translation(1930,$translate,'') }}<span class="require">*</span></label>
                       <textarea name="post_short_desc[]" rows="3"  class="form-control" data-bvalidator="required"></textarea>
              </div>
              <div class="form-group">
                  <label for="site_desc" class="control-label mb-1">{{ Helper::translation(1931,$translate,'') }}<span class="require">*</span></label>
                  <textarea name="post_desc[]" id="summary-ckeditor{{ $language->language_id }}" rows="6" class="form-control" data-bvalidator="required"></textarea>
              </div>            
          </div>
          <input type="hidden" name="language_code[]" value="{{ $language->language_code }}">
          @php $i++; @endphp
          @endforeach

        </div>
      </div>
      {{--<div class="form-group">
                                                <label for="name" class="control-label mb-1">{{ Helper::translation(2982,$translate,'') }} <span class="require">*</span></label>
                                                <input id="post_slug" name="post_slug" type="text" class="form-control" data-bvalidator="required">
                                            </div>--}}
              <div class="form-group">
                        <label for="cat_id" class="control-label mb-1">{{ Helper::translation(3045,$translate,'') }} <span class="require">*</span></label>
                                                <select name="blog_cat_id" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                @foreach($catData['view'] as $category)
                                                <option value="{{ $category->blog_cat_id }}">{{ $category->blog_category_name }}</option>
                                                @endforeach   
                                                </select>
                                            </div>
                                            
                                            <input type="hidden" name="post_media_type" value="image">
                                            {{--
                                            <div class="form-group">
                                                <label for="cat_id" class="control-label mb-1">{{ Helper::translation(3048,$translate,'') }} <span class="require">*</span></label>
                                                <select name="post_media_type" id="post_media_type" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                <option value="image">{{ Helper::translation(2099,$translate,'') }}</option>
                                                <option value="video">{{ Helper::translation(2147,$translate,'') }}</option>
                                                </select>
                                            </div>
                                            <div class="form-group" id="ifVideo">
                                                <label for="name" class="control-label mb-1">{{ Helper::translation(3051,$translate,'') }} <span class="require">*</span></label>
                                                <input id="post_video" name="post_video" type="text" class="form-control" data-bvalidator="required,url">
                                                (example video url : https://www.youtube.com/watch?v=cXxAVn3rASk )
                                            </div>--}}
                                            <!-- <div class="form-group" id="ifImage"> -->
                                            <div class="form-group" id="">
                                                <label for="site_favicon" class="control-label mb-1">Main {{ Helper::translation(2099,$translate,'') }}<span class="require">*</span></label>
                                             <input type="file" id="post_image" name="post_image" class="form-control-file" data-bvalidator="required,extension[jpg:png:jpeg]" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg">
                                             <input type="text" class="form-control" placeholder="Enter alt name" name="post_image_alt">
                                            </div>
                                            <div class="form-group">
                                                <label for="customer_earnings" class="control-label mb-1">Additional Images</label>
                                                <input type="file" id="images[]" name="images[]" class="form-control-file" data-bvalidator="extension[jpg:png:jpeg]" data-bvalidator-msg="{{ Helper::translation(1937,$translate,'') }}" multiple>
                                                <input type="text" class="form-control" placeholder="Enter alt names" name="post_image_alts">
                                                <small>use comma ( , ) to split names</small>
                                             </div>
                                             <div class="form-group">
                                                <label for="site_desc" class="control-label mb-1">{{ Helper::translation(1939,$translate,'') }}</label>
                                                <textarea name="post_tags" rows="6"  class="form-control"></textarea>
                                                 <small>({{ Helper::translation(3054,$translate,'') }} <strong>{{ Helper::translation(3057,$translate,'') }}:</strong> post,blog,category)</small>
                                            </div>
                                            

                                            <div class="form-group">
                                              <label for="meta_title" class="control-label mb-1">Meta Title Name (max 160 chars)</label>
                                              <textarea name="meta_title" id="meta_title" rows="4" class="form-control noscroll_textarea" data-bvalidator="required,maxlen[160]"></textarea>
                                            </div>
                                            <div class="form-group">
                                              <label for="post_seo_desc" class="control-label mb-1">{{ Helper::translation(1945,$translate,'') }} </label>
                                              <textarea name="post_seo_desc" id="post_seo_desc" rows="4" class="form-control noscroll_textarea" data-bvalidator="required,maxlen[160]"></textarea>
                                            </div>
                                            <div class="form-group">
                                              <label for="post_seo_canon" class="control-label mb-1">Canonical Tag (max 160 chars) </label>
                                              <textarea name="post_seo_canon" id="post_seo_canon" rows="4" class="form-control noscroll_textarea" data-bvalidator="required,maxlen[160]"></textarea>
                                            </div>


                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Facebook URL</label>
                                                <input type="text" name="facebook" value=""   class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Instagram URL</label>
                                                <input type="text" name="instagram" value=""   class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Twitter URL</label>
                                                <input type="text" name="twitter" value=""   class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Linkedin URL</label>
                                                <input type="text" name="linkedin" value=""   class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="site_title" class="control-label mb-1"> {{ Helper::translation(1915,$translate,'') }} <span class="require">*</span></label>
                                                <select name="post_status" class="form-control" data-bvalidator="required">
                                                <option value=""></option>
                                                <option value="1">{{ Helper::translation(1916,$translate,'') }}</option>
                                                <option value="0">{{ Helper::translation(1917,$translate,'') }}</option>
                                                </select>
                                            </div> 
                                            <input type="hidden" name="token" value="{{ uniqid() }}">     
                                            <input type="hidden" name="image_size" value="{{ $allsettings->site_max_image_size }}"> 
                                     </div>
                                </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                      </div>
                      <div class="card-footer">
                                 <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                     <i class="fa fa-dot-circle-o"></i> {{ Helper::translation(1919,$translate,'') }}
                                 </button>
                                 <button type="reset" class="btn btn-danger btn-sm">
                                     <i class="fa fa-ban"></i> {{ Helper::translation(2979,$translate,'') }}
                                  </button>
                           </div>
                        </div> 
                     </form> 
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    @else
    @include('admin.denied')
    @endif
    @endif
    <!-- Right Panel -->
   @include('admin.javascript')
</body>
</html>