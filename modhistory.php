<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Shinkamigoto - Modern History</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
    
    <script type="text/javascript" src="loadXMLDoc.js"></script>
    <script type="text/javascript" src="loadXMLString.js"></script>
    <?php include("ParseItems.php"); ?>
</head>

<body id="history_page">
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
        	<p>Shinkamigoto was formed in 2004 as the result of a merge between the smaller towns of Kamigoto, Aokata, Shinuonome, Arikawa, and Tainoura, and encompasses Nakadori and Wakamatsu islands.
<br /><br />
Here is a break down of the name and its meaning: <br />
        	  Shin (新) = new
  <br />
        	  Kami (上) = upper/northern
  <br />
        	  Go (五) = five
  <br />
        	  Tou (島) = island
  <br /> <br />
        	  The primary industry for Shinkamigoto is and has been fishing.  As of late, some churches have been closing down as the number of active Christians in Japan declines.
      	    </p>
            <br />
            <p>While Christianity is still a significant part of Shinkamigoto's culture, the overall number of followers has been decreases.  This 2008 <a href="http://vietcatholic.net/News/Html/53786.htm" target="_blank">article</a><!-- additional link http://www.nytimes.com/2008/04/06/world/asia/06iht-catholic.1.11698465.html --> provides a very in depth view of the current state of Christianity in Shinkamigoto, a former safe-haven for the secret Christians.
            </p>
            <br />
            <br />
            
            
     <!-- Modern Historic Sites -->
           <h4>
                <script type="text/javascript">
                    <!--
                    var sitesDoc=loadXMLDoc("modhistory_sites.xml");
                    var sitesHead=sitesDoc.getElementsByTagName("items")[0].getAttribute("sectionHead");
                    document.write(sitesHead);
                    //-->
                </script>
            </h4>
            <hr class="m" />
           <?php ParseItems("modhistory_sites.xml"); ?>
            <br />        
            
            
			<div class="clear"></div>
		</div>
	</div>
	<div id="footer">
			<?php include("footer.php"); ?>
	</div>
</body>
</html>
