<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <title>SMKN 1 Baradatu</title>
    
    @include ('ground.top')
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-static-top hidden-xs">
                <div class="container">
                    <p class="navbar-text navbar-left"><a href="#" class="navbar-link">English</a></p>
                    <p class="navbar-text navbar-left"><a href="#" class="navbar-link">Sitemap</a></p>
                    <p class="navbar-text navbar-left"><a href="#" class="navbar-link">Contact</a></p>
                    <p class="navbar-text navbar-left"><a href="#" class="navbar-link">Mail</a></p>
                    <p class="navbar-text navbar-right"><a href="{!! route('login.index'); !!}" class="navbar-link">Login</a></p>
                </div>
            </nav>
            <div class="panel-bawah hidden-xs">
                <div class="logos animated zoomIn hidden-xs"><img src="{{URL::asset('/img/logo3.png')}}"></div>
                <div class="container">
                        <nav class="tengah-nav" style="display: block;">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><b>HOME</b></a></li>
                                <li><a href="#"><b>PROFIL</b></a></li>
                                <li><a href="#"><b>JURUSAN</b></a></li>
                                <li><a href="#"><b>SISWA</b></a></li>
                                <li><a href="#"><b>GURU</b></a></li>
                                <li><a href="#"><b>PENDAFTARAN</b></a></li>
                            </ul>
                        </nav>
                </div>
            </div>
            <div class="wrap1">
            <div class="owl-carousel owl-theme pica">
                <div><img src="tron/smk-1.jpg"></div>
                <div><img src="tron/smk-2.jpg"></div>
            </div>  
        </header>

        <div class="bagian-tengah">
            <div class="container">
                
            </div>
        </div>


@include ('ground.bot')
<script type="text/javascript">
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    animateOut: 'slideOutLeft',
    animateIn: 'slideInRight',
    loop:true,
    items:1,
    dots:false,
    autoplay:true,
    autoPlaySpeed: 5000,
    autoPlayTimeout: 5000
    });
});     
</script>


    </body>
</html>
