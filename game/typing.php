<?php
include("../assets/inc/include.php");
include("../assets/inc/gameinfo.php");
$manage = new Manager();
$mysqli = $manage->database();
$check = $mysqli->query("SELECT * FROM `game_typing` WHERE `player`=".$manage->get_user()['id']);
if($check->num_rows > 0) {
  die("<h3>Sorry, you've already done the typing contest. Contact someone in charge of the Hunt if you think you should be able to play.</h3>");
}
if(!$GAME_UP){
	die("<h2>Sorry, the Hunt is down for maintenance.</h2>");
}
if(!$TYPING_UP && $_SESSION['username']!="andersmmg") {
	die("<h2>The typing contest is not open.</h2>");
}
if(!isset($_SESSION['game_username'])){
	die("You are not logged in. <a href=\"//chs.ironk12.org/game/login.php\">Log In</a>");
}
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style>
body {
  padding-top: 20px;
  font-family: Roboto, sans-serif;
  text-align: center;
  background: #fff;
  color: #222;
  padding-bottom: 40px;
  background: url(http://djave.co.uk/hosted/subtlepatterns/lightpaperfibers.png);
}

#focus {
  background: rgba(255, 0, 0, 0.7);
  padding: 20px;
  font-weight: bold;
  font-size: 30px;
  color: #fff;
}

.mono {
  font-family: "Cutive Mono", monospace;
}

.wrong {
  background: #99f;
  color: #fff;
}

hr {
  margin: 1em 0;
  max-width: 800px;
  border: none;
  border-top: 1px solid rgba(255, 255, 255, 0.3);
  margin: 0 auto;
}

.results {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
}

.stats {
  overflow: hidden;
  margin-bottom: 1em;
  height: 100px;
  list-style: none;
  padding: 5px 0;
  font-size: 16px;
  font-weight: 900;
  max-width: 1000px;
  margin: 0 auto;
}
.stats li {
  width: 25%;
  float: left;
}

.target {
  color: #fff;
  text-align: left;
  font-size: 32px;
  min-width: 300px;
  min-height: 40px;
  width: 600px;
  display: inline-block;
  position: relative;
  white-space: pre;
  background: #333;
  box-shadow: inset 0 0 10px 0 rgba(255, 255, 255, 0.2);
  padding: 22px 10px 10px;
}
.target:after {
  content: '';
  position: absolute;
  width: 20px;
  height: 2px;
  background: #f00;
  left: 10px;
  top: 53px;
  -webkit-animation: cursor_flash .5s infinite;
  animation: cursor_flash .5s infinite;
}
.target:before {
  font-family: Roboto;
  top: 0;
  left: 0;
  right: 0;
  background: #000;
  content: 'Type the text below';
  text-transform: uppercase;
  font-size: 10px;
  padding: 2px;
  text-align: left;
  position: absolute;
  color: #fff;
}

@-webkit-keyframes cursor_flash {
  0% {
    background: #fff;
  }
  50% {
    background: #99f;
  }
  100% {
    background: #fff;
  }
}
@keyframes cursor_flash {
  0% {
    background: #fff;
  }
  50% {
    background: #99f;
  }
  100% {
    background: #fff;
  }
}
.button {
  display: inline-block;
  padding: 8px 10px;
  background: #057f24;
  border-radius: 2px;
  color: #fff;
}

#textarea {
  position: absolute;
}

.spell {
  font-size: 40px;
  font-weight: 900;
  letter-spacing: 2px;
}
.spell span {
  color: #2222ff;
}

textarea {
  color: #fff;
  width: 60%;
  margin: 1em auto;
  display: none;
  position: relative;
  white-space: pre;
  background: #333;
  box-shadow: inset 0 0 10px 0 rgba(255, 255, 255, 0.2);
  border: 1px solid rgba(255, 255, 255, 0.4);
}

.your-attempt {
  background: #222;
  color: #fff;
  padding: 10px;
  min-height: 100px;
  border: 1px solid #555;
  max-width: 600px;
  margin: 2em auto;
  white-space: pre-wrap;
}

.results {
  font-family: Roboto;
}

.settings {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 3px 6px 6px;
  background: #444;
  font-family: Roboto, sans-serif;
  color: #999;
  text-align: left;
  text-shadow: 0 0 6px rgba(0, 0, 0, 0.6);
  border-top: 3px solid #222;
  font-size: 12px;
}
.settings a {
  color: #fff;
  -webkit-transition: color 0.2s;
  transition: color 0.2s;
  text-decoration: none;
}
.settings a:hover {
  color: #ccf;
}

.twitter a {
  color: rgba(255, 0, 0, 0.7);
  text-decoration: none;
}
.twitter a:hover {
  text-decoration: underline;
}

