@extends('layouts.template')

@section('content')
<header id="home">
    @include('sections.nav-bar')
    @include('sections.slider')
</header>  <!-- end of header -->

@include('sections.countdown')

<section class="announciation section-padding" id="couple">
    <div class="container">
        <div class="row section-heading">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2>@lang('couple.weeding_announcement')</h2>
                <p>@lang('couple.subtext')</p>
            </div>
        </div>

        <div class="row content">
            <div class="col col-sm-12 col-md-8 col-md-offset-2">
                <div class="col col-sm-6 col-md-6 col-lg-5">
                    <div class="thumbnail">
                        <div class="frame">
                            <img src="images/home/announcement/frame.png" alt="Frame">
                            <img src="images/home/announcement/hover-frame.png" alt="Hover Frame" class="hover-frame">
                            <img src="{{'/storage/'.setting('couple.the_groom')}}" alt="Romeo">
                        </div>
                        <h3>@lang('couple.groom-name')</h3>
                        <h4>@lang('couple.the-groom')</h4>
                        <p>@lang('couple.about-groom')</p>

                    </div>
                </div>
                <div class="col col-sm-6 col-md-6 col-lg-5 col-lg-offset-2">
                    <div class="thumbnail">
                        <div class="frame">
                            <img src="images/home/announcement/frame.png" alt="Frame">
                            <img src="images/home/announcement/hover-frame.png" alt="Hover Frame" class="hover-frame">
                            <img src="{{'/storage/'.setting('couple.bride')}}" alt="Juli">

                        </div>
                        <h3>@lang('couple.bride-name')</h3>
                        <h4>@lang('couple.the-bride')</h4>
                        <p>@lang('couple.about-bride')</p>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end of container -->
</section> <!-- end of announciation -->

<section class="happy-couple section-padding" data-parallax="scroll" data-image-src="images/home/happy-couple-bg.jpg">
    <div class="overlay"></div>
    <div class="container">
        <div class="col">
            <h2>@lang('couple.happy_couples_need_parallax_elements')</h2>
            <div>
                <i class="fa fa-heart"></i>
                <i class="fa fa-heart"></i>
                <i class="fa fa-heart"></i>
            </div>
        </div>
    </div> <!-- end of container -->
</section> <!-- end of happy-couple -->

<section class="love-story section-padding" id="story">
    <div class="container">
        <div class="row section-heading">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2>@lang('story.our_love_story')</h2>
                <p>@lang('story.sub-section')</p>
            </div>
        </div>

        <div class="row content">
            @foreach($storys as $story)
                @if(App::isLocale('en'))
                    <div class="row @if($story->is_position_left) middle-row @endif">
                        <div class="col col-xs-12 col-md-10 col-md-offset-1 col-sm-12 col-lg-8 col-lg-offset-2">
                            <div class="col col-xs-8 col-sm-8">
                                <h3>{{$story->en_date}}</h3>
                                <h4>{{$story->en_title}}</h4>
                                <p>{{$story->en_story}}</p>
                            </div>
                            <div class="col col-xs-4 col-sm-4">
                                <div class="frame">
                                    <img src="images/home/love-story/img-frame-right.png" alt="Frame">
                                    <img src="{{asset('storage/'.$story->image)}}" alt="Love picture">
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col col-xs-12 col-md-10 col-md-offset-1 col-sm-12 col-lg-8 col-lg-offset-2">
                            <div class="col col-xs-8 col-sm-8">
                                <h3>{{$story->pt_date}}</h3>
                                <h4>{{$story->pt_title}}</h4>
                                <p>{{$story->pt_story}}</p>
                            </div>
                            <div class="col col-xs-4 col-sm-4">
                                <div class="frame">
                                    <img src="images/home/love-story/img-frame-right.png" alt="Frame">
                                    <img src="{{asset('storage/'.$story->image)}}" alt="Love picture">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div> <!-- end of content -->
    </div> <!-- end of container -->
