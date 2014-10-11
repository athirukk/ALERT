<!DOCTYPE html> 
<html> 
    <head> 
    <title>WeCare Alerting System</title> 
	<link rel="shortcut icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>

</head> 
<body> 

<div data-role="page" data-theme="e" id="wecarehomepage">

    <div data-role="header" data-position="fixed">
        <h1>Welcome to WeCare</h1>
    </div><!-- /header -->

    <div data-role="content"> 
        <form method="post" action="submitref.php">
  <div class="ui-field-contain">
    <label for="fullname">Full name:</label>
    <input type="text" name="fullname" id="fullname">

	    <label for="contactnum">Contact Number</label>
    <input type="number" name="contactnum" id="contactnum">
	
	<label for="textarea">Address</label>
	<textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
	


    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" placeholder="Your email..">
  </div>
</form>        
    </div><!-- /content -->

    <div data-role="footer">
        <h4>Copyrighted © 2014</h4>
    </div><!-- /footer -->
</div><!-- /page -->

</body>
</html>