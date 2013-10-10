<?php

require 'lib/core/config.php';
require 'lib/core/sql.php';

?><!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Easy Parallax Slider</title>
<link rel="shortcut icon" href="" />
<meta name="description" content="Easy Parallax Slider is a jQuery plugin that mixes your traditional slider with parallax elements. It allows developers the ability to virtually make any html element a parallax element, creating a far more interactive and intuitive experience for the users of your website.">
<meta name="author" content="Godoploid Design | Thomas Bird">
<meta NAME="keywords" CONTENT="easy parallax slider, jQuery plugin, parallax scrolling, html5, parallax slider">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php require 'lib/core/header-assets.php'; ?>
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=310743462281809";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="outer-wrap" id="top">
	<div class="inner-wrap">
    	<?php require 'lib/core/header.php'; ?>
        
        <div class="second-head">
            <div class="browser">
                <img src="img/browsers.png" alt="Browser Compliancy" />
                <h2>Cross Browser Compatible</h2>
            </div>
            <div>
                <a class="cta" href="download.php">Download Plugin</a>
            </div>
        </div>
        
        <div class="slider">
        	<div class="viewport">
                <div class="slideReel">
                    
                    <div class="slide current">
                        <img src="img/slide1/bg.jpg"
                            class="scrolling-element" 
                            data-animation='{
                                "speedIn" 			: 		"4000", 
                                "speedOut" 			: 		"200",
                                "effectIn" 			: 		"animate",
                                "opacityIn"			:		"1.0",
                                "opacityEnd"		:		"1.0",
                                "opacityOut"		:		"1.0",
                                "widthIn"			:		"1160",
                                "widthEnd"			:		"1160",
                                "widthOut"			:		"1160",                 
                                "inX" 				: 		"-200",
                                "inY" 				: 		"0",
                                "origX"				:		"0",
                                "origY" 			:		"0",
                                "outX" 				: 		"-200",
                                "outY" 				: 		"-50",
                                "easingIn"			:		"",
                                "easingOut"			:		""
                            }' 
                            style="position: absolute; top: 273px; left: 330px; " />
                            
                            <img src="img/slide1/planet.png"
                            class="scrolling-element" 
                            data-animation='{
                                "speedIn" 			: 		"3000", 
                                "speedOut" 			: 		"700",
                                "effectIn" 			: 		"animate",  
                                "opacityIn"			:		"1.0",
                                "opacityEnd"		:		"1.0",
                                "opacityOut"		:		"1.0",
                                "widthIn"			:		"50",
                                "widthEnd"			:		"258",
                                "widthOut"			:		"350",                
                                "inX" 				: 		"0",
                                "inY" 				: 		"420",
                                "origX"				:		"670",
                                "origY" 			:		"140",
                                "outX" 				: 		"960",
                                "outY" 				: 		"20",
                                "easingIn"			:		"",
                                "easingOut"			:		""
                            }' 
                            style="position: absolute; top: 273px; left: 330px; " />
                            
                            <img src="img/slide1/leftShip1.png"
                            class="scrolling-element" 
                            data-animation='{
                                "speedIn" 			: 		"3000", 
                                "speedOut" 			: 		"200",
                                "effectIn" 			: 		"animate",
                                "opacityIn"			:		"1.0",
                                "opacityEnd"		:		"1.0",
                                "opacityOut"		:		"1.0",
                                "widthIn"			:		"50",
                                "widthEnd"			:		"144",
                                "widthOut"			:		"250",                   
                                "inX" 				: 		"-144",
                                "inY" 				: 		"50",
                                "origX"				:		"170",
                                "origY" 			:		"200",
                                "outX" 				: 		"0",
                                "outY" 				: 		"-100",
                                "easingIn"			:		"",
                                "easingOut"			:		""
                            }' 
                            style="position: absolute; top: 273px; left: 330px; " />
                            
                            <img src="img/slide1/leftShip2.png"
                            class="scrolling-element" 
                            data-animation='{
                                "speedIn" 			: 		"2000", 
                                "speedOut" 			: 		"1000",
                                "effectIn" 			: 		"animate", 
                                "opacityIn"			:		"1.0",
                                "opacityEnd"		:		"1.0",
                                "opacityOut"		:		"1.0",
                                "widthIn"			:		"150",
                                "widthEnd"			:		"323",
                                "widthOut"			:		"500",                  
                                "inX" 				: 		"-323",
                                "inY" 				: 		"150",
                                "origX"				:		"70",
                                "origY" 			:		"260",
                                "outX" 				: 		"960",
                                "outY" 				: 		"420",
                                "easingIn"			:		"",
                                "easingOut"			:		""
                            }' 
                            style="position: absolute; top: 273px; left: 330px; " />
                            
                            <img src="img/slide1/spaceShipRight1.png"
                            class="scrolling-element" 
                            data-animation='{
                                "speedIn" 			: 		"2000", 
                                "speedOut" 			: 		"1000",
                                "effectIn" 			: 		"animate", 
                                "opacityIn"			:		"1.0",
                                "opacityEnd"		:		"1.0",
                                "opacityOut"		:		"1.0",
                                "widthIn"			:		"120",
                                "widthEnd"			:		"193",
                                "widthOut"			:		"300",                  
                                "inX" 				: 		"1250",
                                "inY" 				: 		"500",
                                "origX"				:		"720",
                                "origY" 			:		"310",
                                "outX" 				: 		"200",
                                "outY" 				: 		"200",
                                "easingIn"			:		"",
                                "easingOut"			:		""
                            }' 
                            style="position: absolute; top: 273px; left: 330px; " />
                            
                            <img src="img/slide1/spaceShipRight2.png"
                            class="scrolling-element" 
                            data-animation='{
                                "speedIn" 			: 		"1500", 
                                "speedOut" 			: 		"1000",
                                "effectIn" 			: 		"animate", 
                                "opacityIn"			:		"1.0",
                                "opacityEnd"		:		"1.0",
                                "opacityOut"		:		"1.0",
                                "widthIn"			:		"200",
                                "widthEnd"			:		"242",
                                "widthOut"			:		"350",                  
                                "inX" 				: 		"1100",
                                "inY" 				: 		"300",
                                "origX"				:		"570",
                                "origY" 			:		"220",
                                "outX" 				: 		"0",
                                "outY" 				: 		"150",
                                "easingIn"			:		"",
                                "easingOut"			:		""
                            }' 
                            style="position: absolute; top: 273px; left: 330px; " />
                            
                            <img src="img/slide1/centerShip.png"
                            class="scrolling-element" 
                            data-animation='{
                                "speedIn" 			: 		"2000", 
                                "speedOut" 			: 		"1000",
                                "effectIn" 			: 		"animate", 
                                "opacityIn"			:		"1.0",
                                "opacityEnd"		:		"1.0",
                                "opacityOut"		:		"1.0",
                                "widthIn"			:		"200",
                                "widthEnd"			:		"313",
                                "widthOut"			:		"400",                  
                                "inX" 				: 		"960",
                                "inY" 				: 		"0",
                                "origX"				:		"380",
                                "origY" 			:		"50",
                                "outX" 				: 		"200",
                                "outY" 				: 		"100",
                                "easingIn"			:		"",
                                "easingOut"			:		""
                            }' 
                            style="position: absolute; top: 273px; left: 330px; " />
                            
                    </div>
                    
                    <div class="slide">
                        <img src="img/slide2/bg.jpg"
                            class="scrolling-element" 
                            data-animation='{
                                "speedIn" 			: 		"4000", 
                                "speedOut" 			: 		"200",
                                "effectIn" 			: 		"animate",
                                "opacityIn"			:		"1.0",
                                "opacityEnd"		:		"1.0",
                                "opacityOut"		:		"1.0",
                                "widthIn"			:		"2560",
                                "widthEnd"			:		"2560",
                                "widthOut"			:		"2560",                 
                                "inX" 				: 		"-250",
                                "inY" 				: 		"-730",
                                "origX"				:		"-1040",
                                "origY" 			:		"-730",
                                "outX" 				: 		"-200",
                                "outY" 				: 		"-50",
                                "easingIn"			:		"",
                                "easingOut"			:		""
                            }' 
                            style="position: absolute; top: 273px; left: 330px; " />
                            
                            <img src="img/slide2/palmTree.png"
                            class="scrolling-element" 
                            data-animation='{
                                "speedIn" 			: 		"3000", 
                                "speedOut" 			: 		"700",
                                "effectIn" 			: 		"animate",  
                                "opacityIn"			:		"1.0",
                                "opacityEnd"		:		"1.0",
                                "opacityOut"		:		"1.0",
                                "widthIn"			:		"571",
                                "widthEnd"			:		"571",
                                "widthOut"			:		"571",                
                                "inX" 				: 		"-571",
                                "inY" 				: 		"-100",
                                "origX"				:		"0",
                                "origY" 			:		"0",
                                "outX" 				: 		"700",
                                "outY" 				: 		"-200",
                                "easingIn"			:		"",
                                "easingOut"			:		""
                            }' 
                            style="position: absolute; top: 273px; left: 330px; " />
                            
                            <img src="img/slide2/bush.png"
                            class="scrolling-element" 
                            data-animation='{
                                "speedIn" 			: 		"3000", 
                                "speedOut" 			: 		"200",
                                "effectIn" 			: 		"animate",
                                "opacityIn"			:		"1.0",
                                "opacityEnd"		:		"1.0",
                                "opacityOut"		:		"1.0",
                                "widthIn"			:		"402",
                                "widthEnd"			:		"402",
                                "widthOut"			:		"402",                   
                                "inX" 				: 		"960",
                                "inY" 				: 		"-100",
                                "origX"				:		"560",
                                "origY" 			:		"0",
                                "outX" 				: 		"300",
                                "outY" 				: 		"-100",
                                "easingIn"			:		"",
                                "easingOut"			:		""
                            }' 
                            style="position: absolute; top: 273px; left: 330px; " />
                            
                    </div>
        
                    <div class="slide video" data-vid='<iframe width="960" height="420" src="http://www.youtube.com/embed/ysSxxIqKNN0?autoplay=1" frameborder="0" allowfullscreen></iframe>'>
                        <img src="img/slide3/video.jpg" />
                    </div>

                </div>
                <div class="dits">
                    <ul>
                    </ul>
                </div>
                <a id="prevBtn" href="#"></a>
                <a id="nextBtn" href="#"></a>
            </div>        	
        </div>
        
        <p>Easy Parallax Slider is a jQuery plugin that mixes your traditional slider with parallax elements. It allows developers the ability to virtually make any html element a parallax element, creating a far more interactive and intuitive experience for the users of your website. The plugin contains a wide range of options and is easy to setup and get running in no time. It is cross browser tested for Firefox, Internet Explorer 7+, Chrome, Opera and Safari in addition to being compatible with Ipads, Android and Iphone Devices. The slider features full customizability ranging from time between slides, time between animations, width & opacity of elements, 3 different pagination styles, the in position, the end position and the out position. It also supports video through embedded Youtube and Vimeo players, </p>
        
        <div class="doubleHr"></div>
        <div class="threeCol dividers">
        	<h3>Documentation</h3>
            
            <p>The Easy Parallax Slider plugin is an easy to use plugin but we know even some of the simplest code can be a pain without proper documentation. That's we will always have well documented code and documentation released the same time as the new versions releases!</p>
        </div>
        <div class="threeCol dividers">
        	<h3>Bug Tracker</h3>
            
            <p>We do out best to keep the code up to date in a timely manner and ensure quality, but just like  everyone else sometimes mistakes are made. If their are help us out and make us aware of it and well do our best to quickly fix the problem. Also if you have suggest feel free to submit those as well.</p>
        </div>
        <div class="threeCol">
        	<h3>Releases</h3>
            
            <p>We're constantly tryiing to make the plugin better with each new release. If you have suggestions we appreciate any feedback you may have!</p>
        </div>
        <div class="clear"></div>
        <div class="doubleHr"></div>
        
        <div class="clear"></div>
    </div>
</div>

<div class="outer-wrap" id="footer">
	<div class="inner-wrap">
    	<?php require 'lib/core/footer.php'; ?>
    </div>
</div>

<?php require 'lib/core/footer-assets.php'; ?>

</body>
</html>