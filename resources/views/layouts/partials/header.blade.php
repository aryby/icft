<!-- Navigation -->
<header>
    <div class="container clearfix">
        <div class="row-fluid">
            <div class="span12">
                <h1 class="brandlogo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('img/logo/lgo.jpg') }}" alt="" width="200" height="60">
                    </a>
                </h1>

                <div class="topinfo">
                    <p><br></p>
                    <div class="infophone">
                        <a href="#">International Conference on Digital Economy Smart Business & Data
                            Innovation</a>
                    </div>
                    <div class="infoaddress">
                        <p>2026<br>
                        </p>
                        <p>April 23-25, 2026 // Morocco</p>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row-nav navbar">
                    <div class="navbar-inner">
                        <ul id="nav" class="nav">
                            <li><a href="{{ route('home') }}">Home</a></li>

                            <li><a href="{{ route('committee') }}">COMMITTEE</a></li>
                           
                            <li><a href="{{ route('important-dates') }}">IMPORTANT DATES</a></li>
                            <li class="divider-vertical"></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">CALL FOR PAPERS<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu js-activated" style="display: none;">
                                    <li><a href="{{ route('call-for-papers') }}">Call for Papers</a></li>
                                    {{-- create page public for author instruction --}}
                                    <li><a href="{{ route('author-instructions') }}">Author Instructions</a></li>
                                </ul>
                            </li>
                            <li class="divider-vertical"></li>

                            <li><a href="{{ route('submission') }}">SUBMISSION</a></li>
                            <li class="divider-vertical"></li>

                            @auth
                                {{-- Show dashboard link based on user role --}}
                                @if(auth()->user()->isAdmin())
                                    <li><a href="{{ route('admin.dashboard') }}">ADMIN DASHBOARD</a></li>
                                @elseif(auth()->user()->isAuthor())
                                    <li><a href="{{ route('author.dashboard') }}">AUTHOR DASHBOARD</a></li>
                                @endif
                                
                                {{-- Show logout link for authenticated users --}}
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                        @csrf
                                        <button type="submit" style="background: none; border: none; color: inherit; cursor: pointer; padding: 0; text-decoration: none;">
                                            LOGOUT
                                        </button>
                                    </form>
                                </li>
                            @else
                                {{-- Show registration and login links for non-authenticated users --}}
                                <li><a href="{{ route('registration') }}">REGISTRATION</a></li>
                                <li><a href="{{ route('login') }}">LOGIN</a></li>
                            @endauth

                            <li class="divider-vertical"></li>


                            <li class="divider-vertical"></li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
