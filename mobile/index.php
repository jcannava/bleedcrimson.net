<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3329678-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<html><head><title>bleedcrimson.mobi</title>
<meta name="verify-v1" content="2uYCTMNWFVHLS0ebntTagLnvlgdp5I8JJHfMrqip3hA=" />
<?php
 // mobile.bc.net configuration information
 require_once('config.php');

 // connect to MySQL database
 db_conn('bcnet','localhost','bc','goaggies');

 // Set pagination variables
 $limit = 10;
 $query_count = "SELECT * from node WHERE type='story' OR type='blog' AND status='1'";
 $res_cnt = mysql_query($query_count);
 $num_rows = mysql_num_rows($res_cnt);

 $page = $HTTP_GET_VARS['page'];
 if ( empty($page) ) {
	$page = 1;
 }
 $limitvalue = $page * $limit - ($limit);
?>

<style type="text/css">
<!-- 
	body { font-size : 10pt; margin 0 5px; } 
	p { margin : 1px 0; }
	hr { color : #ccc; size : 1; }
	a { color : #882345; } 
-->
</style>

<p> <img src="http://www.bleedcrimson.mobi/mobileheader.jpg" alt="bleedcrimson.mobi" height="75" width="315" /> <br/> 
 <?php bc_date(); ?>
</p>
<br/>
<?php
      // Passed from initial page.
      if ( $HTTP_GET_VARS['id'] ) {
	$id = $HTTP_GET_VARS['id'];
	$result = mysql_query("SELECT * from  node_revisions where nid='$id'"); 
	$row = mysql_fetch_object($result);
	$title = $row->title;
	$title =  ereg_replace("&", "&amp;", $title); 
	print "<p><b>".$title."</b></p>";
	$teaser = $row->teaser;
	$teaser =  ereg_replace("&", "&amp;", $teaser); 
	$teaser = nl2br($teaser);
	print "<p>$teaser<br/><br/></p>";
	print "<p><a href=\"index.php?rm=$id&page=$page\">Read Entire Article</a><br/><a href=\"index.php?page=$page\">Back to bleedcrimson.mobi</a></p>";
      }
      // Passed from Article Teaser
      else if ( $HTTP_GET_VARS['rm'] ) {
	$id = $HTTP_GET_VARS['rm'];
	$result = mysql_query("SELECT * from  node_revisions where nid='$id'"); 
	$row = mysql_fetch_object($result);
	$title = $row->title;
	$title =  ereg_replace("&", "&amp;", $title); 
	print "<p><b>". $title . "</b></p>";
	$body = $row->body;
	$body =  ereg_replace("&", "&amp;", $body); 
	$body = nl2br($body);
	print "<p>$body<br /><br /></p>";
	print "<p><a href=\"http://bleedcrimson.mobi/index.php?page=$page\">Back to bleedcrimson.mobi</a></p>";
      }
      else {
      	$result = mysql_query("SELECT * FROM node WHERE type='story' OR type='blog' AND status='1' ORDER BY created desc LIMIT $limitvalue, $limit");
	print "<p>";
      	while ( $row = mysql_fetch_object($result) ) {
        	$id = $row->nid;
        	$title = $row->title;
		$title =  ereg_replace("&", "&amp;", $title); 
		
		// Get Author
		$uid = $row->uid;
		$user = mysql_query("SELECT name FROM users where uid='$uid' LIMIT 1");
		$uname = mysql_fetch_object($user);
		$username = $uname->name;

		// Get Timestamp
		$ts_query = mysql_query("SELECT * FROM node_revisions where nid='$id' LIMIT 1");
		$ts_res = mysql_fetch_object($ts_query);
		$ts = $ts_res->timestamp;

 		// Print Links to Articles
                printf("<a href=\"http://bleedcrimson.mobi/index.php?id=$id\">$title</a><br/>Posted by: $username on ".date("M d Y", $ts). " at ". date("g:i:s a", $ts) ."<hr size=1/>");
      	}
	print "</p>";
	mysql_free_result($result);
      }

      if (!$HTTP_GET_VARS['id'] && !$HTTP_GET_VARS['rm']) {
	if ( $page != 1 ) {
		$pageprev = $page - 1;
		print("<a href=\"$PHP_SELF?page=$pageprev\">Previous ".$limit."</a>&nbsp;&nbsp;");
	}
	
	$numofpages = $num_rows / $limit;
	$numofpages = ceil($numofpages);
	if ( $page < $numofpages ) {
		$pagenext = $page + 1;
		print("<a href=\"$PHP_SELF?page=$pagenext\">Next ".$limit."</a>");
	}	
       }
	print "<br/>";
?>

<br/>
<p>
Copyright &copy; bleedcrimson.net, All rights reserved.  All images, content and other material from external sources is copyright of its respective owner.<br/>
Site design by bleedcrimson designs &copy; 2005-2007<BR/>
</p>
</html>

