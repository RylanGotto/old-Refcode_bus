<?php include 'php/function.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="css/divStyle.css" />
        <link rel="stylesheet" type="text/css" id="gridsystem" href=""  />
        <!--jQuery-->	
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <!--Div Vert Sliding Script-->
        <script src="js/divslide/sliding.effect.vert.nav.js"></script>
        <!--Div Scrolling Script-->
        <script  src="js/divslide/jquery.scrollto.js"></script>
        <!--Nav Icon-Social Script-->
        <script  src="js/navslide/sliding.effect.icon.js"></script>
        <!--Validation Jquery Script-->
        <script  src="js/jquery.validate.min.js"></script>
        <!--Contact/Mailing-List Ajax Submission Scripts-->
        <script  src="js/ajax/mailinglist.form.submit.js"></script>
        <script  src="js/ajax/contact.form.submit.js"></script>
        
        <script src="js/setCSS.js"></script>
        <title>PennyFortune.ca</title>
    </head>
    <body>

        <div class="container_12" id="big_wrapper">

            <div id="top_header">
                <img src="css/images/banner5.png" id="banner"/>
              <nav id="top_menu">
                    <ul>
                        <li id="link" ><a   href="#">Home</a></li>
                        <li id="link1"><a  href="#">News-Events</a></li>
                        <li id="link2"><a  href="#">Photos</a></li>
                        <li id="link3"><a  href="#">Biography</a></li>
                        <li id="link4"><a  href="#">Contact Us</a></li>
                        <li id="link5"><a  href="#">Shout-Outs</a></li>
                    </ul>

                </nav>
            </div>
            <div class="grid_12" id="main_div">
   <div class="grid_3" id="maillist">
                       <form name="myform" id="myform"  action="" method="POST">  

<!-- The Name form field -->
     <p><h2>Join our mailing list!</h2></br><strong>to recieve emails keeping you up to date on up coming shows, news and events from PennyFortune!</strong>
    <input type="text"  name="email" id="email"/>
<!-- The Submit button -->
	<input type="submit" name="submit" id="submit" value="Submit"> </p>

</form>
                    </div>
                <div class="grid_8" id="contentDiv">


                    <iframe  id="videoplayer" src="http://www.youtube.com/embed/videoseries?list=PLE701DD1CBC0E59E0&amp?;wmode=transparent" frameborder="0" allowfullscreen></iframe>

                    <div id="socialnav">
                        <ul>
                            <li ><a  href="http://www.facebook.com/pages/Penny-Fortune/146266633253"><img  src="css/images/icons/facebook.png"/></a></li>
                            <li ><a  href="http://www.youtube.com/user/PennyFortune"><img  src="css/images/icons/youtube.png"/></a></li>
                            <li ><a  href="http://www.flickr.com/photos/77657071@N07"><img  src="css/images/icons/flickr.png"/></a></li>
                            <li ><a  href="http://twitter.com/#!/Penny_Fortune"><img  src="css/images/icons/twitter.png"/></a></li>
                        </ul>
                    </div>
                   
                </div>
                <div id="results"></div>
                <div id="scrollArt"></div>
                <div id="contentArt1" class="grid_8">
                    <header>
                        <h1>New-</h1>
                    </header>
                    <strong>News</strong>
                    <ul>
                        <li>
                            Just Finalized the new EP. Available on Itunes by summer 2012! Or contact us for your copy.</li>
                        <li>
                            PF T-Shirts available! Big thanks to GFI clothing (check em out!) men's and women's cuts in Red and Black.</li>
                        <li>
                            CD's including our most recent tracks available for only 5 dollars! (14 Tracks)</li>
                        <li>
                            Penny Fortune walked away with 1st place after being 1 of 25 bands that entered from all over Alberta into Lethbridge College's BandWars 2011.</li>
                        <li>
                            For bookings please visit our contact page.
                        </li>
                    </ul>





                    <strong>Upcoming Events</strong></br>
                    <ul>
                        <li> Join our mailing-list and visit our facebook page to follow the event links for more info.</li>
                        <strong>Recent Shows</strong>
                        <li> @ The Stone with Bedouin Soundclash and The Necessities</li>

                        <li> The university of Lethbridge's Ocean Party 2010 with Hey Ocean & Wasabi Collective</li>

                        <li> BandWars at Lethbridge College's DA Electric Barn (1st Place!)</li>

                        <li> University of Lethbridge's Beach Bash at Henotic with Michael Bernard Fitzgerald</li>

                        <li> Lethbridge College's Ender Bender with Smokestack Jacks</li>

                        <li> Unmask the Hunger Masquerade Fundraiser at Lethbridge's The Stone</li>

                        <li> The Stone's Malibu Beach Party</li>

                        <li> @ The Blind Beggar with Andrew F & King Dylan</li>
                    </ul>
                </div>
                <div id="scrollArt1"></div>
                <div id="contentArt2" class="grid_8">
                    <iframe src="gallview/galleryview.html?wmode=transparent" scrolling="no"  id="galleryview"></iframe>
                </div>
                <div id="scrollArt2"></div>
                
                <div id="contentArt3" class="grid_8">
                    <img src="css/images/backgr.jpg" />
                    
                    <video id="biovid"   src="videos/1.mp4" controls></video>
                    <video id="biovid2"  src="videos/2.mp4" controls></video>
                </div>
        
                <div id="scrollArt3">   
                </div>
                
                <div id="contentArt4" class="grid_8">
                    <div id="booking"> 	
                         Or you can send Myles and Jemery an email @ myles@pennyfortune.ca or Jeremy@pennyfortune.ca.
                        <p>For bookings either send </br>the band a message
                            directly.</br>
                            or you can hit them up on</br>
                        <a href="http://www.facebook.com/pages/Penny-Fortune/146266633253"><img id="fbicon" src="css/images/icons/facebooksml.png" /></a></br>
                      
                    
                        </p>
                       
                            
                        
                    </div>
                    
                        <?php contactForm(); ?>
                    
                </div>




            </div>

            
                <img  id="foot" class="grid_12" src="css/images/footer.png" />
            

        </div>


    </div>

</body>
</html>
