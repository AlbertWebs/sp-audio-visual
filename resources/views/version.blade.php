<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head lang="en">
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>Stagepass Audio Visual - Tech Documentation</title>
	<!-- Framework CSS -->
	<link rel="stylesheet" href="{{asset('version/assets/blueprint-css/screen.css')}}" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="{{asset('version/assets/blueprint-css/print.css')}}" type="text/css" media="print">
	<!--[if lt IE 8]><link rel="stylesheet" href="assets/blueprint-css/ie.css" type="text/css" media="screen, projection"><![endif]-->
	<link rel="stylesheet" href="{{asset('version/assets/blueprint-css/plugins/fancy-type/screen.css')}}" type="text/css" media="screen, projection">
	<style type="text/css" media="screen">
		p, table, hr, .box { margin-bottom:25px; }
		.box p { margin-bottom:10px; }
	</style>
</head>


<body>
	<div class="container">
	
		<h3 class="center alt">&ldquo;Stagepass Audio Visual -Stagepass AV Website template&rdquo; Documentation by Designekta Studios v1.0</h3>
		
		<hr>
		
		<h1 class="center">&ldquo;Stagepass AV - stagepass.co.ke Website Template For Stagepass Audio Visual Limited&rdquo; Documentation by Designekta Studios</h1>
		
		<div class="borderTop">
			<div class="span-6 colborder info prepend-1">
				<p class="prepend-top">
					<strong>
					Created: 21/04/2019<br>
					By: Designekta Studios<br>
					Email: <a href="mailto:info@designekta.com">info@designekta.com</a>
					</strong>
				</p>
			</div><!-- end div .span-6 -->		
	
			<div class="span-12 last">
				<p class="prepend-top append-0"> If you have any questions that are beyond the scope of this help file, please feel free to email via our website contact form <a href="https://designekta.com">here</a>. Thanks so much!</p>
			</div>
		</div><!-- end div .borderTop -->
		
		<hr>
		
		<h2 id="toc" class="alt">Table of Contents</h2>
		<ol class="alpha">
			<li><a href="#htmlStructure">HTML Structure</a></li>
			<li><a href="#cssFiles">CSS Files and Structure</a></li>
			<li><a href="#javascript">JavaScript</a></li>
			<li><a href="#credits">Sources and Credits</a></li>		
			
		</ol>
		
		<hr>
		
		<h3 id="htmlStructure"><strong>A) HTML Structure</strong> - <a href="#toc">top</a></h3>
		<p>This theme is a responsive layout with 12 columns bootstrap. All of the information within the main content area is nested within a div with an class of "page". The general template structure is the same throughout the template. Here is the general structure.</p>
		
		<img src="assets/images/htmlstructure.png" alt="HTML Structure" />
		
		<p>If you would like to edit the color, font, or style of any elements in one of these columns, you would do the following:</p>

<pre>	.page a {
		color: #someColorCode;
	} 
</pre>

		<p>If you find that your new style is not overriding, it is most likely because of a specificity problem. Scroll down in your CSS file and make sure that there isn't a similar style that has more weight.This template makes use of minimum css files to improve page loading efficiency, most of the css are borrowed from open source css frameworks. </p>

		<p>I.E.</p>

<pre>	.wide page a {
		color: #someColor;
	}
</pre>

		<p>So, to ensure that your new styles are applied, make sure that they carry enough "weight" and that there isn't a style lower in the CSS file that is being applied after yours.</p> 

		<hr>

		<h3 id="cssFiles"><strong>B) CSS Files and Structure</strong> - <a href="#toc">top</a></h3>

		<p>I'm using two CSS files in this theme. The first one is a generic reset file. Many browser interpret the default behavior of html elements differently. By using a general reset CSS file, we can work round this. This file also contains some general styling, such as anchor tag colors, font-sizes, etc. Keep in mind, that these values might be overridden somewhere else in the file.</p> 

		<p>The second file contains all of the specific stylings for the page. The file is separated into sections using:</p>  