</style>
<script>
$(function() {
/*
 * The animation at the start, made from my previous pen
 * https://codepen.io/EightArmsHQ/pen/HJsav
 */

// The base speed per character
time_setting = 30;
// How much to 'sway' (random * this-many-milliseconds)
random_setting = 100;
// The text to use NB use \n not real life line breaks!
input_text = "How fast can you type?";
// Where to fill up
target_setting = $("#output");
// Launch that function!
type(input_text, target_setting, 0, time_setting, random_setting);

function type(input, target, current, time, random){
  // If the current count is larger than the length of the string, then for goodness sake, stop
	if(current > input.length){
    // Write Complete
		console.log("Complete.");
	}
	else{
	 // console.log(current)
    // Increment the marker
		current += 1;
    // fill the target with a substring, from the 0th character to the current one
		target.text(input.substring(0,current));
    // Wait ...
		setTimeout(function(){
      // do the function again, with the newly incremented marker
			type(input, target, current, time, random);
      // Time it the normal time, plus a random amount of sway
		},time + Math.random()*random);
	}
}

/*
 * The typing test stuff
 */

var character_length = 31;
var index = 0;
var letters =  $("#input_text").val();
var started = false;
var current_string = letters.substring(index, index + character_length);

var wordcount = 0;

$("html, body").click(function(){
  $("#textarea").focus();
});

$("#target").text(current_string);
$(window).keypress(function(evt){
  if(!started){
    start();
    started = true;
  }
  evt = evt || window.event;
  var charCode = evt.which || evt.keyCode;
  var charTyped = String.fromCharCode(charCode);
  if(charTyped == letters.charAt(index)){
    if(charTyped == " "){
      wordcount ++;
      $("#wordcount").text(wordcount);
    }
    index ++;
    current_string = letters.substring(index, index + character_length);
    $("#target").text(current_string);
    $("#your-attempt").append(charTyped);
    if(index == letters.length){
      wordcount ++;
      $("#wordcount").text(wordcount);
      $("#timer").text(timer);
      if(timer == 0){
        timer = 1;
      }
      wpm = Math.round(wordcount / (timer / 60));
      $("#wpm").text(wpm);
      stop();
      finished();
    }
  }else{
    $("#your-attempt").append("<span class='wrong'>" + charTyped + "</span>");
    errors ++;
    $("#errors").text(errors);
  }
});

var timer = 0;
var wpm = 0;
var errors = 0;
var interval_timer;

$("#reset").click(function(){
  reset();
});

$("#change").click(function(){
  $("#input_text").show().focus();
});

$("#pause").click(function(){
  stop();
});

$("#input_text").change(function(){
  reset();
});

function start(){
  interval_timer = setInterval(function(){
    timer ++;
    $("#timer").text(timer);
    wpm = Math.round(wordcount / (timer / 60));
    $("#wpm").text(wpm);
  }, 1000)
}

function stop(){
  clearInterval(interval_timer);
  started = false;
}

function reset(){
  $("#input_text").blur().hide();;
  $("#your-attempt").text("");
  index = 0;
  errors = 0;
  clearInterval(interval_timer);
  started = false;
  letters = $("#input_text").val();
  $("#wpm").text("0");
  $("#timer").text("0");
  $("#wordcount").text("0");
  timer = 0;
  wpm = 0;
  current_string = letters.substring(index, index + character_length);
  $("#target").text(current_string);
}

function finished(){
  alert("Congratulations!\nWords per minute: " + wpm + "\nWordcount: " + wordcount + "\nErrors:" + errors);
  $.post( "donetyping.php", { wpm: wpm, errors: errors })
  .done(function( data ) {
    alert( data );
  });
}

var window_focus;

$(window).focus(function() {
    window_focus = true;
}).blur(function() {
  window_focus = false;
});

$(document).ready(function(){
  if(window_focus){
    // $("#focus").hide();
  }
  $(window).focus(function() {
    // $("#focus").hide();
  });
});
//Cedar High School is the best school in the Milky Way Galaxy. I am playing in the Hunt for points. I want to win the Hunt.
});
</script>
<title>Hunt Typing Challenge</title>
<link href='https://fonts.googleapis.com/css?family=Cutive+Mono|Roboto:400,900,700' rel='stylesheet' type='text/css'/>
<p id="focus">Hunt Typing Challenge</p>
<h1 id="output"></h1>
<div class="target mono" id="target"></div>
<div id="your-attempt" class="mono your-attempt" placeholder="Your text will appear here"></div>
<div class="results">
  <ul class="stats">
    <li>Words per minute <span id="wpm">0</span></li>
    <li>Wordcount <span id="wordcount">0</span></li>
    <li>Timer <span id="timer">0</span></li>
    <li>Errors <span id="errors">0</span></li>
  </ul>
</div>
<hr style="clear:both;" />
<div>
<textarea name="" id="input_text" cols="30" rows="10">Cedar High School is the best school in the Milky Way Galaxy. I am playing in the Hunt for points. I want to win the Hunt.</textarea>
</div>
<div class="settings">
  <a href="#" id="reset">Reset</a>
</div>