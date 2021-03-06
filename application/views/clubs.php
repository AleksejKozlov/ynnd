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
            
            <ul class="breadcrumb clear">
                <li><a class="breadcrumb-link" href="">Home</a>/</li>
                <li><a class="breadcrumb-link is-active" href="">Clubs &amp; Venues</a></li>
            </ul>
            
            <h2 class="page-heading">Clubs &amp; Venues</h2>
            
            <div class="club-list-panel"> 
                <ul class="club-list">
                    <li>
                    <?php 
                    for ($i = 0; $i < 6; $i++) {
                       echo "<div class='club-list-item'>";
                            echo "<h4 class='club-list-area'>Oxford Circus, London</h4>";
                            echo "<a class='club-list-img-link' href=''>";
                                echo "<img class='club-list-img' src='../static/img/club.jpg' width='300' height='190' />";
                                echo "<h3 class='club-list-name'>China White</h3>";
                                echo "<span class='club-list-logo'>";
                                echo "<span class='club-list-logo-img' style='background: url(../static/img/club.png) 0 0; width: 206px; height: 63px;'></span>";
                                echo "</span>";
                            echo "</a>";
                            echo "<p class='club-list-description'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>";
                        echo "</div>";
                    }
                    ?>
                    </li>   
                    <li>
                    <?php 
                    for ($i = 0; $i < 6; $i++) {
                       echo "<div class='club-list-item'>";
                            echo "<h4 class='club-list-area'>The Roof Gardens, London</h4>";
                            echo "<a class='club-list-img-link' href=''>";
                                echo "<img class='club-list-img' src='../static/img/club.jpg' width='300' height='190' />";
                                echo "<h3 class='club-list-name'>China White</h3>";
                                echo "<span class='club-list-logo'>";
                                echo "<span class='club-list-logo-img' style='background: url(../static/img/club.png) 0 0; width: 206px; height: 63px;'></span>";
                                echo "</span>";
                            echo "</a>";
                            echo "<p class='club-list-description'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>";
                        echo "</div>";
                    }
                    ?>
                    </li>
                </ul>   
            </div>
            
            <div class="club-list-pagination-panel clear">
                <p class="club-list-pagination-results">
                    <span class="shown">6</span> of <span class="total">120</span> results
                </p>
                
                <ul class="club-list-pagination">
                    <?php
                    for ($i = 1; $i < 6; $i++) {
                        if ($i !== 1) {
                            echo "<li class='is-available'>".$i."</li>";
                        } else {
                            echo "<li>".$i."</li>";
                        }
                    }
                    ?>
                </ul>
                
                <div class="club-list-pagination-nav">
                    <span class="nav prev">Previous</span>
                    <span class="separator">|</span>
                    <span class="nav next is-available">Next</span>
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