</section> <!-- end of love-story -->

<section class="event section-padding" id="event">
    <div class="container">
        <div class="row section-heading">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2>@lang('events.title')</h2>
                <p>@lang('events.sub-title')</p>
            </div>
        </div>

        <div class="content">
            @foreach($activities as $activitie)
                @if(App::isLocale('en'))
                    <div class="row">
                        <div class="col col-md-5">
                            <img src="images/home/event/img-1.jpg" alt="Event Picture" class="img img-responsive">
                        </div>
                        <div class="col col-md-7">
                            <h3>{{$activitie->en_title}}</h3>
                            <p><span>{{$activitie->en_sub_title}}</span></p>
                            <p>
                                {!! $activitie->en_details !!}
                            </p>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col col-md-5">
                            <img src="images/home/event/img-1.jpg" alt="Event Picture" class="img img-responsive">
                        </div>
                        <div class="col col-md-7">
                            <h3>{{$activitie->pt_title}}</h3>
                            <p><span>{{$activitie->pt_sub_title}}</span></p>
                            <p>
                                {!! $activitie->pt_details !!}
                            </p>
                        </div>
                    </div>

                @endif
            @endforeach
        </div> <!-- end of content -->
    </div> <!-- end of container -->
</section> <!-- end of event-->


<section class="groomsmen-bridesmaids section-padding" id="people">
    <div class="container">
        <div class="row section-heading">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2>@lang('people.title')</h2>
                <p>@lang('people.sub-title')</p>
            </div>
        </div>
    </div> <!-- end of container -->

    <div class="row content">
        <div class="container p-5">
            @foreach($peoples as $people)
                @if(App::isLocale('en'))
                    <div class="col col-xs-6 col-sm-3 mb-5">
                        <div style="margin-top: 10px" class="frame">
                            <a href="#">
                                <img src="images/home/groomsmen-bridesmaids/img-frame.png" alt="Frame" class="img img-responsive hidden-xs">
                                <img src="images/home/groomsmen-bridesmaids/img-frame-sm.png" alt="Frame" class="img img-responsive hidden-lg hidden-md hidden-sm show-xs">
                                <img src="{{asset('storage/'.$people->image)}}" alt="Image" class="img img-responsive">
                            </a>
                            <div class="overlay">
                                <div><span>{{$people->en_side}}</span></div>
                            </div>
                        </div>
                        <h3>{{$people->en_name}}</h3>
                        <span>{{$people->en_relation}}</span>
                    </div>
                @else
                    <div class="col col-xs-6 col-sm-3 mb-5">
                        <div style="margin-top: 10px" class="frame">
                            <a href="#">
                                <img src="images/home/groomsmen-bridesmaids/img-frame.png" alt="Frame" class="img img-responsive hidden-xs">
                                <img src="images/home/groomsmen-bridesmaids/img-frame-sm.png" alt="Frame" class="img img-responsive hidden-lg hidden-md hidden-sm show-xs">
                                <img src="{{asset('storage/'.$people->image)}}" alt="Image" class="img img-responsive">
                            </a>
                            <div class="overlay">
                                <div><span>{{$people->pt_side}}</span></div>
                            </div>
                        </div>
                        <h3>{{$people->pt_name}}</h3>
                        <span>{{$people->pt_relation}}</span>
                    </div>
                @endif
            @endforeach

        </div>
    </div> <!-- end of content -->
</section> <!-- end of groomsmen-bridesmaids-->

<footer>
    <div class="row">
        <h2>{{setting('site.title')}}</h2>
        <span class="date">{{setting('site.event_date')}}</span>
    </div>

    <div class="row">
        <div class="container">
            <div class="col col-sm-6">
                <p>Copyright &copy; 2019 {{setting('site.title')}}. All Rights Reserved</p>
            </div>
            <div class="col col-sm-6">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer> <!-- end of footer -->
@endsection