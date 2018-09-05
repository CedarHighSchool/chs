<?php
$key = "AIzaSyDhcx4hw1-HrEwIywR8Oc2QwOEeV7EqOAY";
$time_min = date("Y-m-d\TH:i:sP",strtotime(date("Y/m/d")));
$time_max = date("Y-m-d\TH:i:sP",strtotime("tomorrow"));
$url = "https://www.googleapis.com/calendar/v3/calendars/ironmail.org_dgnbo22qkr1htt9p91l54l1634@group.calendar.google.com/events?key=$key&maxResults=4&timeMin=$time_min&timeMax=$time_max";
$res = file_get_contents($url);
$res = json_decode($res);

foreach($res->items as $item) {
    echo $item->summary."<br>";
}
?>