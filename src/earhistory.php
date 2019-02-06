<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Shinkamigoto - Early History</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
    
    <script type="text/javascript" src="loadXMLDoc.js"></script>
    <script type="text/javascript" src="loadXMLString.js"></script>
    <?php include("ParseItems.php"); ?>
</head>

<body id="history_page">
	<div id="wrapper">
	  	<div id="header">
            <h1><?php require(getenv("DOCUMENT_ROOT") . "/topbanner.html"); ?> <!-- loads Shinkamigoto site banner -->
            </h1>
			<div id="nav">
            	<?php require(getenv("DOCUMENT_ROOT") . "/navbar.html"); ?> <!-- loads the navigation bar -->
			</div>
		</div> <!-- header -->
        <div id="headline">
            <div id="search-news">
                <?php include(getenv("DOCUMENT_ROOT") . "/sidebar_right.html"); ?> <!-- loads the right side of the page with google ads -->
            </div>
        </div>
		<div id="body">
        	<p>Throughout the life of Japan, the primary passage of travel and trade was through the Southwest area, now known as Nagasaki-ken.  Thusly, the Goto islands have seen much infuence from Chinese, Dutch, and Korean traders and missionaries.  During the Edo era, international trade was cut-off and all foreigners banned from Japan.  Part way through the Edo era (1603-1867), Christianity was also banned, however, many Christian followers receded to the remote islands and mountains of Japan and continued to practice their religion in secret.  Shinkamigoto's Nakadori island (main island) was a primary haven for these secret Christians (primarily Roman Catholic).  Many Christian churches have been constructed on the island and are open to visitors.  A list of the churches and their locations can be found on the <a href="religsites.php#churches">Churches</a> page.
            </p>
            <br /><br />
            
            
            <!-- Early Historic Sites -->
           <h4>
              <?php GetSectionHead("earhistory_sites.xml"); ?>
            </h4>
            <hr class="m" />
            
            <?php ParseItems("earhistory_sites.xml"); ?>
            <br />
  
            
			<div class="clear"></div>
		</div>
	</div>
	<div id="footer">
			<?php include("footer.php"); ?>
	</div>
</body>
</html>