<pre>	
/**
* Template Style
*
* [Table of contents]
*   1 Bootstrap Framework
*     1.1  Normalize
*     1.2  Glyphicons
*     1.3  Scaffolding
*     1.4  Type
*     1.5  Code
*     1.6  Tables
*     1.7  Forms
*     1.8  Buttons
*     1.9  Grids
*     1.10 Component animations
*     1.11 Dropdowns
*     1.12 Button Groups
*     1.13 Input Groups
*     1.14 Navs
*     1.15 Navbar
*     1.16 Breadcrumbs
*     1.17 Pagination
*     1.18 Pager
*     1.19 Labels
*     1.20 Badges
*     1.21 Jumbotron
*     1.22 Thumbnails
*     1.23 Alerts
*     1.24 Progress bars
*     1.25 Media
*     1.26 List Group
*     1.27 Panels
*     1.28 Responsive Embed
*     1.29 Wells
*     1.30 Close
*     1.31 Modals
*     1.32 Tooltip
*     1.33 Popovers
*     1.34 Carousel
*     1.35 Utilities
*     1.36 Responsive Utilities
*
*   2 Bootstrap Toolkit Styles
*     2.1  Reset
*     2.2  Flex Grid System
*     2.3  Responsive Text System
*     2.4  Responsive Pulls System
*     2.5  Responsive Visibility System
*     2.6  Bootstrap Grid Addons
*     2.7  Dividers
*     2.8  Type Addons
*     2.9  Buttons Addons
*     2.10 Buttons Effects
*     2.11 Dropdowns Addons
*     2.12 Sections
*     2.13 Font Awesome
*     2.14 Flaticon
*     2.15 Material Design Icons
*     2.16 Thumbnail Addons
*     2.17 Wells Addons
*     2.18 Scaffolding Addons
*     2.19 Text Alignment System
*     2.20 Text Styling System
*     2.21 Navs Addons
*     2.22 Navbar Addons
*     2.23 Panels Addons
*     2.24 Icons
*     2.25 Progress Bars Addons
*     2.26 Media Addons
*     2.27 List Groups Addons
*     2.28 Breadcrumbs Addons
*     2.29 Input Groups Addons
*     2.30 Dropcaps
*     2.31 Alerts Addons
*     2.32 Animations Addons
*     2.33 Groups
*     2.34 Comment Boxes
*     2.35 Quotes
*     2.36 Pagination Addons
*     2.37 Pager Addons
*     2.38 Labels Addons
*     2.39 Posts
*     2.40 Form Addons
*     2.41 Offsets
*     2.42 Responsive Units
*     2.43 Icon Boxes
*     2.44 Floating Groups
*     2.45 Pricing and Plans
*     2.46 Tables Addons
*     2.47 Stacktables
*     2.48 Text Rotators
*     2.49 Jumbotron Addons
*     2.50 Shop Toolbar
*     2.51 Shop Product
*     2.52 Badges Addons
*     2.53 Member Boxes
*     2.54 Context Styling
*     2.55 Page Loaders
*     2.56 Testimonials
*
*   3 Plugins
*     3.1  RD Navbar
*     3.2  RD Twitterfeed
*     3.3  RD Instafeed
*     3.4  RD Search
*     3.5  RD Video
*     3.6  RD Parallax
*     3.7  RD Flickrfeed
*     3.8  Swiper Slider
*     3.9  Animate
*     3.10 Scroll To
*     3.11 Counter
*     3.12 Owl Carousel
*     3.13 Isotope
*     3.14 Photoswipe
*     3.15 Responsive Tabs
*     3.16 RD Google Maps
*     3.17 Select 2
*     3.18 FS Stepper
*     3.19 Countdown
*     3.20 RD Audio Player
*     3.21 RD Video Player
*     3.22 RD Event Calendar
*     3.23 RD Facebook Feed
*     3.24 Soundcloud Player
*     3.25 Material Datetime Picker
*     3.26 ToTop Button
*/
	
	etc, etc. 
</pre>
		
		<p>If you would like to edit a specific section of the site, simply find the appropriate label in the CSS file, and then scroll down until you find the appropriate style that needs to be edited.</p> 

		<p>Any images that are placed within the blog section have 5px worth of padding and a light bluish background. If you would like to edit the display of these images, find the following section in the style sheet:</p>

<pre>	.page img {
		change styles here:
	}
</pre>

		<hr>
		
		<h3 id="javascript"><strong>C) JavaScript</strong> - <a href="#toc">top</a></h3>
		
		<p>This theme imports three Javascript files.</p>
		
		<ol>
			<li>jQuery</li>
			<li>My custom scripts (script.js)</li>
			<li>Some plugin (core.min.js)</li>
		</ol>
		  
		<ol>
			<li>jQuery is a Javascript library that greatly reduces the amount of code that you must write.</li>
			<li>Most of the animation in this site is carried out from the customs scripts. There are a few functions worth looking over.
