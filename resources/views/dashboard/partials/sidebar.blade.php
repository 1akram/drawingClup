<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand-->
        <div class="sidenav-header align-items-center">
            <a class="navbar-brand" href="javascript:void(0)"><img class="navbar-brand-img" src='{{asset("/assets/images/logo.png")}}' alt="Dashboard" /></a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse-->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items-->
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href='{{asset("/dashboard")}}'><i class="ni ni-tv-2 text-primary"></i><span class="nav-link-text">Dashboard</span></a></li>
                    <li class="nav-item">
                        <a class="nav-link" href='{{asset("/dashboard/designers")}}'>
                            <i class="ni ni-book-bookmark text-orange"></i><span class="nav-link-text">Dessinateurs</span></a>
                    </li>
                    1

                </ul><!-- Divider-->
                <hr class="my-3" /><!-- Heading-->
                <h6 class="navbar-heading p-0 text-muted"><span class="docs-normal">Account</span></h6><!-- Navigation-->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item"><a class="nav-link" href='{{asset("/dashboard/account")}}'><i class="ni ni-spaceship"></i><span class="nav-link-text">Compte</span></a></li>

                    <li class="nav-item">
                        <form action="{{route('auth.logout')}}" method="POST" id='logout_form'>
                            @csrf
                            <a class="nav-link" href="javascript:{}" onclick="document.getElementById('logout_form').submit();">
                                <i class="ni ni-palette"></i><span class="nav-link-text">Logout</span>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>