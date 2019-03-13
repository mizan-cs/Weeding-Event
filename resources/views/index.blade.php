@extends('layouts.template')

@section('content')
<header id="home">
    @include('sections.nav')
    @include('sections.slider')
</header>  <!-- end of header -->

@include('sections.countdown')

<section class="announciation section-padding" id="couple">
    <div class="container">
        <div class="row section-heading">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2>Wedding Announcement</h2>
                <p>Curabitur ac lacus arcu. Sed vehicula varius lectus auctor viverra. Nulla vehicula nibh vel ante commodo feugiat.</p>
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
                        <h3>{{setting('couple.tgn')}}</h3>
                        <h4>The Groom</h4>
                        <p>{{setting('couple.atg')}}</p>

                    </div>
                </div>
                <div class="col col-sm-6 col-md-6 col-lg-5 col-lg-offset-2">
                    <div class="thumbnail">
                        <div class="frame">
                            <img src="images/home/announcement/frame.png" alt="Frame">
                            <img src="images/home/announcement/hover-frame.png" alt="Hover Frame" class="hover-frame">
                            <img src="{{'/storage/'.setting('couple.bride')}}" alt="Juli">

                        </div>
                        <h3>{{setting('couple.tbn')}}</h3>
                        <h4>The Bride</h4>
                        <p>{{setting('couple.atb')}}</p>
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
            <h2>Happy Couples Need Parallax Elements</h2>
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
                <h2>Our Love Story</h2>
                <p>Curabitur ac lacus arcu. Sed vehicula varius lectus auctor viverra. Nulla vehicula nibh vel ante commodo feugiat.</p>
            </div>
        </div>

        <div class="row content">
            <div class="row">
                <div class="col col-xs-12 col-md-10 col-md-offset-1 col-sm-12 col-lg-8 col-lg-offset-2">
                    <div class="col col-xs-8 col-sm-8">
                        <h3>14 April 2014</h3>
                        <h4>We Have Met Each Other</h4>
                        <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                    <div class="col col-xs-4 col-sm-4">
                        <div class="frame">
                            <img src="images/home/love-story/img-frame-right.png" alt="Frame">
                            <img src="images/home/love-story/img-1.jpg" alt="Love picture">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row middle-row">
                <div class="col col-xs-12 col-md-10 col-md-offset-1 col-sm-12 col-lg-8 col-lg-offset-2 middle">
                    <div class="col col-xs-4 col-sm-4">
                        <div class="frame padding-left">
                            <img src="images/home/love-story/img-frame-left.png" alt="Frame">
                            <img src="images/home/love-story/img-2.jpg" alt="Love picture">
                        </div>
                    </div>
                    <div class="col col-xs-8 col-sm-8">
                        <h3>14 April 2015</h3>
                        <h4>Our First Beautiful Date</h4>
                        <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12 col-md-10 col-md-offset-1 col-sm-12 col-lg-8 col-lg-offset-2">
                    <div class="col col-xs-8 col-sm-8">
                        <h3>14 April 2016</h3>
                        <h4>He Proposed Me</h4>
                        <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                    <div class="col col-xs-4 col-sm-4">
                        <div class="frame">
                            <img src="images/home/love-story/img-frame-right.png" alt="Frame">
                            <img src="images/home/love-story/img-3.jpg" alt="Love picture">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of content -->
    </div> <!-- end of container -->
</section> <!-- end of love-story -->

