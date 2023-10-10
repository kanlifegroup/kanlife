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
    @if(in_array('enquiries',$avilable))
    <div id="right-panel" class="right-panel">
       @include('admin.header')
       <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Partner/Dealer With Us</h1>
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
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Partner/Dealer With Us</strong>
                            </div>
                            <div class="card-body">
                              <div class="form-group">
                                  <label for="name" class="control-label mb-1 text-secondary">Name:</label>
                                  <p class="text-dark">{{$enquiry->name}}</p>
                              </div>
                              <div class="form-group">
                                  <label for="name" class="control-label mb-1 text-secondary">Email:</label>
                                  <p class="text-dark">{{$enquiry->email}}</p>
                              </div>
                              <div class="form-group">
                                  <label for="name" class="control-label mb-1 text-secondary">Phone:</label>
                                  <p class="text-dark">{{$enquiry->phone != '' ? $enquiry->phone : 'N/A'}}</p>
                              </div>
                              <div class="form-group">
                                  <label for="name" class="control-label mb-1 text-secondary">User Type:</label>
                                  <p class="text-dark">{{$enquiry->type}}</p>
                              </div>
                              <div class="form-group">
                                  <label for="name" class="control-label mb-1 text-secondary">Address:</label>
                                  <p class="text-dark">{{$enquiry->address != '' ? $enquiry->address : 'N/A'}}</p>
                              </div>
                              <div class="form-group">
                                  <label for="name" class="control-label mb-1 text-secondary">Message:</label>
                                  <p class="text-dark">{{$enquiry->message != '' ? $enquiry->message : 'N/A'}}</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    @include('admin.denied')
    @endif 
   @include('admin.javascript')
</body>
</html>