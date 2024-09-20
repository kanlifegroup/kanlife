<header id="header" class="header">
    <div class="header-menu">
       <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                       <code>{{-- Helper::Current_Version() --}}</code> 
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if(Auth::user()->user_photo != '')
                        <img src="{{ url('/') }}/public/storage/users/{{ Auth::user()->user_photo }}"  class="user-avatar rounded-circle" alt="{{ Auth::user()->name }}"/>@else <img src="{{ url('/') }}/public/img/no-user.png"  class="user-avatar rounded-circle" alt="{{ Auth::user()->name }}"/>  @endif
                        </a>
                        <div class="user-menu dropdown-menu">
                            @if(Auth::user()->user_type == 'admin')
                            <a class="nav-link" href="{{ url('/admin/edit-profile') }}"><i class="fa fa-user"></i> {{ Helper::translation(2043,$translate,'') }}</a>
                            @else
                            <a class="nav-link" href="{{ url('/dealer/edit-profile') }}"><i class="fa fa-user"></i> {{ Helper::translation(2043,$translate,'') }}</a>
                            @endif
                            {{--
                            @if(in_array('settings',$avilable)) 
                            <a class="nav-link" href="{{ url('/admin/general-settings') }}"><i class="fa fa-cog"></i> {{ Helper::translation(3408,$translate,'') }}</a>
                            @endif
                            --}}
                            @if(Auth::user()->user_type == 'admin')
                            <form action="{{url('/logout?logout=admin')}}" method="post">
                              @else
                            <form action="{{url('/logout?logout=dealer')}}" method="post">
                            @endif
                              @csrf
                            <a class="nav-link" href="javascript:void(0);" onclick="event.preventDefault();this.closest('form').submit();"><i class="fa fa-power-off"></i> {{ Helper::translation(2048,$translate,'') }}</a>
                            </form>
                        </div>
                  </div>
                  @if(Auth::user()->user_type == 'deuglo')
                  @if($allsettings->google_translate == 1)
                  <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <span class="fa fa-language"></span> {{ $language_title }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            @foreach($alllang['data'] as $language)
                            <div class="dropdown-item">
                                <a href="{{ URL::to('/translate') }}/{{ $language->language_code }}">{{ $language->language_name }}</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                 @endif 
                 @endif 
               </div>
            </div>
</header>           