<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">
        <div class="page-logo">
            <a href="{{ env('app_url') }}">
                <img src="{{ env('APP_URL') }}/img/logo_dinas_header.png" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler">
            </div>
        </div>
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>

        <div class="page-top">
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"> </li>
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username username-hide-on-mobile"> {{ session('user.name') }} </span>
                            <img alt="" class="img-circle" src="{{ env('app_url') }}/{{ session('user.image') }}" /> </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{ env('app_url') }}/profile/index">
                                    <i class="icon-user"></i> Profile </a>
                            </li>
                            <li class="divider"> </li>
                            {{-- <li>
                                <a href="{{ env('app_url') }}/lockscreen">
                                    <i class="icon-lock"></i> Lock Screen </a>
                            </li> --}}
                            <li>
                                <a href="{{ env('app_url') }}/logout">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
