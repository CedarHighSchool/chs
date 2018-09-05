<?php
header("Content-type: text/text");
// ID: ironmail.org_dgnbo22qkr1htt9p91l54l1634@group.calendar.google.com
$key = "AIzaSyDhcx4hw1-HrEwIywR8Oc2QwOEeV7EqOAY";
$time_min = date("Y-m-d\TH:i:sP",strtotime(date("Y/m/d")));
$time_max = date("Y-m-d\TH:i:sP",strtotime("tomorrow"));
$maxRes = 1;
$url = "https://www.googleapis.com/calendar/v3/calendars/ironmail.org_dgnbo22qkr1htt9p91l54l1634@group.calendar.google.com/events?key=$key&maxResults=$maxRes&timeMin=$time_min&timeMax=$time_max&q=Day";
$res = file_get_contents($url);
$res = json_decode($res);

foreach($res->items as $item) {
    $test = $item->summary;
    switch($test) {
        case "A Day":
            $day = "A Day";
            break;
        case "B Day";
            $day = "B Day";
            break;
    }
}

echo $day;
?>