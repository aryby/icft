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
                        <a href="#">The 11th International Conference on Communication and Information Processing</a>
                    </div>
                    <div class="infoaddress">
                        <p>2025年第十一届通信与信息处理国际会议
                            <img src="{{ asset('img/logo/bjyddx.png') }}" width="180" height="110" align="right" hspace="10"><br>
                        </p>
                        <p>November 12-15, 2025 // Lingshui, Hainan, China</p>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row-nav navbar">
                    <div class="navbar-inner">
                        <ul id="nav" class="nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME<b class="caret"></b></a>
                                <ul class="dropdown-menu js-activated" style="display: none;">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="chi.html">中文介绍</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('committee') }}">COMMITTEE</a></li>
                            <li class="divider-vertical"></li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">CALL FOR PAPERS<b class="caret"></b></a>
                                <ul class="dropdown-menu js-activated" style="display: none;">
                                    <li><a href="{{ route('call-for-papers') }}">Call for Papers</a></li>
                                    <li><a href="topics-ss.html">Special Sessions</a></li>
                                    <li><a href="{{ route('submission') }}">Submission Instruction</a></li>
                                </ul>
                            </li>
                            <li class="divider-vertical"></li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROGRAM<b class="caret"></b></a>
                                <ul class="dropdown-menu js-activated" style="display: none;">
                                    <li><a href="{{ route('speakers') }}">Keynote Speakers</a></li>
                                    <li><a href="is.html">Invited Speakers</a></li>
                                    <li><a href="forum.html">TNE Leadership Forum</a></li>
                                    <li><a href="{{ route('program') }}">Schedule at a glance</a></li>
                                </ul>
                            </li>

                            <li><a href="award.html">AWARD</a></li>
                            <li><a href="competition.html">COMPETITION</a></li>
                            <li class="divider-vertical"></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">REGISTRATION<b class="caret"></b></a>
                                <ul class="dropdown-menu js-activated" style="display: none;">
                                    <li><a href="{{ route('registration') }}">Registration Fee</a></li>
                                    <li><a href="{{ route('registration') }}#note">Important Information & Policy</a></li>
                                    <li><a href="info.html">Visa Letter Request</a></li>
                                </ul>
                            </li>
                            <li class="divider-vertical"></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOTEL/TRAVEL<b class="caret"></b></a>
                                <ul class="dropdown-menu js-activated" style="display: none;">
                                    <li><a href="venue.html">Conference Venue</a></li>
                                    <li><a href="venue.html#hotel">Hotels</a></li>
                                    <li><a href="city.html">Lingshui Travel</a></li>
                                </ul>
                            </li>
                            <li class="divider-vertical"></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">History<b class="caret"></b></a>
                                <ul class="dropdown-menu js-activated" style="display: none;">
                                    <li><a href="{{ route('publication') }}">Publication & Index</a></li>
                                    <li><a href="kyg.html">Speakers Gallery</a></li>
                                    <li><a href="iccip24.html">ICCIP 2024</a></li>
                                    <li><a href="iccip23.html">ICCIP 2023</a></li>
                                    <li><a href="iccip22.html">ICCIP 2022</a></li>
                                    <li><a href="iccip21.html">ICCIP 2021</a></li>
                                    <li><a href="iccip20.html">ICCIP 2020</a></li>
                                    <li><a href="iccip19.html">ICCIP 2019</a></li>
                                    <li><a href="iccip18.html">ICCIP 2018</a></li>
                                    <li><a href="iccip17.html">ICCIP 2017</a></li>
                                    <li><a href="iccip16.html">ICCIP 2016</a></li>
                                    <li><a href="iccip15.html">ICCIP 2015</a></li>
                                </ul>
                            </li>
                            <li><a href="news.html">News</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
