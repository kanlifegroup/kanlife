<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">
    <div class="navbar-header">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      @if($allsettings->site_logo != '')
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('/') }}/public/storage/settings/{{ $allsettings->site_logo }}"  alt="{{ $allsettings->site_title }}" width="180"/></a>
      @else
      <a class="navbar-brand" href="{{ url('/') }}">{{ substr($allsettings->site_title,0,10) }}</a>
      @endif
      @if($allsettings->site_favicon != '')
      <a class="navbar-brand hidden" href="{{ url('/') }}"><img src="{{ url('/') }}/public/storage/settings/{{ $allsettings->site_favicon }}"  alt="{{ $allsettings->site_title }}" width="24"/></a>
      @else
      <a class="navbar-brand hidden" href="{{ url('/') }}">{{ substr($allsettings->site_title,0,1) }}</a>
      @endif
    </div>
    <div id="main-menu" class="main-menu collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="{{ url('/dealer') }}"> <i class="menu-icon fa fa-dashboard"></i>{{ Helper::translation(3549,$translate,'') }} </a>
        </li>
        <li>
          <a href="{{ url('/dealer/products') }}"> <i class="menu-icon fa fa-shopping-cart"></i>{{ Helper::translation(3573,$translate,'') }} </a>
        </li> 
        <li>
          <a href="{{ url('/dealer/orders') }}"> <i class="menu-icon fa fa-shopping-bag"></i>{{ Helper::translation(2154,$translate,'') }} </a>
        </li>                    
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>
</aside>