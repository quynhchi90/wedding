<div class="slider">
    <!-- <div class='snow-container'>
        <div class='snow foreground'></div>
        <div class='snow foreground layered'></div>
        <div class='snow middleground'></div>
        <div class='snow middleground layered'></div>
        <div class='snow background'></div>
        <div class='snow background layered'></div>
    </div> -->
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
</div>
@section('style')
<!-- <style type="text/css">
    .snow-container{position:fixed;width:100%;max-width:100%;z-index:99999;pointer-events:none;overflow:hidden;top:0;height:100%}
    .snow{display:block;position:absolute;z-index:2;top:0;right:0;bottom:0;left:0;pointer-events:none;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);-webkit-animation:snow linear infinite;animation:snow linear infinite}
    .snow.foreground{background-image:url("https://dl6rt3mwcjzxg.cloudfront.net/assets/snow/snow-large-075d267ecbc42e3564c8ed43516dd557.png");-webkit-animation-duration:15s;animation-duration:10s}
    .snow.foreground.layered{-webkit-animation-delay:7.5s;animation-delay:7.5s}
    .snow.middleground{background-image:url(https://dl6rt3mwcjzxg.cloudfront.net/assets/snow/snow-medium-0b8a5e0732315b68e1f54185be7a1ad9.png);-webkit-animation-duration:20s;animation-duration:15s}
    .snow.middleground.layered{-webkit-animation-delay:10s;animation-delay:10s}
    .snow.background{background-image:url(https://dl6rt3mwcjzxg.cloudfront.net/assets/snow/snow-small-1ecd03b1fce08c24e064ff8c0a72c519.png);-webkit-animation-duration:25s;animation-duration:20s}
    .snow.background.layered{-webkit-animation-delay:12.5s;animation-delay:12.5s}
    @-webkit-keyframes snow{0%{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{-webkit-transform:translate3d(5%,100%,0);transform:translate3d(5%,100%,0)}}
    @keyframes snow{0%{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{-webkit-transform:translate3d(5%,100%,0);transform:translate3d(5%,100%,0)}}
</style> -->
@endsection
@section('script')
<script type="text/javascript">
$(function () {
    $('#myCarousel').carousel({
       interval: 2000
    })
});
</script>
@endsection