<pre>	
/**
 * jQuery Migrate
 * @see          https://github.com/jquery/jquery-migrate
 * @license      MIT License
 */
 /**
 * jQuery Cookie Plugin
 * @see          https://github.com/carhartl/jquery-cookie
 * @license      MIT license
 */
 /**
 * Device.js
 * @see          https://github.com/matthewhudson/device.js
 * @license      MIT License
 */
 /**
 * jQuery resize event
 * @see          http://benalman.com/projects/jquery-resize-plugin/
 * @license      MIT license
 */
 /**
 * jQuery easing
 * @see          http://gsgd.co.uk/sandbox/jquery/easing/
 * @license      BSD License
 */
 /**
 * TouchSwipe
 * @see          https://github.com/mattbryson/TouchSwipe-Jquery-Plugin
 * @license      MIT License
 */
 /**
 * Regula: An annotation-based form-validation framework in Javascript
 * @version 1.3.4
 * @license BSD License
 * @copyright Robert Nyman, http://www.robertnyman.com
 */
 /**
 * @module       jQuery Form Plugin
 * @version      3.51
 * @author       M. Alsup
 * @see          http://malsup.com/jquery/form/
 * @license      MIT and GPL licenses
 */
 	etc, etc. 
</pre>
			</li>
			<li>In addition to the custom scripts, I implement a few "tried and true" plugins to create the effects. This plugin is packed, so you won't need to manually edit anything in the file. The only necessary thing to know is how to call the method. For example:
<pre>
  plugins = {
      pointerEvents: isIE < 11 ? "js/pointer-events.min.js" : false,
      smoothScroll: $html.hasClass("use--smoothscroll") ? "js/smoothscroll.min.js" : false,
      bootstrapTooltip: $("[data-toggle='tooltip']"),
      bootstrapTabs: $(".tabs"),
      rdParallax: $(".rd-parallax"),
      rdAudioPlayer: $(".rd-audio"),
      rdVideoPlayer: $(".rd-video-player"),
      responsiveTabs: $(".responsive-tabs"),
      rdGoogleMaps: $(".rd-google-map"),
      rdNavbar: $(".rd-navbar"),
      rdVideoBG: $(".rd-video"),
      rdRange: $('.rd-range'),
      textRotator: $(".text-rotator"),
      owl: $(".owl-carousel"),
      swiper: $(".swiper-slider"),
      counter: $(".counter"),
      flickrfeed: $(".flickr"),
      twitterfeed: $(".twitter"),
      progressBar: $(".progress-bar-js"),
      isotope: $(".isotope"),
      countDown: $(".countdown"),
      calendar: $(".rd-calendar"),
      facebookfeed: $(".facebook"),
      instafeed: $(".instafeed"),
      facebookWidget: $('#fb-root'),
      materialTabs: $('.rd-material-tabs'),
      filePicker: $('.rd-file-picker'),
      fileDrop: $('.rd-file-drop'),
      popover: $('[data-toggle="popover"]'),
      dateCountdown: $('.DateCountdown'),
      statefulButton: $('.btn-stateful'),
      slick: $('.slick-slider'),
      scroller: $(".scroll-wrap"),
      socialite: $(".socialite"),
      viewAnimate: $('.view-animate'),
      selectFilter: $("select"),
      rdInputLabel: $(".form-label"),
      stacktable: $("[data-responsive=true]"),
      bootstrapDateTimePicker: $("[data-time-picker]"),
      customWaypoints: $('[data-custom-scroll-to]'),
      photoSwipeGallery: $("[data-photo-swipe-item]"),
      circleProgress: $(".progress-bar-circle"),
      stepper: $("input[type='number']"),
      radio: $("input[type='radio']"),
      checkbox: $("input[type='checkbox']"),
      customToggle: $("[data-custom-toggle]"),
      rdMailForm: $(".rd-mailform"),
      regula: $("[data-constraints]"),
      search: $(".rd-search"),
      searchResults: $('.rd-search-results'),
      imgZoom: $('[mag-thumb]')
    },

</pre>
			</li>
		</ol>
		
		<hr>
		
		
		<h3 id="credits"><strong>D) Sources and Credits</strong> - <a href="#toc">top</a></h3>
		
		<p>I've used the following images, icons or other files as listed.
		
	<pre>
	**Demo images**   

 1. Unsplash by Crew - http://unsplash.com/

 2. On Services  - http://www.onservices.com/



**Fonts**

 1. Font Awesome by Dave Gandy - http://fortawesome.github.io/Font-Awesome/
 2. GLYPHICONS - http://glyphicons.com/ 
 3. MaterialDesign - https://materialdesignicons.com/ 
 4. Google Fonts - http://www.google.com/fonts
</pre>
		
		<hr>
		
		<p>No guarantees, but we will do our best to assist. If you have a more general question relating to the Theme, you might consider visiting our website and leave your query in our contact form.</p> 
		
		<p class="append-bottom alt large"><strong>Designekta Studios</strong></p>
		<p><a href="#toc">Go To Table of Contents</a></p>
		
		<hr class="space">
	</div><!-- end div .container -->
</body>
</html>