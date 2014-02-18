<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Shinkamigoto</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
</head>

<body id="home_page">
	<div id="wrapper">
	  <div id="header">
    <h1><?php require($DOCUMENT_ROOT . "/topbanner.html"); ?></h1>  <!-- loads Shinkamigoto site banner -->
			<div id="nav">
            	<?php require($DOCUMENT_ROOT . "/navbar.html"); ?> <!-- loads the navigation bar -->
			</div>
		</div>
		<div id="headline">
        <div id="video">
        <iframe src="http://player.vimeo.com/video/24620616?title=0&amp;byline=0&amp;portrait=0&amp;color=a2b170&amp;autoplay=1" width="600" height="450" frameborder="0"></iframe>
        </div>
			
            <!--<div id="photo">
            	<div>
				 <img src="images/toads.JPG" width="606" height="464" alt="Toads"> 
				</div>
        	</div>-->
			<div id="search-news">
				<?php include($DOCUMENT_ROOT . "/sidebar_right.html"); ?> <!-- loads the right side of the page with google ads -->
			</div>
		<!--	<div class="clear">
            </div>  -->
		</div>
		<div id="body">
			<div id="body-left">
		    	<h2><img src="images/Shin_welcome.png" width="260" height="20" alt="H Welcome to Shinkamigoto!" />
                </h2>
				<p>"Shinkamigoto" is the name of an area and city of Japan comprised of small islands located off the coast of Nagasaki in Kyushu.  It is perhaps most notable for its Christian influences as a result of historical status as a gateway for international trade entering Japan.  The largest industry in Shinkamigoto is fishing, and historically it is a major site for whaling. Shinkamigoto has a large number of cultural festivals, scenic views, and public beaches that are great for entertainment and sightseeing. 
            	</p> <br />
				<p>This website is here to provide information about Shinkamigoto for English speakers who are interested in the area.  The information should let visitors know what points of interest to look for and how to get around in Shinkamigoto.  In the contact page, feel free to ask questions or share your own information or media of Shinkamigoto.
           		</p>
				<p class="more"><a href="history.php">more</a></p>                 
			</div>
       
            <div id="leftcolumn">
            <h2><img src="images/featured.png" width="170" height="20" alt="Featured"></h2>
                    <!-- <img src="images/pic_3.jpg" width="172" height="92" alt="Pic 3" class="left" /> -->
                    <p><a href="getaround.php">Find out</a> how to get to these places on Shinkamigoto by viewing our <a href="maps.php">Maps</a> and <a href="transportation.php">Transportation</a> pages.</p>
                    <ul class="plussbullets">
                      <li><a href="nature.php#parks">Yagatame Park</a></li>
                        <li><a href="religsites.php#shrines">Whale Bone Shrine</a></li>
                        <li><a href="earhistory.php">Ryoma Memorial</a></li>
                  </ul>
            </div>
			<div id="body-right">
		<!--		<h2><img src="images/h_donations_for_us.gif" width="151" height="20" alt="Donations For Us"></h2>
				<p><img src="images/pic_2.jpg" width="321" height="93" alt="Pic 2"></p>
				<p>If you're looking for beautiful and professionally made templates you can find them at <a href="http://www.templatebeauty.com">Template Beauty</a>.</p>
				<p>Even more websites all about website templates on <a href="http://www.justwebtemplates.com">Just Web Templates</a>.</p>
				<p class="more"><a href="#"><img src="images/btn_click_here.gif" width="51" height="19" alt="Btn Click Here"></a></p>
			-->	
                <h2><img src="images/photo_gallery.png" width="170" height="20" alt="Photo Gallery"></h2>
				<div id="gallery">
					<a href="Gallery/album_yagatame/index.html"><img src="images/gal_1.jpg" width="105" alt="Gal 1"></a>
					<a href="Gallery/album_yagatame/index.html"><img src="images/gal_2.jpg" width="105" alt="Gal 2"></a>
					<a href="Gallery/album_yagatame/index.html"><img src="images/gal_3.jpg" width="105" alt="Gal 3"></a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="footer">
			<?php include("footer.php"); ?>
	</div>
</body>
</html>
