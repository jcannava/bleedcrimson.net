<?php
$wap_title="bleedcrimson.net"; // Your Sites Name
$to = "jason@cannavale.com"; // Your Email Address
$dbpre = ""; // Your Database Prefix
$no_list = "5"; //Number of Stories to list in category page, there is a 2 page limit
$dbn = "bcnet"; // Your Database Name
$host = "localhost"; // Your Host Name, You can probably leave this as it is
$user = "bc"; // Your DataBase User Name
$pass = "goaggies"; // Your DataBase Password
$trim = "1150"; // File Size To Be Split For Stories (recomended to be set at 1150 for Mobile phones)

function DB_conn($dbn, $host, $user, $pass) {
 $link = mysql_connect("$host", "$user", "$pass") or die ("Could not connect to database $dbn.\n");
 $db = mysql_select_db($dbn, $link) or die ("Could not open $dbn.\n");
}

function DB_close() {
        mysql_close($link);
}

function bcnet_header() {
        header("Content-Type: text/vnd.wap.wml");
        echo "<?xml version=\"1.0\"?>\n";
        echo " <!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.1//EN\"\n \"http://www.wapforum.org/DTD/wml_1.1.xml\">\n"; 
}

function bc_date() {
        $today = date("F j, Y");
        printf("<small>$today</small>\n");
}
?>
