<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Shinkamigoto - News</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />

        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">  
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">  
        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96"> 
        <link rel="shortcut icon" href="/favicon.ico">
</head>

<body id="news_page">
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
        <p class='centerTitle'>News In Shinkamigoto</p>
        <p>Occasionally, major news events or announcements will be posted in this section, but for daily news and the most up-to-date disaster information, please visit the official Shinkamigoto site <a href='http://official.shinkamigoto.net/' target='_blank'>in Japanese</a> or with <a href='http://translate.google.com/translate?sl=ja&tl=en&js=n&prev=_t&hl=en&ie=UTF-8&layout=2&eotf=1&u=http%3A%2F%2Fofficial.shinkamigoto.net%2F&act=url' target='_blank'>Google translation</a></p>

			<div class="clear"></div>
		</div>
	</div>
	<div id="footer">
			<?php include("footer.php"); ?>
	</div>
</body>
</html>
