<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Shinkamigoto - Nature</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
    
    <script type="text/javascript" src="loadXMLDoc.js"></script>
    <script type="text/javascript" src="loadXMLString.js"></script>
    <?php include("ParseItems.php"); ?>
</head>

<body id="poi_page">
	<div id="wrapper">
	  	<div id="header">
            <h1><?php require($DOCUMENT_ROOT . "/topbanner.html"); ?> <!-- loads Shinkamigoto site banner -->
            </h1>
			<div id="nav">
            	<?php require($DOCUMENT_ROOT . "/navbar.html"); ?> <!-- loads the navigation bar -->
			</div>
		</div> <!-- header -->
        <div id="headline">
            <div id="search-news">
                <?php include($DOCUMENT_ROOT . "/sidebar_right.html"); ?> <!-- loads the right side of the page with google ads -->
            </div>
        </div>
		<div id="body">
        
<!--Beaches -->        
        <h4 id="beaches">
                <script type="text/javascript">
                    <!--
                    var beachesDoc=loadXMLDoc("nature_beaches.xml");
                    var beachesHead=beachesDoc.getElementsByTagName("items")[0].getAttribute("sectionHead");
                    document.write(beachesHead);
                    //-->
                </script>
            </h4>
            <hr class="m" />
			<?php ParseItems("nature_beaches.xml"); ?>
            <br />

<!--Parks -->   
<h4 id="parks">
                <script type="text/javascript">
                    <!--
                    var parksDoc=loadXMLDoc("nature_parks.xml");
                    var parksHead=parksDoc.getElementsByTagName("items")[0].getAttribute("sectionHead");
                    document.write(parksHead);
                    //-->
                </script>
            </h4>
            <hr class="m" />
            <?php ParseItems("nature_parks.xml"); ?>

            <br />

<!--Miscellaneous -->           
        <h4 id="misc">
                <script type="text/javascript">
                    <!--
                    var miscDoc=loadXMLDoc("nature_misc.xml");
                    var miscHead=miscDoc.getElementsByTagName("items")[0].getAttribute("sectionHead");
                    document.write(miscHead);
                    //-->
                </script>
            </h4>
            <hr class="m" />
            <?php ParseItems("nature_misc.xml"); ?>
            <br />
			<div class="clear"></div>
		</div>
	</div>
	<div id="footer">
			<?php include("footer.php"); ?>
	</div>
</body>
</html>