<section class="event section-padding" id="event">
    <div class="container">
        <div class="row section-heading">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2>The Wedding Events</h2>
                <p>Curabitur ac lacus arcu. Sed vehicula varius lectus auctor viverra. Nulla vehicula nibh vel ante commodo feugiat.</p>
            </div>
        </div>

        <div class="content">
            <div class="row">
                <div class="col col-md-5">
                    <img src="images/home/event/img-1.jpg" alt="Event Picture" class="img img-responsive">
                </div>
                <div class="col col-md-7">
                    <h3>The Celebration</h3>
                    <p><span><i class="fa fa-calendar"></i>14 April 2016,</span> <span><i class="fa fa-clock-o"></i>3pm - 6pm, </span> <span><i class="fa fa-map-marker"></i>121 King Street, Melbourne</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis impedit expedita, deleniti culpa nam fuga neque ab similique corporis. Sed eligendi perspiciatis error ipsam culpa, iusto dolor cum consectetur nihil qui ab obcaecati omnis odit veniam laboriosam esse quas, repellendus magnam fugit dignissimos Culpa, velit consectetur adipisicing elit.</p>
                    <a href="#">Read more</a>
                </div>
            </div>

            <div class="row middle">
                <div class="col col-md-5 hidden-lg hidden-md">
                    <img src="images/home/event/img-2.jpg" alt="Event Picture" class="img img-responsive">
                </div>
                <div class="col col-md-7">
                    <h3>Wedding Ceremony</h3>
                    <p><span><i class="fa fa-calendar"></i>15 April 2016,</span> <span><i class="fa fa-clock-o"></i>3pm - 6pm, </span> <span><i class="fa fa-map-marker"></i>121 King Street, Melbourne</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis impedit expedita, deleniti culpa nam fuga neque ab similique corporis. Sed eligendi perspiciatis error ipsam culpa, iusto dolor cum consectetur nihil qui ab obcaecati omnis odit veniam laboriosam esse quas, repellendus magnam fugit dignissimos Culpa, velit consectetur adipisicing elit.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="col col-md-5 hidden-sm hidden-xs">
                    <img src="images/home/event/img-2.jpg" alt="Event Picture" class="img img-responsive">
                </div>
            </div>

            <div class="row">
                <div class="col col-md-5">
                    <img src="images/home/event/img-3.jpg" alt="Event Picture" class="img img-responsive">
                </div>
                <div class="col col-md-7">
                    <h3>The Greeting</h3>
                    <p><span><i class="fa fa-calendar"></i>16 April 2016,</span> <span><i class="fa fa-clock-o"></i>3pm - 6pm, </span> <span><i class="fa fa-map-marker"></i>121 King Street, Melbourne</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis impedit expedita, deleniti culpa nam fuga neque ab similique corporis. Sed eligendi perspiciatis error ipsam culpa, iusto dolor cum consectetur nihil qui ab obcaecati omnis odit veniam laboriosam esse quas, repellendus magnam fugit dignissimos Culpa, velit consectetur adipisicing elit.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div> <!-- end of content -->
    </div> <!-- end of container -->
</section> <!-- end of event-->

<section class="gallery section-padding" id="gallery">
    <div class="container">
        <div class="row section-heading">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2>Photo Album</h2>
                <p>Curabitur ac lacus arcu. Sed vehicula varius lectus auctor viverra. Nulla vehicula nibh vel ante commodo feugiat.</p>
            </div>
        </div>
    </div> <!-- end of container -->

    <div class="row content">
        <ul id="filter">
            <li><a href="#" class="active" data-group="all">All</a></li>
            <li><a href="#" data-group="engagement">Engagement</a></li>
            <li><a href="#" data-group="wedding">Wedding</a></li>
            <li><a href="#" data-group="honeymoon">Honeymoon</a></li>
        </ul>

        <div class="row" id="shuffle-wrapper">
            <div class="col col-xs-6 col-sm-3 item" data-groups='["all",  "engagement", "wedding"]'>
                <a href="images/home/gallery/img-1.jpg" data-lightbox-gallery="gallery1">
                    <div class="overlay"></div>
                    <img src="images/home/gallery/img-1.jpg" alt="Gallery image" class="img img-responsive">
                </a>
            </div>
            <div class="col col-xs-6 col-sm-3 item" data-groups='["all", "wedding"]'>
                <a href="images/home/gallery/img-2.jpg" data-lightbox-gallery="gallery1">
                    <div class="overlay"></div>
                    <img src="images/home/gallery/img-2.jpg" alt="Gallery image" class="img img-responsive">
                </a>
            </div>
            <div class="col col-xs-6 col-sm-3 item" data-groups='["all",  "honeymoon"]'>
                <a href="images/home/gallery/img-3.jpg" data-lightbox-gallery="gallery1">
                    <div class="overlay"></div>
                    <img src="images/home/gallery/img-3.jpg" alt="Gallery image" class="img img-responsive">
                </a>
            </div>
            <div class="col col-xs-6 col-sm-3 item" data-groups='["all",  "engagement", "wedding",  "honeymoon"]'>
                <a href="images/home/gallery/img-4.jpg" data-lightbox-gallery="gallery1">
                    <div class="overlay"></div>
                    <img src="images/home/gallery/img-4.jpg" alt="Gallery image" class="img img-responsive">
                </a>
            </div>
            <div class="col col-xs-6 col-sm-3 item" data-groups='["all", "wedding"]'>
                <a href="images/home/gallery/img-5.jpg" data-lightbox-gallery="gallery1">
                    <div class="overlay"></div>
                    <img src="images/home/gallery/img-5.jpg" alt="Gallery image" class="img img-responsive">
                </a>
            </div>
            <div class="col col-xs-6 col-sm-3 item" data-groups='["all", "honeymoon"]'>
                <a href="images/home/gallery/img-6.jpg" data-lightbox-gallery="gallery1">
                    <div class="overlay"></div>
                    <img src="images/home/gallery/img-6.jpg" alt="Gallery image" class="img img-responsive">
                </a>
            </div>
            <div class="col col-xs-6 col-sm-3 item" data-groups='["all",  "engagement"]'>
                <a href="images/home/gallery/img-7.jpg" data-lightbox-gallery="gallery1">
                    <div class="overlay"></div>
                    <img src="images/home/gallery/img-7.jpg" alt="Gallery image" class="img img-responsive">
                </a>
            </div>
            <div class="col col-xs-6 col-sm-3 item" data-groups='["all",  "honeymoon", "wedding"]'>
                <a href="images/home/gallery/img-8.jpg" data-lightbox-gallery="gallery1">
                    <div class="overlay"></div>
                    <img src="images/home/gallery/img-8.jpg" alt="Gallery image" class="img img-responsive">
                </a>
            </div>
        </div>
    </div> <!-- end of content -->
