@extends('layout')
@section('content')
<div id="cbp-so-scroller" class="cbp-so-scroller">
    <section class="sc-slider section relative no-padding">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active" id="item-1">
                </div>
                <div class="item" id="item-2">
                </div>
                <div class="item" id="item-3">
                </div>
            </div>
        </div>
        <div class="icon">
            <div class="ic-anhchi">
                <img src="/images/tim02.png" class="img-responsive">
            </div>
        </div>
    </section>
    <section class="profile section">
        <ul class="no-margin">
            <li class="groom ">
                <div class="groom-container clearfix relative">
                    <div class="pr-left pull-left col-md-4 clearfix no-padding">
                        <img src="/images/bg_01.jpg" class="img-responsive">
                    </div>
                    <div class="profile-content clearfix">
                        <div class="prf clearfix cbp-so-section">
                            <div class="profile-img pull-left clearfix cbp-so-side cbp-so-side-left">
                                <img src="/images/if1.jpg" class="img-responsive">
                            </div>
                            <div class="profile-text cbp-so-side cbp-so-side-right">
                                <h2>Michael Brewin</h2>
                                <p>I believe that imagination is stronger than knowledge. That myth is more potent than history. That dreams are more powerful than facts. That hope always triumphs over experience.</p>
                                <blockquote class="relative">
                                    <span>Love Quote:</span>
                                    <p class="blockquote-love">Sometimes the heart sees what is invisible to the eye.</p>
                                </blockquote>
                                <a href="#" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="groom reverse">
                <div class="groom-container clearfix">
                    <div class="profile-content clearfix">
                        <div class="prf clearfix cbp-so-section">
                            <div class="profile-img pull-right clearfix cbp-so-side cbp-so-side-left">
                                <img src="/images/if1.jpg" class="img-responsive">
                            </div>
                            <div class="profile-text cbp-so-side cbp-so-side-right">
                                <h2>Emily Daniels</h2>
                                <p>I believe that imagination is stronger than knowledge. That myth is more potent than history. That dreams are more powerful than facts. That hope always triumphs over experience. </p>
                                <blockquote class="relative">
                                    <span>Love Quote:</span>
                                    <p class="blockquote-love">Sometimes the heart sees what is invisible to the eye.</p>
                                </blockquote>
                                <a href="#" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-left pull-right col-md-4 clearfix no-padding">
                        <img src="/images/bg_01.jpg" class="img-responsive">
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <section class="event section">
        <div class="container">
            <div class="title">
                <h2 class="h2-title-sep">OUR SPECIAL EVENTS</h2>
            </div>
            <div class="content">
                <div class="row content-item relative">
                    <div class="col-sm-6 col-xs-12">
                        <div class="event-item">
                            <div class="event-item-img">
                                <img src="/images/bn01.jpg" class="img-responsive">
                            </div>
                            <div class="event-item-content">
                                <h2>THE FIRST STEP!</h2>
                                <div class="content-txt">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                </div>
                                <div class="event-date hidden-pc">
                                    <div class="event-time">January 14, 2016</div>
                                </div>
                            </div>
                            <span class="icon-top hidden-sp"></span>
                            <span class="icon-bottom hidden-sp"></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 event-date-wrap relative hidden-sp">
                        <div class="event-date">
                            <div class="event-time">January 14, 2016</div>
                        </div>
                    </div>
                </div>
                <div class="row content-item relative">
                    <div class="col-sm-6 col-xs-12 event-date-wrap event-date-wrap-alt relative hidden-sp">
                        <div class="event-date">
                            <div class="event-time">January 14, 2016</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="event-item">
                            <div class="event-item-img">
                                <img src="/images/bn01.jpg" class="img-responsive">
                            </div>
                            <div class="event-item-content">
                                <h2>THE FIRST STEP!</h2>
                                <div class="content-txt">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                </div>
                                <div class="event-date hidden-pc">
                                    <div class="event-time">January 14, 2016</div>
                                </div>
                            </div>
                            <span class="icon-top hidden-sp"></span>
                            <span class="icon-bottom hidden-sp"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="love-story section">
        <h2 class="h2-title-sep white "> LOVE STORY </h2>
        <div class="list-story container">
            <section class="slider">
                <div class="flexslider story-flex">
                    <ul class="slides cbp-so-section">
                        <li class="cbp-so-side cbp-so-side-bottom">
                            <div class="st-img">
                                <img src="/images/if1.jpg" class="img-responsive" />
                            </div>
                            <div class="st-content">
                                <p class="date">Nov<span>25</span>2017</p>
                                <p class="st-title">Happy Birtday</p>
                            </div>
                        </li>
                        <li class="cbp-so-side cbp-so-side-bottom">
                            <div class="st-img">
                                <img src="/images/if1.jpg" class="img-responsive" />
                            </div>
                            <div class="st-content">
                                <p class="date">Nov<span>25</span>2017</p>
                                <p class="st-title">Happy Birtday</p>
                            </div>
                        </li>
                        <li class="cbp-so-side cbp-so-side-bottom">
                            <div class="st-img">
                                <img src="/images/if1.jpg" class="img-responsive" />
                            </div>
                            <div class="st-content">
                                <p class="date">Nov<span>25</span>2017</p>
                                <p class="st-title">Happy Birtday</p>
                            </div>
                        </li>
                        <li class="cbp-so-side cbp-so-side-bottom">
                            <div class="st-img">
                                <img src="/images/if1.jpg" class="img-responsive" />
                            </div>
                            <div class="st-content">
                                <p class="date">Nov<span>25</span>2017</p>
                                <p class="st-title">Happy Birtday</p>
                            </div>
                        </li>
                    <!-- items mirrored twice, total of 12 -->
                    </ul>
                </div>
            </section>
        </div>
    </section>
    <section class="wedding section">
        <div class="container">
            <div class="title">
                <h2 class="h2-title-sep">WEDDING</h2>
            </div>
            <div>
                <div class="rows">
                    <div class="col-sm-6 wd-left">
                        <div class="wd-reminder">
                            <div class="wd-title">
                                <h3>MAIN CEREMONY</h3>
                            </div>
                            <div class="wd-content">
                                <ul class="no-margin">
                                    <li>
                                        <span class="glyphicon glyphicon-time"></span>
                                        <span>16:00 PM</span>
                                    </li>
                                    <li>
                                        <span class="glyphicon glyphicon-calendar"></span>
                                        <span>Saturday 12 - July 2016</span>
                                    </li>
                                    <li>
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                        <span>Amentel Avenue 343 - NY</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wd-reminder">
                            <div class="wd-title">
                                <h3>MAIN CEREMONY</h3>
                            </div>
                            <div class="wd-content">
                                <ul class="no-margin">
                                    <li>
                                        <span class="glyphicon glyphicon-time"></span>
                                        <span>16:00 PM</span>
                                    </li>
                                    <li>
                                        <span class="glyphicon glyphicon-calendar"></span>
                                        <span>Saturday 12 - July 2016</span>
                                    </li>
                                    <li>
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                        <span>Amentel Avenue 343 - NY</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sc-photo section">
        <div class="title">
            <h2 class="h2-title-sep">GALLERY</h2>
        </div>
        <div class="list-photo">
            <ul class="nav nav-tabs ul-tab" role="tablist">
                <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All Photo</a></li>
                <li role="presentation"><a href="#wedding" aria-controls="wedding" role="tab" data-toggle="tab">Wedding</a></li>
                <li role="presentation"><a href="#prewedding" aria-controls="prewedding" role="tab" data-toggle="tab">Pre-wedding</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="all">
                    <a href="/images/gallery/1b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/1s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/2b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/2s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/3b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/3s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/4b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/4s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/1b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/1s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/2b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/2s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/3b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/3s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/4b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/4s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/1b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/1s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/2b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/2s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/3b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/3s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/4b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/4s.jpg" alt="" class= "img-responsive" />
                    </a>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="wedding">
                    <a href="/images/gallery/1b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/1s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/2b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/2s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/1b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/1s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/2b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/2s.jpg" alt="" class= "img-responsive" />
                    </a>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="prewedding">
                    <a href="/images/gallery/3b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/3s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/4b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/4s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/3b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/3s.jpg" alt="" class= "img-responsive" />
                    </a>
                    <a href="/images/gallery/4b.jpg" data-fancybox="gallery">
                        <img src="/images/gallery/4s.jpg" alt="" class= "img-responsive" />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="congratulations section" >
        <div class="widget-text cbp-so-section">
            <h2 class="widget-title h2-title-sep">Congratulations</h2>
            <div class="textwidget cbp-so-side cbp-so-side-right">
                <div class="reg-form-wrap">
                    <div class="rfw-box">
                        <h2>Hãy gửi lời chúc!</h2>
                        <form>
                            <div class="form-group">
                                <input class="form-control" id="name" placeholder="Name*">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email*">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Congratulations*"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success">Send</button>
                            </div>
                        </form>
                        <div class="description">
                            <span>Thank You!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('style')
    <link rel="stylesheet" href="{{ elixir('css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/scrollEffect.css') }}">
@endsection
@section('script')
    <script src="/js/jquery.flexslider-min.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="/js/jquery.classie.js"></script>
    <script src="/js/jquery.cbpScroller.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#myCarousel').carousel({
               interval: 2000
            });

            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: false,
                itemWidth: 360,
                itemMargin: 25,
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });

            $("[data-fancybox]").fancybox();

            new cbpScroller(document.getElementById( 'cbp-so-scroller'));
        });
    </script>
@endsection