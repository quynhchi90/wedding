@extends('layout')
@section('content')
<section class="sc-slider section relative no-padding">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active" id="item-1">
                <!-- <img class="d-block img-fluid img-slider" src="images/1.jpeg" alt="First slide"> -->
            </div>
            <div class="item" id="item-2">
                <!-- <img class="d-block img-fluid img-slider" src="images/1.jpeg" alt="Second slide"> -->
            </div>
            <div class="item" id="item-3">
                <!-- <img class="d-block img-fluid img-slider" src="images/1.jpeg" alt="Third slide"> -->
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
        <li class="groom">
            <div class="groom-container clearfix relative">
                <div class="pr-left pull-left col-md-4 clearfix no-padding">
                    <img src="/images/bg_01.jpg" class="img-responsive">
                </div>
                <div class="profile-content clearfix">
                    <div class="prf clearfix">
                        <div class="profile-img pull-left clearfix">
                            <img src="/images/if1.jpg" class="img-responsive">
                        </div>
                        <div class="profile-text">
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
                    <div class="prf clearfix">
                        <div class="profile-img pull-right clearfix">
                            <img src="/images/if1.jpg" class="img-responsive">
                        </div>
                        <div class="profile-text">
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
                <div class="col-sm-6">
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
                        </div>
                        <span class="icon-top"></span>
                        <span class="icon-bottom"></span>
                    </div>
                </div>
                <div class="col-sm-6 event-date-wrap relative">
                    <div class="event-date">
                        <div class="event-time">January 14, 2016</div>
                    </div>
                </div>
            </div>
            <div class="row content-item relative">
                <div class="col-sm-6 event-date-wrap event-date-wrap-alt relative">
                    <div class="event-date">
                        <div class="event-time">January 14, 2016</div>
                    </div>
                </div>
                <div class="col-sm-6">
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
                        </div>
                        <span class="icon-top"></span>
                        <span class="icon-bottom"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="love-story section">
    <h2> LOVE STORY </h2>
    <div class="list-story container">
        <section class="slider">
            <div class="flexslider story-flex">
                <ul class="slides">
                    <li>
                        <div class="st-img">
                            <img src="/images/if1.jpg" class="img-responsive" />
                        </div>
                        <div class="st-content">
                            <p class="date">Nov<span>25</span>2017</p>
                            <p class="st-title">Happy Birtday</p>
                        </div>
                    </li>
                    <li>
                        <div class="st-img">
                            <img src="/images/if1.jpg" class="img-responsive" />
                        </div>
                        <div class="st-content">
                            <p class="date">Nov<span>25</span>2017</p>
                            <p class="st-title">Happy Birtday</p>
                        </div>
                    </li>
                    <li>
                        <div class="st-img">
                            <img src="/images/if1.jpg" class="img-responsive" />
                        </div>
                        <div class="st-content">
                            <p class="date">Nov<span>25</span>2017</p>
                            <p class="st-title">Happy Birtday</p>
                        </div>
                    </li>
                    <li>
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
<section class="congratulations section" >
    <div class="widget-text">
        <h2 class="widget-title h2-title-sep">Congratulations</h2>
        <div class="textwidget">
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
@endsection
@section('style')
    <link rel="stylesheet" href="{{ elixir('css/flexslider.css') }}">
@endsection
@section('script')
    <script src="/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#myCarousel').carousel({
               interval: 2000
            });

            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: true,
                itemWidth: 360,
                itemMargin: 25,
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
@endsection