</section> <!-- end of gallery-->

<section class="groomsmen-bridesmaids section-padding" id="people">
    <div class="container">
        <div class="row section-heading">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2>Groomsmen &amp; Bridesmaids</h2>
                <p>Curabitur ac lacus arcu. Sed vehicula varius lectus auctor viverra. Nulla vehicula nibh vel ante commodo feugiat.</p>
            </div>
        </div>
    </div> <!-- end of container -->

    <div class="row content">
        <div class="container">
            <div class="col col-xs-6 col-sm-3">
                <div class="frame">
                    <a href="#">
                        <img src="images/home/groomsmen-bridesmaids/img-frame.png" alt="Frame" class="img img-responsive hidden-xs">
                        <img src="images/home/groomsmen-bridesmaids/img-frame-sm.png" alt="Frame" class="img img-responsive hidden-lg hidden-md hidden-sm show-xs">
                        <img src="images/home/groomsmen-bridesmaids/img-1.jpg" alt="Image" class="img img-responsive">
                    </a>
                    <div class="overlay">
                        <div><span>Grooms</span></div>
                    </div>
                </div>
                <h3>Edward Prince</h3>
                <span>Brother</span>
            </div>
            <div class="col col-xs-6 col-sm-3">
                <div class="frame">
                    <a href="#">
                        <img src="images/home/groomsmen-bridesmaids/img-frame.png" alt="Frame" class="img img-responsive hidden-xs">
                        <img src="images/home/groomsmen-bridesmaids/img-frame-sm.png" alt="Frame" class="img img-responsive hidden-lg hidden-md hidden-sm show-xs">
                        <img src="images/home/groomsmen-bridesmaids/img-2.jpg" alt="Image" class="img img-responsive">
                    </a>
                    <div class="overlay">
                        <div><span>Grooms</span></div>
                    </div>
                </div>
                <h3>Darien Hari</h3>
                <span>Friend</span>
            </div>
            <div class="col col-xs-6 col-sm-3">
                <div class="frame">
                    <a href="#">
                        <img src="images/home/groomsmen-bridesmaids/img-frame.png" alt="Frame" class="img img-responsive hidden-xs">
                        <img src="images/home/groomsmen-bridesmaids/img-frame-sm.png" alt="Frame" class="img img-responsive hidden-lg hidden-md hidden-sm show-xs">
                        <img src="images/home/groomsmen-bridesmaids/img-3.jpg" alt="Image" class="img img-responsive">
                    </a>
                    <div class="overlay">
                        <div><span>Bridesmaids</span></div>
                    </div>
                </div>
                <h3>Alice Per</h3>
                <span>Friend</span>
            </div>
            <div class="col col-xs-6 col-sm-3">
                <div class="frame">
                    <a href="#">
                        <img src="images/home/groomsmen-bridesmaids/img-frame.png" alt="Frame" class="img img-responsive hidden-xs">
                        <img src="images/home/groomsmen-bridesmaids/img-frame-sm.png" alt="Frame" class="img img-responsive hidden-lg hidden-md hidden-sm show-xs">
                        <img src="images/home/groomsmen-bridesmaids/img-4.jpg" alt="Image" class="img img-responsive">
                    </a>
                    <div class="overlay">
                        <div><span>Bridesmaids</span></div>
                    </div>
                </div>
                <h3>Alice Lues</h3>
                <span>sister</span>
            </div>
        </div>
    </div> <!-- end of content -->
