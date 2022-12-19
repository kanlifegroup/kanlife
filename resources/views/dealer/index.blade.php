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
@include('dealer.navigation')
<!-- Right Panel -->
    <div id="right-panel" class="right-panel">
       @include('admin.header')
    <!--/.col-->
    <div class="col-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <i class="fa fa-location-arrow bg-danger p-3 font-2xl mr-3 float-left text-light"></i>
                    <div class="text-muted text-uppercase font-weight-bold font-xs small">{{ Helper::translation(3486,$translate,'') }}</div>
                    <div class="h5 text-secondary mb-0 mt-1">{{ $total_products }}</div>
                </div>
                <div class="b-b-1 pt-3"></div>
                <hr>
                <div class="more-info pt-2" style="margin-bottom:-10px;">
                    <a class="font-weight-bold font-xs btn-block text-muted small" href="{{ url('/dealer/products') }}">{{ Helper::translation(3477,$translate,'') }} <i class="fa fa-angle-right float-right font-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--/.col-->
    <div class="col-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <i class="fa fa-shopping-cart bg-flat-color-3 p-3 font-2xl mr-3 float-left text-light"></i>
                    <div class="text-muted text-uppercase font-weight-bold font-xs small">{{ Helper::translation(3492,$translate,'') }}</div>
                    <div class="h5 text-secondary mb-0 mt-1">{{ $total_orders }}</div>
                </div>
                <div class="b-b-1 pt-3"></div>
                <hr>
                <div class="more-info pt-2" style="margin-bottom:-10px;">
                    <a class="font-weight-bold font-xs btn-block text-muted small" href="{{ url('/dealer/orders') }}">{{ Helper::translation(3477,$translate,'') }} <i class="fa fa-angle-right float-right font-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
       <!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
    @include('admin.javascript')
</body>
</html>