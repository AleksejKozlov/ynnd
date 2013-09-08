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
                <li><a class="nav-link" href="">Club &amp; Venues</a></li>
            </ul>
        </nav>
        
        <section class="main-panel">
            <form class="search-panel" action="" method="POST">
                <label class="search-label">Search</label>
                <input class="search-input" type="text" />
                <button class="search-btn" type="submit">Go</button>
            </form>
            
            <section class="filter-section">
                <hgroup class="filter-panel-group">
                    <h2>Let's Get Started</h2>
                    <h3>Enter your gameplane below...</h3>
                </hgroup>
            
                <div class="filter-panel">
                    <p class="filter-sentence">
                        "I'm in <span class="theme-1" data-filter="city">London</span>, I want to go out in <span class="theme-2" data-filter="area">any area</span>, <br/> I want to go to <span class="theme-1" data-filter="club">any club</span> on <span class="theme-1" data-filter="day">any day</span> and I like <span class="theme-1" data-filter="genre">any genre</span>".
                    </p>
                    
                    <ul class="filter-selection city is-hidden">
                        <li>London,</li>
                        <li>Moscow</li>
                    </ul>
                    
                    <ul class="filter-selection area is-hidden">
                        <li>Shoreditch,</li>
                        <li>Canary Wharf</li>
                    </ul>
                    
                    <ul class="filter-selection club is-hidden">
                        <li>Club 1,</li>
                        <li>Club 2</li>
                    </ul>
                    
                    <ul class="filter-selection day is-hidden">
                        <li>Today,</li>
                        <li>Tomorrow</li>
                    </ul>
                    
                    <ul class="filter-selection genre is-hidden">
                        <li>Genre 1,</li>
                        <li>Genre 2</li>
                    </ul>
                </div>
                
                <form class="filter-form" action="" method="POST">
                    <input class="is-hidden" type="text" />
                    <button class="search-btn" type="submit">Go</button>
                </form>
            </section>
            
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