<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>YNND</title>
    
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/default.css">
	<link rel="stylesheet" href="<?php echo base_url();?>static/css/core.css">
    
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="content">
        <header>            
            <h1 class="sprites header-logo"><a href="<?php echo base_url();?>" class="header-logo-link">Your Name's Not Down</a></h1>  
    
            <ul class="header-nav">
                <li><a href="" class="header-nav-link">About</a></li>
                <li><a href="" class="header-nav-link">Register</a></li>
                <li><a href="" class="header-nav-link">Sign in</a></li>
            </ul>
            
            <span class="header-location">Location</span>
        </header>
        
        <nav>
            <span class="main-nav-side left"></span>
            <span class="main-nav-side right"></span>
            
            <ul class="main-nav">
                <li><a class="nav-link" href="">Events</a></li>
                <li><a class="nav-link is-active" href="">Club &amp; Venues</a></li>
            </ul>
        </nav>
        
        <section class="main-panel">
            <form class="search-panel" action="" method="POST">
                <label class="search-label">Search</label>
                <input class="search-input" type="text" />
                <button class="search-btn" type="submit">Go</button>
            </form>
            
            <ul class="breadcrumb clear club">
                <li><a class="breadcrumb-link" href="">Home</a>/</li>
                <li><a class="breadcrumb-link" href="">Clubs &amp; Venues</a>/</li>
                <li><a class="breadcrumb-link is-active" href="">The Roof Gardens - Kensington, London</a></li>
            </ul>
            
            <h2 class="page-heading">The Roof Gardens</h2>
                
            <div class="share-panel">
                <span class="share-name">Share</span>
                <ul class="share-list">
                    <li><a class="share-list-link sprites mail" href=""></a></li>
                    <li><a class="share-list-link sprites twitter" href=""></a></li>
                    <li><a class="share-list-link sprites facebook" href=""></a></li>
                    <li><a class="share-list-link sprites google" href=""></a></li>
                </ul>
            </div>
            
            <div class="club-panel clear">
                <h3 class="club-area">Kensington, London</h3>
                <ul class="club-registration-list">
                    <li><a class="club-registration-list-link" href="">Book a table</a></li>
                    <li><a class="club-registration-list-link" href="">Get on a guest list</a></li>
                </ul>
                
                <img class="club-img" src="../static/img/club-long.jpg" width="620" height="192" />
                
                <div class="clear">
                     <div class="club-description">
                        <p class="club-description-copy">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et d olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p class="club-description-copy">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et d olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                
                    <div class="club-contacts">
                        <h4 class="club-contacts-heading">Contact</h4>
                    
                        <div class="club-contacts-map">
                            <div class="club-contacts-google-map">
                            
                            </div>
                        </div>
                    
                        <div class="club-contacts-details">
                            <span>The Roof Gardens</span>
                            <span>Kensington High Street, London</span>
                            <span>W8 5SA</span>
                        
                            <span class="phone">Tel <span>02073683993<span></span>
                        </div>
                    </div>
                </div>
                
                <div class="bookings-panel clear">
                    <div class="booking-panel put-my-name-down-panel">
                        <h5 class="booking-panel-heading">Put your name down</h5>
                        
                        <p class="booking-panel-login-copy">You need to <a class="booking-panel-login-link" href="">Sign in</a> first.</p>
                    </div>
                
                    <div class="booking-panel book-a-table-panel">
                        <h5 class="booking-panel-heading">Book a table</h5>
                        
                        <p class="booking-panel-login-copy">You need to <a class="booking-panel-login-link" href="">Sign in</a> first.</p>
                    </div>
                </div>
                
                <div class="latest-panel">
                    <ul class="latest-nav-list">
                        <li><a class="latest-nav-list-link" href="">Events at The Roof Gardens</a></li>
                        <li><a class="latest-nav-list-link" href="">See all Events</a></li>
                    </ul>
                    <h5 class="latest-panel-heading">Events coming up at the Roof Gardends</h5>
                    
                    <ul class="latest-list clear">
                        <?php
                            for ($i = 0; $i < 3; $i++) {
                                $odd = ($i % 2 == 0) ? 'odd' : '';

                                echo "<li class='".$odd."'>";
                                    echo "<a class='latest-img-link' href='' style='background-image: url(../static/img/club-event.jpg);'></a>"; 
                                    echo "<div class='latest-copy'>";
                                        echo "<span class='latest-heading theme-1'>Event Name</span>";
                                        echo "<span class='latest-subheading theme-1'>Sat 15 July 19:00 - 03:00</span>";
                                        echo "<p class='latest-description theme-1'>Dinner with Burlesque stage shows, followed by club night, featuring classic dance floor fillers till 3am.</p>";
                                    echo "</div>";    
                                echo "</li>";
                            }
                        ?>
                    </ul>
                </div>
                
                <div class="latest-panel">
                    <ul class="latest-nav-list">
                        <li><a class="latest-nav-list-link" href="">Twitter</a></li>
                        <li><a class="latest-nav-list-link" href="">Facebook</a></li>
                    </ul>
                    <h5 class="latest-panel-heading">Latest news from the Roof Gardends</h5>
                    
                    <ul class="latest-list clear">
                        <?php
                            for ($i = 0; $i < 3; $i++) {
                                $odd = ($i % 2 == 0) ? 'odd' : '';

                                echo "<li class='higher ".$odd."'>";
                                    echo "<a class='latest-img-link' href='' style='background-image: url(../static/img/club-event.jpg);'></a>"; 
                                    echo "<div class='latest-copy'>";
                                        echo "<span class='latest-heading theme-2'>Name Surname</span>";
                                        echo "<span class='latest-subheading theme-2'>@nameSurname</span>";
                                        echo "<p class='latest-description theme-2'>Dinner with Burlesque stage shows, followed by club night, featuring classic dance floor fillers till 3am. <span class='latest-twitter-id'>#YNND</span></p>";
                                        echo "<span class='latest-time'>58 minutes ago</span>";
                                    echo "</div>";    
                                echo "</li>";
                            }
                        ?>
                    </ul>
                </div>
                
                <div class="latest-panel">
                    <ul class="latest-nav-list">
                        <li class="alone"><a class="latest-nav-list-link" href="">See all Club &amp; Venues</a></li>
                    </ul>
                    <h5 class="latest-panel-heading">Other clubs &amp; venus you might like</h5>
                </div>    
                
            </div>
            
        </section>
        
        <section class="logo-carousel-panel">
            <span class="logo-carousel-side left"></span>
            <span class="logo-carousel-side right"></span>
            
            <ul class="logo-carousel">
                <li>
                    <a href="" title="Club Name" style="background: url(<?php echo base_url();?>static/img/club.png) 0 0; width: 206px; height: 63px;">Club Name</a>
                </li>
                <li>
                    <a href="" title="Club Name" style="background: url(<?php echo base_url();?>static/img/club-2.png) 0 0; width: 185px; height: 73px;">Club Name</a>
                </li>
                <li>
                    <a href="" title="Club Name" style="background: url(<?php echo base_url();?>static/img/club.png) 0 0; width: 206px; height: 63px;">Club Name</a>
                </li>
                <li>
                    <a href="" title="Club Name" style="background: url(<?php echo base_url();?>static/img/club-2.png) 0 0; width: 185px; height: 73px;">Club Name</a>
                </li>
                <li>
                    <a href="" title="Club Name" style="background: url(<?php echo base_url();?>static/img/club.png) 0 0; width: 206px; height: 63px;">Club Name</a>
                </li>
            </ul>
        </section> 
        
        <footer>
            <ul class="footer-nav">
                <li><a href="" class="footer-nav-link no-border">Events</a></li>
                <li><a href="" class="footer-nav-link">Club &amp; Venues</a></li>
                <li><a href="" class="footer-nav-link">About</a></li>
                <li><a href="" class="footer-nav-link">Terms &amp; Conditions</a></li>
                <li><a href="" class="footer-nav-link">Privacy Policy</a></li>
                <li><a href="" class="footer-nav-link no-border">Unsubscribe</a></li>
                <li><a href="" class="footer-nav-link">Register</a></li>
                <li><a href="" class="footer-nav-link">Sign in</a></li>
            </ul>
            
            <span class="sprites footer-logo">Your Name's Not Down</span>
        </footer>
    </div>
</body>
</html>