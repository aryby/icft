@extends('layouts.app')

@section('title', 'DESDI’25 - Home')

@section('content')
    @include('partials.hero-slider')


    @include('partials.main-content')

    <!-- Conference Objectives -->
   {{--  <div class="row-fluid">
        <div class="span12">
            <div class="container">
                <div class="page-header">
                    <div>
                        <h4 class="alert-info"><strong>| Conference Objectives</strong></h4>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <p><strong>DESDI’25 seeks to:</strong></p>
                        <ul class="unstyled">
                            <li><i class="icon-ok"></i> Promote interdisciplinary research bridging business, economics, and
                                applied technology.</li>
                            <li><i class="icon-ok"></i> Explore the impact of data-driven innovation on digital
                                transformation and competitiveness.</li>
                            <li><i class="icon-ok"></i> Highlight real-world applications of AI, analytics, and smart
                                technologies in business ecosystems.</li>
                            <li><i class="icon-ok"></i> Provide an international networking platform connecting academia,
                                industry, and policy institutions.</li>
                            <li><i class="icon-ok"></i> Disseminate actionable insights that foster sustainable and
                                inclusive digital growth.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @include('partials.sponsors-lingshui')

{{--     @include('partials.publication-support')



    @include('partials.track-sessions') --}}


    <div class="row-fluid">
        <div class="span12"></div>
    </div>
@endsection

@push('scripts')
    <!-- Existing scripts remain the same -->
    <script>
        jQuery(function() {
            jQuery('#camera_wrap_4').camera({
                height: 'auto',
                loader: 'bar',
                pagination: false,
                thumbnails: false,
                hover: true,
                opacityOnGrid: false,
                fx: 'random',
                transPeriod: 1500,
                time: 7000,
                overlayer: true,
                imagePath: '{{ asset('img/') }}/'
            });
        });
    </script>

    <script type="text/javascript">
        $(window).load(function() {
            $('#recent-projects').carouFredSel({
                responsive: true,
                width: '100%',
                auto: true,
                circular: true,
                infinite: false,
                prev: {
                    button: "#car_prev",
                    key: "left",
                },
                next: {
                    button: "#car_next",
                    key: "right",
                },
                swipe: {
                    onMouse: true,
                    onTouch: true
                },
                scroll: 1500,
                items: {
                    visible: {
                        min: 1,
                        max: 1
                    }
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(".accordion h3").eq(0).addClass("active");
        $(".accordion .accord_cont").eq(0).show();
        $(".accordion h3").click(function() {
            $(this).next(".accord_cont").slideToggle("slow")
                .siblings(".accord_cont:visible").slideUp("slow");
            $(this).toggleClass("active");
            $(this).siblings("h3").removeClass("active");
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("img.imgOpa").hover(function() {
                    $(this).stop().animate({
                        opacity: "0.6"
                    }, 'slow');
                },
                function() {
                    $(this).stop().animate({
                        opacity: "1.0"
                    }, 'slow');
                });
        });
    </script>
@endpush
