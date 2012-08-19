<?php
	if ( !preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"]) ) {
		header('Content-type: text/html; charset=utf-8');
	} else {
		header('Content-type: text/html; charset=windows-1251');
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" dir="ltr" >

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
        <!--<base href="http://coreatrade.com" />-->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Корея Трейд - лучшие автобусы из Кореи</title>
        <link href="images/1.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
        <link rel="stylesheet" href="css/system.css" type="text/css" />
        <link rel="stylesheet" href="css/general.css" type="text/css" />
        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link rel="stylesheet" href="css/typography.css" type="text/css" />
        <link rel="stylesheet" href="css/forms.css" type="text/css" />
        <link rel="stylesheet" href="css/modules.css" type="text/css" />
        <link rel="stylesheet" href="css/joomla.css" type="text/css" />
        <link rel="stylesheet" href="css/layout.css" type="text/css" />
        <link rel="stylesheet" href="css/mod_iceslideshow/default/assets/style.css" type="text/css" />
        <link rel="stylesheet" href="css/template_languages.css" type="text/css" />
        <link rel="stylesheet" href="css/mod_icemegamenu/css/default_icemegamenu.css" type="text/css" />
     <link rel="stylesheet" href="css/costum.css" type="text/css" />
        <link rel="stylesheet" href="css/expauto/assets/css/expautospro.css" type="text/css" />
        <link rel="stylesheet" href="css/expauto/skins/explist/default/css/default.css" type="text/css" />
        <link rel="stylesheet" href="css/expauto/mod_expautospro_mortgage.css" type="text/css" />
        <link rel="stylesheet" href="css/expauto/mod_expautospro_stats.css" type="text/css" />
        <link rel="stylesheet" href="css/expauto/mod_expautospro_categories.css" type="text/css" />
        <link rel="stylesheet" href="css/expauto/mod_expautospro_listfilter.css" type="text/css" />
        <link rel="stylesheet" href="css/expauto/mod_expautospro_keyword.css" type="text/css" />

        <script src="js/mootools-core.js" type="text/javascript"></script>
        <script src="js/core.js" type="text/javascript"></script>
        <script src="js/caption.js" type="text/javascript"></script>
        <script src="js/mootools-more.js" type="text/javascript"></script>
        <script src="js/iceslideshow.js" type="text/javascript"></script>
        <script src="js/icemegamenu.js" type="text/javascript"></script>
        <script src="js/common.js" type="text/javascript"></script>
     <script src="js/icecarousel.js" type="text/javascript"></script>
        <script src="css/expauto/assets/js/ajaxrequest.js" type="text/javascript"></script>
        <script src="css/expauto/assets/js/ajaxchained.js" type="text/javascript"></script>
        <script src="css/expauto/assets/js/expsearchchained.js" type="text/javascript"></script>
        <script src="css/expauto/assets/js/expsearchtoggle.js" type="text/javascript"></script>
        
        <script src="js/jquery-1.7.2.js" type="text/javascript"></script>
        <script type="text/javascript">
             var $j = jQuery.noConflict();
        </script>
        <script src="js/jquery.jgfeed.js" type="text/javascript"></script>
        <script src="js/dproc.js" type="text/javascript"></script>

        <script type="text/javascript">
            window.addEvent('load', function () {
                new JCaption('img.caption');
            });
            window.addEvent('domready', function () {
                $$('.hasTip').each(function (el) {
                    var title = el.get('title');
                    if (title) {
                        var parts = title.split('::', 2);
                        el.store('tip:title', parts[0]);
                        el.store('tip:text', parts[1]);
                    }
                });
                var JTooltips = new Tips($$('.hasTip'), { maxTitleChars: 50, fixed: false });
            });
            window.addEvent("load", function () { if ($('item-127') != null) $('item-127').setStyle('display', 'none') });
            window.addEvent("load", function () { if ($('item-147') != null) $('item-147').setStyle('display', 'none') });
        </script>
        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        <script src="js/widget_2.js"></script>
        <style type="text/css" media="screen">
            /* Select the style */
            /*\*/@import url("css/style1.css");
            /**/
            /* Right Column Parameters */
            #outer-column-container
            {
                border-right-width: 220px;
            }
            #right-column
            {
                margin-right: -220px;
                width: 220px;
            }
            #middle-column .inside
            {
                padding-right: 15px;
            }
            .mark_show
            {
            	width: 8%;
            }
            .mark_show img
            {
            	width: 60px;
            	height: 60px;
            }
        </style>

	<!-- Show/Hide-->
	<script type="text/javascript">
	    var itPage=1;
            $j(document).ready( function() {
                $j("#Page_" + itPage).css('display', "inline");
            });

	    function showInfo(id) {
  	       $j("#Page_" + itPage).css('display', "none");
	        $j("#Page_" + id).css('display', "inline");
	    }
	</script>
        
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

        <!--[if lte IE 8]>
            <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->

        <!--[if lte IE 9]>
            <style type="text/css" media="screen">
                #left-column  .col-module h3.mod-title span:after {
                border-width: 0.82em;
            </style>	
        <![endif]-->

    </head>

    <body class="">

    <!-- Copiny (coreatrade.copiny.com) -->
    <script type="text/javascript" charset="utf-8">
        var proto = (document.location.protocol == 'https:') ? 'https:' : 'http:';
        var host = proto + '//widget.copiny.com';
        document.write(unescape("%3Cscript src='" + host + "/static/js/widget.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript" charset="utf-8">
        var copinyWidgetOptions = {
            position: 'left',
            hostcommunity: 'http://coreatrade.copiny.com',
            newwindow: '0',
            type: 'question',
            color: '#ff8400',
            border: '#ffffff',
            round: '1',
            title: "\u041e\u0431\u0440\u0430\u0442\u043d\u0430\u044f \u0441\u0432\u044f\u0437\u044c",
            cache: "9ca936d041c7637244c3fb8ef4a8ea6c\/9ca936d041c7637244c3fb8ef4a8ea6c\/ejOwVXUxULV0BZFOhqouhqoWBmC2AZhtBGa7IIm4aYMpQ7CQEUQIzDYHs50B",
            community: 5240
        };
        initCopinyWidget(copinyWidgetOptions);
        CopinyWidget.showTab();
    </script>
<!-- Copiny (coreatrade.copiny.com) -->

    <!-- Accessibility -->
        <ol id="accessibility">
           <li><a href="#nav-wrapper">Skip to Menu</a></li>
           <li><a href="#content">Skip to Content</a></li>
           <li><a href="#footer" >Skip to Footer</a></li>
        </ol><!-- Accessibility -->

        <!-- Header -->	
        <div id="header">
            <div id="header_inside" class="clearfix">
                <div class="wrapper">
                    <div id="logo">
                        <p>
                            <a href="/">
                                <img src="images/logo.png" alt="Корея Трейд - автомобили, спецтехника, автобусы из Кореи!!!" /></a></p>
                    </div>
                    <div id="mainmenu">
                        <div class="icemegamenu">
                            <ul id="icemegamenu">
                                <li id="iceMenu_1000" class="iceMenuLiLevel_1">
                                    <a href="/" class=" iceMenuTitle">
                                        <span class="icemega_title icemega_nosubtitle">НОВОСТИ</span>
                                    </a>
                                </li>
                                <li id="iceMenu_2000" class="iceMenuLiLevel_1 parent">
                                    <a href="?page=about" class=" iceMenuTitle">
                                        <span class="icemega_title">О компании</span>
                                        <span class="icemega_desc">Свяжитесь с нами</span>
                                    </a>
                                </li>
                                <li id="iceMenu_3000" class="iceMenuLiLevel_1 parent"><a class=" iceMenuTitle"><span
                                    class="icemega_title icemega_nosubtitle">Автомобили</span></a>
                                    <ul class="icesubMenu sub_level_1" style="width: 560px">
                                        <li>
                                            <div style="float: left; width: 240px" class="iceCols">
                                                <ul>
                                                    <li id="iceMenu_3101" class="iceMenuLiLevel_2">
                                                        <a href="javascript: getByType(0)" class=" iceMenuTitle" style="position:relative">
															<span class="icemega_title icemega_nosubtitle">KIA</span>
                                                        </a>
                                                    </li>
                                                    <li id="iceMenu_3202" class="iceMenuLiLevel_2">
                                                        <a href="javascript: getByType(1)" class=" iceMenuTitle" style="position:relative">
															<span class="icemega_title icemega_nosubtitle">Hyundai</span>
                                                        </a>
                                                    </li>
                                                    <li id="iceMenu_3300" class="iceMenuLiLevel_2 parent">
                                                        <a class=" iceMenuTitle">
                                                            <span class="icemega_title icemega_nosubtitle">Грузовые</span>
                                                        </a>
                                                        <ul class="icesubMenu sub_level_2" style="width: 280px">
                                                            <li>
                                                                <div style="float: left; width: 280px" class="iceCols">
                                                                    <ul>
                                                                        <li id="iceMenu_3303" class="iceMenuLiLevel_3">
                                                                            <a href="javascript: getByType(2)" class=" iceMenuTitle">
                                                                                <span class="icemega_title icemega_nosubtitle">Малогрузные</span>
                                                                            </a>
                                                                        </li>
                                                                        <li id="iceMenu_3304" class="iceMenuLiLevel_3">
                                                                            <a href="javascript: getByType(3)" class=" iceMenuTitle">
                                                                                <span class="icemega_title icemega_nosubtitle">Большегрузные</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div style="float: left; width: 320px" class="iceCols">
                                                <ul>
                                                    <li id="iceMenu_0" class="iceMenuLiLevel_2">
                                                        <div class="icemega_cover_module" style="width: 280px">
                                                            <div class="icemega_modulewrap" style="width: auto;">
                                                                <span class="iceModuleTile">Лучшие автомобили!</span>
                                                                <div class="custom">
                                                                    <p>
                                                                        <img src="images/best_cars.jpg" border="0" alt="Designed with Love"
                                                                            width="65" height="65" />
                                                                        Все автомобили собраны в одном месте. Авто из Южной Кореи - это качество по доступной цене… а, с недавнего времени, еще и современный (порой даже экстравагантный) дизайн. В этом разделе каталога обзоры (характеристики, цены) корейских автомобилей. Отзывы владельцев корейских авто.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li id="iceMenu_4000" class="iceMenuLiLevel_1 parent"><a href="javascript:void(0)"
                                    class=" iceMenuTitle"><span class="icemega_title">Автобусы</span><!--span class="icemega_desc">Новые поступления</span>--></a>
                                    <ul class="icesubMenu sub_level_1" style="width: 560px">
                                        <li>
                                            <div style="float: left; width: 240px" class="iceCols">
                                                <ul>
                                                    <li id="iceMenu_4006" class="iceMenuLiLevel_2">
                                                        <a href="javascript: getByType(5)" class=" iceMenuTitle">
                                                            <span class="icemega_title icemega_nosubtitle">Микроавтобусы</span>
                                                        </a>
                                                    </li>
                                                    <li id="iceMenu_4005" class="iceMenuLiLevel_2">
                                                        <a href="javascript: getByType(4)" class=" iceMenuTitle">
                                                            <span class="icemega_title icemega_nosubtitle">Автобусы</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div style="float: left; width: 320px" class="iceCols">
                                                <ul>
                                                    <li id="iceMenu_0" class="iceMenuLiLevel_2">
                                                        <div class="icemega_cover_module" style="width: 280px">
                                                            <div class="icemega_modulewrap" style="width: auto;">
                                                                <span class="iceModuleTile">Лучшие автомобили!</span>
                                                                <div class="custom">
                                                                    <p>
                                                                        <img src="images/best_cars.jpg" border="0" alt="Designed with Love"
                                                                            width="65" height="65" />
                                                                        Все автомобили собраны в одном месте. Авто из Южной Кореи - это качество по доступной цене… а, с недавнего времени, еще и современный (порой даже экстравагантный) дизайн. В этом разделе каталога обзоры (характеристики, цены) корейских автомобилей. Отзывы владельцев корейских авто.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li id="iceMenu_5000" class="iceMenuLiLevel_1 parent"><a class=" iceMenuTitle"><span
                                    class="icemega_title">Спецтехника</span><!--<span class="icemega_desc">4 options</span>--></a>
                                    <ul class="icesubMenu sub_level_1" style="width: 560px">
                                        <li>
                                            <div style="float: left; width: 240px" class="iceCols">
                                                <ul>
                                                    <li id="iceMenu_5007" class="iceMenuLiLevel_2">
                                                        <a href="javascript: getByType(6)" class=" iceMenuTitle">
                                                            <span class="icemega_title icemega_nosubtitle">Сельхозтехника</span>
                                                        </a>
                                                    </li>
                                                    <li id="iceMenu_5008" class="iceMenuLiLevel_2">
                                                        <a href="javascript: getByType(7)" class=" iceMenuTitle">
                                                            <span class="icemega_title icemega_nosubtitle">Спецтехника</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div style="float: left; width: 320px" class="iceCols">
                                                <ul>
                                                    <li id="iceMenu_0" class="iceMenuLiLevel_2">
                                                        <div class="icemega_cover_module" style="width: 280px">
                                                            <div class="icemega_modulewrap" style="width: auto;">
                                                                <span class="iceModuleTile">Лучшие автомобили!</span>
                                                                <div class="custom">
                                                                    <p>
                                                                        <img src="images/best_cars.jpg" border="0" alt="Designed with Love"
                                                                            width="65" height="65" />
                                                                        Все автомобили собраны в одном месте. Авто из Южной Кореи - это качество по доступной цене… а, с недавнего времени, еще и современный (порой даже экстравагантный) дизайн. В этом разделе каталога обзоры (характеристики, цены) корейских автомобилей. Отзывы владельцев корейских авто.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li id="iceMenu_166" class="iceMenuLiLevel_1"><a href="/car/index.php/en/?Itemid=166"
                                    class=" iceMenuTitle"><span class="icemega_title icemega_nosubtitle"></span></a></li></ul>
                        </div>
                        <script type="text/javascript">
                            window.addEvent('domready', function () {
                                if (document.getElementById('icemegamenu') != null)
                                    var myMenu = new MenuMatic({ id: 'icemegamenu',
                                        subMenusContainerId: 'subMenusContainer',
                                        effect: 'slide & fade',
                                        duration: 600,
                                        physics: Fx.Transitions.Pow.easeOut,
                                        hideDelay: 1000,
                                        opacity: 95
                                    });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>

		<?php
			if(!isset($_GET["page"])) { $page = "home"; } else { $page = $_GET["page"]; }
			if($page != "home"  && $page != "about"  && $page != "list"  && $page != "mark"  && $page != "more") { die("wrong page parameter"); }
			include $page.".html";
		?>
        <!-- Footer Wrapper -->
    <div id="footer">
    	<div class="wrapper">		
		    <div class="modules-wrap clearfix">       
				<div class="width20 separator floatleft">			       
                    <div class="moduletable ">
                        <div class="">
			            	<div class="moduletable-header">
                            	<div class="moduletable-header-inside">
                            		<h3 class="mod-title">Контакты </h3>
                                </div>    
                            </div>    
                            <div class="moduletable_content clearfix">
                                <div class="custom"  >
	                                <p>Тел.: +7 (914) 150-54-86</p>
                                    <p>Индекс: : 680000</p>
                                    <p>E: 
    <script type='text/javascript'>
    <!--
    var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
    var path = 'hr' + 'ef' + '=';
    var addy86615 = '&#105;nf&#111;' + '&#64;'; 
    //addy86615 = addy86615 + 'm&#111;t&#111;rt&#101;mpl&#97;t&#101;' + '&#46;' + 'c&#111;m'; //document.write(addy86615+'<br/>');
    addy86615 = 'sales@coreatrade.com';
    document.write('<a ' + path + '\'' + prefix + ':' + addy86615 + '\'>');
    document.write(addy86615);
    document.write('<\/a>');
    //-->\n </script>
    <script type='text/javascript'>
    <!--
    document.write('<span style=\'display: none;\'>');
    //-->
    </script>Этот email адрес защищён от спам-ботов. Вам необходимо включить JavaScript, чтобы увидеть его.
    <script type='text/javascript'>
    <!--
    document.write('</');
    document.write('span>');
    //-->
    </script></p>
                                </div>
                            </div>
                        </div>
                    </div>
	                </div>
                <div class="width20 separator floatleft">		       
                    <div class="moduletable ">
                        <div class="">
			            	<div class="moduletable-header">
                	            <div class="moduletable-header-inside">
                		            <h3 class="mod-title">Часы работы </h3>
                                </div>    
                            </div>    
                            <div class="moduletable_content clearfix">
                                <div class="custom"  >
	                                <p>Пн - Пт: 09.00 - 18.00</p>
                                    <p>Суббота: 10.00 - 16.00</p>
                                    <p>Воскресенье: Выходной</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
                <div class="width20 separator floatleft">       
                    <div class="moduletable ">
                        <div class="">
			            	<div class="moduletable-header">
                	            <div class="moduletable-header-inside">
                		            <h3 class="mod-title">Адрес </h3>
                                </div>    
                            </div>    
                            <div class="moduletable_content clearfix">
                                <div class="custom"  >
	                                <p>ул. Дзержинского <br /> д.65 оф.1002б</p> 
                                    <p>г. Хабаровск</p>
                                    <p><a href="?page=about">Найти на карте</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
	        	</div>
                <div class="width20 separator floatleft">
                    <div class="moduletable ">
                        <div class="">
		              	    <div class="moduletable-header">
                        	    <div class="moduletable-header-inside">
                	        	    <h3 class="mod-title">Карьера</h3>
                                </div>    
                            </div>    
                            <div class="moduletable_content clearfix">
                                <div class="custom"  >
	                                <p>Пожалуйста отправляйте Ваше резюме и письма</p>
                                    <p>по адресу</p>
                                    <p>
    <script type='text/javascript'>
    <!--
    var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
    var path = 'hr' + 'ef' + '=';
    var addy83427 = 'c&#97;r&#101;&#101;rs' + '&#64;';
    addy83427= 'sales@coreatrade.com'
    //addy83427 = addy83427 + 'm&#111;t&#111;rt&#101;pl&#97;t&#101;' + '&#46;' + 'c&#111;m';
    document.write('<a ' + path + '\'' + prefix + ':' + addy83427 + '\'>');
    document.write(addy83427);
    document.write('<\/a>');
    //-->\n </script><script type='text/javascript'>
    <!--
    document.write('<span style=\'display: none;\'>');
    //-->
    </script>Этот email адрес защищён от спам-ботов. Вам необходимо включить JavaScript, чтобы умидеть его. 
    <script type='text/javascript'>
    <!--
    document.write('</');
    document.write('span>');
    //-->
    </script>
    </p>
                                </div>
                            </div>
                        </div>
		            </div>
				</div>
	    	    <div class="width20  floatleft">  
                    <div class="moduletable ">
                        <div class="">
                            <div class="moduletable-header">
                	            <div class="moduletable-header-inside">
                		            <h3 class="mod-title">В социальные </h3>
                                </div>    
                            </div>    
                            <div class="moduletable_content clearfix">
                                <ul class="menu" id="socialmenu">
                                   <!-- <li class="item-199"><a href="http://www.facebook.com" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,');return false;" ><img src="images/icon_facebook.png" alt="Facebook Fan" /><span class="image-title">Facebook Fan</span> </a></li>-->
                                    <!--<li class="item-200"><a href="http://twitter.com" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,');return false;" ><img src="images/icon_twitter.png" alt="Twitter Page" /><span class="image-title">Twitter Page</span> </a></li>-->
                                    <li class="item-201"><a href="http://vk.com/coreatrade" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,');return false;" ><img src="images/icon_vk.png" alt="Корея Трэйд Вконтакте" /><span class="image-title">Мы Вконтакте</span> </a></li>
                                </ul>
                            </div>
                        </div>
		            </div>
                </div>
			</div>  

			<div id="copyright" class="clearfix">   
                <div id="icelogo">
					<p><a href="http://technomedia.copiny.com/"></a></p>
				</div>
				<div id="copytext">
                    <div class="footer1">&nbsp;ООО "Корея Трейд"&#169;. Все права защищены.</div>
                        <div class="footer2"><a href="http://technomedia.copiny.com/">ООО "Техно Медиа"</a> Разработка сайтов и программного обеспечения</div>
                    </div>            
                    <div id="copyrightmenu">
                        <ul class="menu">
                            <li class="item-108"><a href="#" >Условия использования</a></li>
                            <li class="item-109"><a href="#" >Авторское право</a></li>
                            <li class="item-110"><a href="#" >Политика конфиденциальности</a></li>
                        </ul>
                    </div>
				</div>
			</div>  
		 
        <script type="text/javascript">
        window.addEvent('domready',function() { new SmoothScroll({ duration: 800 }); })
        </script>
        <a id="go2top" href="#header"><span>На верх</span></a>    			
    </div>
        <!-- Footer -->	

    <!-- javascript code to make J! tooltips -->
    <script type="text/javascript">
 	    window.addEvent('domready', function() {
			    $$('.hasTip').each(function(el) {
				    var title = el.get('title');
				    if (title) {
					    var parts = title.split('::', 2);
					    el.store('tip:title', parts[0]);
					    el.store('tip:text', parts[1]);
				    }
			    });
		    var JTooltips = new Tips($$('.hasTip'), { fixed: false});
	    });
     </script>
    </body>
</html>

