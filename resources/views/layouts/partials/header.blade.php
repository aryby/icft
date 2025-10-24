<!-- Navigation -->
<header>
    <div class="container clearfix">
        <div class="row-fluid">
            <div class="span12">
                <h1 class="brandlogo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('img/logo/logo.png') }}" alt="" width="200" height="60">
                    </a>
                </h1>

                <div class="topinfo">
                    <p><br></p>
                    <div class="infophone">
                        <a href="#">International Conference on Digital Economy Smart Business & Data
                            Innovation</a>
                    </div>
                    <div class="infoaddress">
                        <p>2025<br>
                        </p>
                        <p>October 23-24, 2025 // Morocco</p>
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
                                    <li><a href="topics-ss.html">Special Sessions</a></li>
                                    {{-- create page public for author instruction --}}
                                    <li><a href="{{ route('author-instructions') }}">Author Instructions</a></li>
                                </ul>
                            </li>
                            <li class="divider-vertical"></li>

                            <li><a href="{{ route('submission') }}">SUBMISSION</a></li>
                            <li class="divider-vertical"></li>

                            <li><a href="{{ route('registration') }}">REGISTRATION</a></li>

                            <li class="divider-vertical"></li>


                            <li class="divider-vertical"></li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
