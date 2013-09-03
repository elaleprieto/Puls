<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>Amazing Slider</title>
    
    <!-- Insert to your webpage before the </head> -->
    <!--<script src="sliderengine/jquery.js"></script>-->
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
    
</head>
<body>
<div style="margin:30px auto;max-width:640px;">
    
    <!-- Insert to your webpage where you want to display the slider -->
    <div id="amazingslider-1" style="display:block;position:relative;margin:16px auto 56px;">
        <ul class="amazingslider-slides" style="display:none;">
            <li><a href="images/box/at-lightbox.jpg" class="html5lightbox"><img src="images/at.png" alt="Аттестат. Российская гильдия риэлторов" /></a></li>
            <li><a href="images/box/at2-lightbox.jpg" class="html5lightbox"><img data-src="images/at2.png" alt="Аттестат. Российская гильдия риэлторов" /></a></li>
            <li><img data-src="images/svid.png" alt="Свидельство. Высшая школа недвижимости" /></li>
            <li><img data-src="images/svid2.png" alt="Свидельство. Высшая школа недвижимости" /></li>
            <li><a href="images/box/sert(2)-lightbox.jpg" class="html5lightbox"><img data-src="images/sert(2).png" alt="Сертификат. ОАО 'АТБ'" /></a></li>
            <li><a href="images/box/cert2-lightbox.jpg" class="html5lightbox"><img data-src="images/cert2.png" alt="Сертификат. Страховое ОАО 'ВСК'" /></a></li>
            <li><a href="images/box/cert3-lightbox.jpg" class="html5lightbox"><img data-src="images/cert3.png" alt="Сертификат. Программа повышения квалификации агентов и брокеров" /></a></li>
            <li><a href="images/box/cert4-lightbox.jpg" class="html5lightbox"><img data-src="images/cert4.png" alt="Сертификат. семинар-тренинг 'Качественный сервис'" /></a></li>
            <li><a href="images/box/certif-lightbox.jpg" class="html5lightbox"><img data-src="images/certif.png" alt="Сертификат. Тренинг продаж" /></a></li>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none;">
            <li><img src="images/tumb/at-tn.jpg" /></li>
            <li><img src="images/tumb/at2-tn.jpg" /></li>
            <li><img src="images/tumb/svid-tn.jpg" /></li>
            <li><img src="images/tumb/svid2-tn.jpg" /></li>
            <li><img src="images/tumb/sert(2)-tn.jpg" /></li>
            <li><img src="images/tumb/cert2-tn.jpg" /></li>
            <li><img src="images/tumb/cert3-tn.jpg" /></li>
            <li><img src="images/tumb/cert4-tn.jpg" /></li>
            <li><img src="images/tumb/certif-tn.jpg" /></li>
        </ul>
        <div class="amazingslider-engine" style="display:none;"><<a href="http://amazingslider.com">jQuery Image Slideshow</a></div>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery('div.amazingslider-watermark-0').remove();
            });
        </script>
    </div>
    <!-- End of body section HTML codes -->
    
</div>
</body>
</html>