<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Shinkamigoto - Contacts</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
    
  <!--  <link rel="stylesheet" type="text/css" href="gbcf-v3/files/themes/default.css" media="screen" />  -->
 	<!--[if IE]><script type="text/javascript" src="gbcf-v3/files/focus.js"></script><![endif]-->

</head>

<body id="contacts_page">
	<div id="wrapper">
	  	<div id="header">
            <h1><?php require($DOCUMENT_ROOT . "topbanner.html"); ?> <!-- loads Shinkamigoto site banner -->
            </h1>
			<div id="nav">
            	<?php require($DOCUMENT_ROOT . "navbar.html"); ?> <!-- loads the navigation bar -->
			</div>
		</div> <!-- header -->
        <div id="headline">
            <div id="search-news">
                <?php include($DOCUMENT_ROOT . "sidebar_right.html"); ?> <!-- loads the right side of the page with google ads -->
            </div>
        </div>
		<div id="body">
        	<div id="photo">
            	<div>
				<img src="images/ShinkamigotoContact.png" class="imgcenter" width="300" height="100" alt="Contact E-mail">
				</div>
        	</div>
            <div id="photo">
   	      <img src="images/miscPhotos/frogStatue.jpg" alt="frog statue" width="163" height="122" class="imgcenter" />
          	</div>
   	      <!--<?php include_once("SimpleContactForm/contact.php"); ?> -->
		  <div class="clear"></div>
		</div>
	</div>
	<div id="footer">
			<?php include("footer.php"); ?>
	</div>
</body>
</html>
