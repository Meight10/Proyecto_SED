<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/ProyectoSED/public">
                Home </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">

                
                @if (Auth::check())
                  <li class="nav-item">
                    <a class="nav-link" href="profile" onclick="scrollToDownload()">
                        <i class="material-icons">account_circle</i> {{ Auth::user()->name }}
                    </a>
                  </li>                
                  
                    <a href="{{ route('logout') }}" style="color:white;" 
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="material-icons">account_circle</i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>         
                @else

                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" onclick="scrollToDownload()">
                                <i class="material-icons">account_circle</i> Log In 
                            </a>
                    </li>      
                              
                @endif

                

                

                
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href=""  data-original-title="Follow us on Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="" data-original-title="Like us on Facebook">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="" data-original-title="Follow us on Instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
