<!-- FOOTER BEGIN ================================================== -->
<div class="footer footerdark">
    <div class="text-center wraptotop"> 
        <a class="totop"><i class="icon-chevron-up"></i></a> 
    </div>
    <div class="container">
        <!-- 1st row -->
        <div class="row-fluid">
            <div class="span4">
                <h1 class="title"><a href="{{ route('contact') }}">Contact 联系方式</a></h1>
                <hr>
                <div>
                    <p>Conference Secretary: Ms. Lorraine Li</p>
                    <p>Phone: +86-18030559376</p>
                    <p>Email: <a href="mailto:iccip_iccip@young.ac.cn">iccip_iccip@young.ac.cn</a></p>
                </div>
            </div>
            <div class="span4">
                <h1 class="title">USEFUL LINKS</h1>
                <hr>
                <div id="quotes">
                    <p>Paper Template 论文格式 - 
                        <em><a href="{{ asset('ieee-conference-latex-template.zip') }}" target="_blank">LaTex</a> |  
                        <a href="{{ asset('acm_template.docx') }}" target="_blank">Word</a></em>
                    </p>
                    <p><a href="https://www.zmeeting.org/submission/iccip2025" target="_blank">Submission System 投稿系统</a></p>
                    <p><a href="{{ route('registration') }}">Registration 会议注册</a></p>
                </div>
            </div>
            <div class="span4">
                <h1 class="title">WECHAT ASSISTANT 扫码添加微信咨询</h1>
                <hr>
                <p>
                    <span class="footerlogo">
                        <img border="0" src="{{ asset('img/logo/Official Accounts-CS.jpg') }}" width="90" height="90"> 
                        &nbsp;&nbsp;&nbsp;
                        <img border="0" src="{{ asset('img/logo/wechat-CS.jpg') }}" width="90" height="90"><br>
                    </span>
                    扫二维码发送消息"ICCIP 2025"
                </p>
            </div>
        </div>
    </div>
</div>
<!-- 2nd row -->
<div class="footerbottom footerbottomdark">
    <div class="container">
        <div class="row-fluid">
            <!-- left -->
            <div class="span4 smallspacetop">
                <p class="smaller">
                    <span class="copyright">© </span> Copyright 2024 ICCIP 
                    All rights reserved.
                </p>
            </div>
            <!-- right -->
            <div class="span8 smallspacetop">
                <div class="pull-right smaller">
                    <ul class="footermenu">
                        <li><a href="{{ route('home') }}">HOME</a></li>
                        <li><a href="{{ route('committee') }}">COMMITTEE</a></li>
                        <li><a href="{{ route('call-for-papers') }}">CFP</a></li>
                        <li><a href="venue.html">VENUE</a></li>
                        <li><a href="{{ route('program') }}">SCHEDULE</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end right -->
        </div>
    </div>
</div>
<!-- FOOTER END ================================================== -->
