<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="http://www.thesoftwareguy.in/favicon.ico" type="image/x-icon" />
    <!--iOS/android/handheld specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Detect user timezone using javascript and display current date/time based on their timezone.">
    <meta name="keywords" content="javascript, timezone, jquery, date">
    <meta name="author" content="Shahrukh Khan">
    <title>Detect user timezone using javascript - thesoftwareguy</title>
    <link rel="stylesheet" href="style.css" type="text/css" />

    <!-- REQUIRED FOR FETCHING USER TIME ZONE -->
    <script type="text/javascript" src="jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="jstz-1.0.4.min.js"></script>
    <script type="text/javascript" src="moment.min.js"></script>
    <script type="text/javascript" src="moment-timezone.js"></script>
    <script type="text/javascript" src="moment-timezone-data.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        var tz = jstz.determine();
        var timezone = tz.name();
        //$("#tz").html(timezone);
		document.getElementById('input_country').value = timezone;
        
        // display current time based on user location
        var current_time =  moment().tz(timezone).format('MMMM Do DD YYYY, h:mm:ss a  dddd');
        $("#time").html(current_time);
        //document.getElementById('input_datetime').value = current_time;
		
      });
    </script>
    <!-- REQUIRED FOR FETCHING USER TIME ZONE -->
  </head>
  <body>
    <div id="container">
      <div id="body">
        <div class="mainTitle" >Detect user timezone using javascript</div>
        <div class="height20"></div>
        <article>
          <div class="title" >Your current timezone is: <span id="tz" style="color: #6D37B0;"></span> and time: <span id="time" style="color: #6D37B0;"></span></div>
		  <input type="text" id="input_country" />
		  
		  <input type="text" id="input_datetime" />
        </article>
        <div class="height10"></div>
		<footer>
          <div class="copyright"> &copy; 2013 - 2014 <a href="http://www.thesoftwareguy.in" target="_blank">www.thesoftwareguy.in</a>. All rights reserved </div>
          <div class="footerlogo"><a href="http://www.thesoftwareguy.in" target="_blank"><img src="http://www.thesoftwareguy.in/thesoftwareguy-logo-small.png" width="200" height="47" alt="thesoftwareguy logo" /></a> </div>
        </footer>
      </div>
    </div>
  </body>
</html>