</section> <!-- end of groomsmen-bridesmaids-->

<section class="journal section-padding">
    <div class="container">
        <div class="row section-heading">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2>From Our Journal</h2>
                <p>Curabitur ac lacus arcu. Sed vehicula varius lectus auctor viverra. Nulla vehicula nibh vel ante commodo feugiat.</p>
            </div>
        </div>

        <div class="row content">
            <div class="col col-sm-4">
                <div class="frame">
                    <a href="#">
                        <img src="images/home/journal/frame.png" alt="Frame">
                        <img src="images/home/journal/img-1.jpg" alt="Journal">
                    </a>
                    <div class="overlay">
                        <div><span>Wedding Preparations</span></div>
                    </div>
                </div>
            </div>
            <div class="col col-sm-4">
                <div class="frame">
                    <a href="#">
                        <img src="images/home/journal/frame.png" alt="Frame">
                        <img src="images/home/journal/img-2.jpg" alt="Journal">
                    </a>
                    <div class="overlay">
                        <div><span>Wedding Preparations</span></div>
                    </div>
                </div>
            </div>
            <div class="col col-sm-4">
                <div class="frame">
                    <a href="#">
                        <img src="images/home/journal/frame.png" alt="Frame">
                        <img src="images/home/journal/img-3.jpg" alt="Journal">
                    </a>
                    <div class="overlay">
                        <div><span>Wedding Preparations</span></div>
                    </div>
                </div>
            </div>

            <div class="link">
                <a href="#" class="btn btn-default">Load More</a>
                <a href="#" class="btn btn-default">See Journal</a>
            </div>
        </div> <!-- end of content -->
    </div> <!-- end of container -->
</section> <!-- end of journal-->

<section class="gift-registration section-padding" id="gift">
    <div class="overlay"></div>
    <div class="container">
        <div class="row section-heading">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2>Gift Registration</h2>
                <p>Curabitur ac lacus arcu. Sed vehicula varius lectus auctor viverra. Nulla vehicula nibh vel ante commodo feugiat.</p>
            </div>
        </div>

        <div class="row content gift-slider">
            <a href="#"><img src="images/home/gift/img-1.png" alt="Gift Registry" class="img img-responsive"></a>
            <a href="#"><img src="images/home/gift/img-2.png" alt="Gift Registry" class="img img-responsive"></a>
            <a href="#"><img src="images/home/gift/img-3.png" alt="Gift Registry" class="img img-responsive"></a>
            <a href="#"><img src="images/home/gift/img-1.png" alt="Gift Registry" class="img img-responsive"></a>
            <a href="#"><img src="images/home/gift/img-2.png" alt="Gift Registry" class="img img-responsive"></a>
        </div> <!-- end of content -->
    </div> <!-- end of container -->
</section> <!-- end of gift-registration-->

<section class="rsvp section-padding" id="rsvp">
    <div class="overlay"></div>
    <div class="container">
        <div class="row section-heading">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2>Submit Your Rsvp</h2>
                <p>Curabitur ac lacus arcu. Sed vehicula varius lectus auctor viverra. Nulla vehicula nibh vel ante commodo feugiat.</p>
            </div>
        </div>

        <div class="row content">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <form class="form-inline">
                    <div class="overlay"></div>
                    <div class="form-group col col-sm-6">
                        <label class="sr-only" for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group col col-sm-6">
                        <label class="sr-only" for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group col col-sm-6">
                        <label class="sr-only" for="guste">Number of Guste</label>
                        <input type="text" class="form-control" id="guste" placeholder="Number of Guste" required>
                    </div>
                    <div class="form-group col col-sm-6">
                        <select class="form-control">
                            <option disabled selected>Meal Choice</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group col col-sm-12">
                        <textarea id="message" placeholder="Notes" required></textarea>
                    </div>
                    <div class="form-group submit col-sm-12">
                        <input class="btn btn-default" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div> <!-- end of content -->
    </div> <!-- end of container -->
</section> <!-- end of rsvp -->

<footer>
    <div class="row">
        <h2>Romeo &amp; Juleit</h2>
        <span class="date">24 April 2016 </span>
    </div>

    <div class="row">
        <div class="container">
            <div class="col col-sm-6">
                <p>Copyright &copy; 2015 themexriver. All Rights Reserved</p>
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