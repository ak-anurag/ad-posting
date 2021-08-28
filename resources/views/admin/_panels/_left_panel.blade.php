<aside id="left-panel" class="left-panel"> 
    <nav class="navbar navbar-expand-sm navbar-default w-100">
        <div id="main-menu" class="main-menu collapse navbar-collapse w-100">
            <ul class="nav navbar-nav w-100">
                <li class="{{ Route::currentRouteName() == 'admin.index' ? 'active' : '' }}">
                    <a href="{{ route('admin.index') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="{{ Route::currentRouteName() == 'admin.post' ? 'active' : '' }}">
                    <a href="{{ route('admin.post') }}"><i class="menu-icon fa fa-laptop"></i>Posts </a>
                </li>     
                <li class="{{ Route::currentRouteName() == 'postad' ? 'active' : '' }}">
                    <a href="{{ route('postad') }}"><i class="menu-icon fa fa-laptop"></i>Ad Post</a>
                </li>            
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>