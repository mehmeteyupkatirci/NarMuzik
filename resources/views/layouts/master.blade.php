<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NarMüzik</title>
        <!-- Bootstrap core CSS -->
        <link href="\css\bootstrap.css" rel="stylesheet">
        <!-- Preloader CSS -->
        <link rel="stylesheet" href="\css\preloader.css">
        <!-- DL Menu CSS -->
        <link href="\js\dl-menu\component.css" rel="stylesheet">
        <!-- Slick Slider CSS -->
        <link href="\css\slick.css" rel="stylesheet">
        <link href="\css\slick-theme.css" rel="stylesheet">
        <!-- jquery.bxslider CSS -->
        <link href="\css\jquery.bxslider.css" rel="stylesheet">
        <!--Player Css-->
        <link href="\js\jplayer\jplayer.uno.css" rel="stylesheet">
        <!--black-style Css-->
        <link href="\css\black-style.css" rel="stylesheet">
        <!-- Fav icon -->
        <link rel="icon" type="icon" sizes="96x96" href="\fonts\fav.png">
        <link href="\css\font-awesome.css" rel="stylesheet">
        <link href="\css\svg-icons.css" rel="stylesheet">
        <!-- Pretty Photo CSS -->
        <link href="\css\prettyPhoto.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="\css\animation.css" rel="stylesheet">
        <!-- Range slider CSS -->
        <link href="\css\range-slider.css" rel="stylesheet">
        <!-- Typography CSS -->
        <link href="\css\typography.css" rel="stylesheet">
        <!-- Widget CSS -->
        <link href="\css\widget.css" rel="stylesheet">
        <!-- Shortcodes CSS -->
        <link href="\css\shortcodes.css" rel="stylesheet">
        <!-- Custom Main StyleSheet CSS -->
        <link href="\style.css" rel="stylesheet">
        <!-- Color CSS -->
        <link href="\css\color.css" rel="stylesheet">
        
        <!-- Responsive CSS -->
        <link href="\css\responsive.css" rel="stylesheet">
    </head>

    <body class="msl-black">
        <!--Loader Wrapper Start-->
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!--Loader Wrapper End--> 
        
        <!--Kode Wrapper Start-->  
        <div class="kode_wrapper"> 
			<header class="header-style-5">
                <div class="container">
                    
                    <div class="logo">
                        <h1><a style="width: 146px; height: 73px" href="/"><img src="\images\NarMuzik\narm.png" alt="logo here"></a></h1>
                    </div>
                    
                    <div class="header-1st-row">
                        <div class="left-side">
                            <div class="breaking-news-column">
                                <strong>Breaking News:</strong>
                                <div class="brk-slider">
                                    <div class="news_items">
                                        <p>NarMüzik dummy verilerle ilk gösterim. </p>
                                    </div>
                                    <div class="news_items">
                                        <p>Lorem Ipsum is simply dummy text of the printing and </p>
                                    </div>
                                    <div class="news_items">
                                        <p>Lorem Ipsum is simply dummy text of the printing and </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="login-register">
                                <span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                                <a href="#" data-toggle="modal" data-target="#login-register1">login</a>
                                <a href="#" data-toggle="modal" data-target="#login-register1">register</a>
                            </div>
                            <div class="social-icons">
                                <ul>
									<li><a target="_blank" href="https://github.com/mehmeteyupkatirci/">
										<i class="fa fa-github fa-lg" aria-hidden="true"></i>
										</a>
									</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>

                    <div class="header-2st-row">
                        <div class="fst-navigation">
                            <nav class="navigation-1">
                                <ul>	
        							<li class="active"><a href="/">home</a></li>
									<li class="menu-item "><a href="/artists">artist</a></li>
									<li class="menu-item "><a href="/albums">Albums</a></li>					
								</ul>
                            </nav>
                            <div id="kode-responsive-navigation" class="dl-menuwrapper">
	                            <button class="dl-trigger"></button>
	                            <ul class="dl-menu">
	                                <li class="menu-item"><a href="/">Home</a></li>
	                                <li class="menu-item"><a href="/artists">artist</a></li>
	                                <li class="menu-item"><a href="/albums">albums</a></li>
	                               
	                            </ul>
	                        </div>
                            <div class="pull-right">
                                <ul class="playlist_menu_bar">
                                    <li><a id="search-btn" href="#"><div id="search-button"><i class="fa fa-search"></i></div></a></li>
                                    <li><a data-action="open" data-side="right" class="side_t kf_menu_button" href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </header>


            @yield('content')


            <!--Copy Right Wrap Start-->
            <div class="msl-copyright theme-bg">
                <div class="container">
                    <p class="pull-left">© 2020 All Right Reserved. <a target="_blank" href="https://github.com/mehmeteyupkatirci/">NarMuzik</a></p>
                    <!--Navigation Start-->
                    <nav class="navigation pull-right">
                        <ul>
                            <li class="active">
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/artists">Artist</a>
							</li>
							<li>
                                <a href="/albums">Albums</a>
                            </li>
                        </ul>
                    </nav>
                    <!--Navigation End-->
                </div>
            </div>
            <!--Copy Right Wrap End-->
            
        </div>
		<!-- Modal -->
		<div id="login-register1" class="modal fade" role="dialog">
		  	<div class="modal-dialog">
			    <!-- Modal content-->
			    <div class="modal-content">
			    	<button type="button" class="close" data-dismiss="modal">&times;</button>
			      	<div class="ms-login-form">
  						<form>
  							<div class="ms_width_off50">
      							<div class="ms-heading2">
      								<h3>Sign in</h3>
      								<p>welcome back! sign in to your account</p>
      							</div>
      							<div class="input-felid">
      								<label>username or email address</label>
      								<input type="text" placeholder="user name or email address*">
      							</div>
      							<div class="input-felid">
      								<label>password</label>
      								<input type="text" placeholder="password*">
      							</div>
      							<div class="pull-left">
      								<input type="checkbox" name="remember" id="clik">
      								<span class="box"></span>
      								<label for="clik" class="ck-title">remember me</label>
      							</div>
      							<div class="pull-right">
      								<a href="#" class="fpw">forgotten password?</a>
      							</div>
      							<div class="btn-submit">
      								<button class="btn-normal2" type="submit">login</button>
      							</div>
  							</div>
  							<sup>Or</sup>
  							<div class="ms_width_off50 bg-trans">
      							<div class="ms-heading2">
      								<h3>create new account</h3>
      								<p>create your very own trenda account</p>
      							</div>
      							<div class="input-felid">
      								<label>email address</label>
      								<input type="text" placeholder="user name or email address*">
      							</div>
      							<div class="btn-submit margin-15">
      								<button class="btn-normal2" type="submit">register</button>
      							</div>
      							<h4 class="title-point">sign up today and you will be able to:</h4>
      							<ul class="check-points">
      								<li><p>speed your way through the checkout</p></li>
      								<li><p>track your orders easily</p></li>
      								<li><p>keep a record of all your purchases</p></li>
      							</ul>
  							</div>
  						</form>
  					</div>
			    </div>
		  	</div>
		</div>
		<div class="sidebars">
        	<div class="sidebar right">
	           	<a href="#" class="side_t close_cross" data-action="close" data-side="right"><span></span></a>
	        	<div class="kode_sidebar_right">
	        		<a href="#" class="kode_logo"><img src="images\footer-logo.png" alt=""></a>
	        		<ul class="kf_connect">
                        <li class="github"><a target="_blank" href="https://github.com/mehmeteyupkatirci/"><i class="fa fa-github fa-5x"></i></a></li>
                    </ul>
					<p><i aria-hidden="true" class="fa fa-copyright"></i>2018 MUSIC FOREST TEMPLATE Made by Mehmet Eyup Katirci</p>
	        	</div>
	        </div>
	    </div> 
	    <div class="search-overlay" id="kode-search-overlay">
		    <button class="close-btn" id="close-btn-button"><i class="fa fa-times"></i></button>
		    <div id="search-wrapper">
		      <form method="get" id="search-from2" action="">
		        <input type="text" value="" placeholder="Search..." id="search-felid">
		        <i class="fa fa-search search-icon"><input value="" type="submit"></i>
		      </form>
		    </div>
	  	</div>

	   <!--Jquery Library-->
	   <script src="\js\jquery.js"></script>
	   <!--Bootstrap core JavaScript-->
	   <script src="\js\bootstrap.js"></script>
	   <!--Slick Slider JavaScript-->
	   <script src="\js\slick.min.js"></script>
	   <!-- Player JavaScript -->
	   <script type="text/javascript" src="\js\jplayer\jplayer.jukebox.js"></script>
	   <script type="text/javascript" src="\js\jplayer\jquery.jplayer.min.js"></script>
	   <script type="text/javascript" src="\js\jplayer\jplayer.playlist.min.js"></script>
	   <!--Dl Menu Script-->
	   <script src="\js\dl-menu\modernizr.custom.js"></script>
	   <script src="\js\dl-menu\jquery.dlmenu.js"></script>
	   <!--chosen JavaScript-->
	   <script src="\js\chosen.jquery.min.js"></script>
	   <!--downcount JavaScript-->
	   <script src="\js\downcount.js"></script>
	   <!--Pretty Photo JavaScript-->
	   <script src="\js\jquery.prettyPhoto.js"></script>
	   <!--masonry JavaScript-->
	   <script src="\js\masonry.min.js"></script>
	   <!--Range slider JavaScript-->
	   <script src="\js\range-slider.js"></script>
	   <!--Search script JavaScript-->
	   <script src="\js\search-script.js"></script>
	   <!--Custom sidebar-->
	   <script src="\js\sidebar.min.js"></script>
	   <!-- bxslider-->
	   <script src="\js\jquery.bxslider.js"></script>
	   <!-- video-->
	   <script src="\js\video.js"></script>
	   <!-- particles-->
	   <script src="\js\particles2.js"></script>
	   <!-- particles-->
	   <script src="\js\particles.js"></script>
	   <!-- particles-->
	   <script src="\js\script-particles.js"></script>
	   <!-- stats-->
	   <script src="\js/stats.js"></script>
	   <!-- waypoint-->
	   <script src="\js\waypoint.js"></script>
	   <!--Custom JavaScript-->
	   <script src="\js\custom.js"></script>

  </body>
</html>
