<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type=text/css href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Oswald|Raleway" rel="stylesheet">
	<title>Home</title>
</head>

<body>
<div class="nav">

<svg version="1.1" class="menu_button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
<path class="menu_bars" d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2
	c0,1.104,0.896,2,2,2h24c1.104,0,2-0.896,2-2C30,14.896,29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24
	c1.104,0,2-0.896,2-2S29.104,22,28,22z"/>
</svg>

<svg version="1.1" class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
<polygon fill="none" points="292.893,150 8.04,150 13.652,109.211 298.505,109.211 "/>
<text transform="matrix(0.9962 0 -0.0872 0.9962 10.8545 139.4619)" fill="#FFF8E8" font-family="'Oswald-Light'" font-size="36.1375">Larry Bender Design</text>
</svg>

	<ul class="navBar">
		<li><a href="larrybender_home.php">Home</a></li>
		<li><a href="larrybender_about.php">About</a></li>
		<li><a href="larrybender_resume.php">Resume</a></li>
	</ul>

</div>


<div class="wrapper">
<div class="container">

<img class="dad" src="img/me.jpg" alt="larrybender">
<h1 class="aboutHead">About</h1>

<p class="bioBoxes">
I am a graduate of Parsons School of Design, with over 20 years of design and marketing experience and have working for agency, non-profits, and institutes of higher education. As Creative Director and founding member for Drexel University’s award winning Communications and Marketing team, I have helped to guide the university’s brand and marketing efforts. 
 
My expertise includes print and electronic media, as well as having art directed both commercial and video projects. During my tenure at Drexel the team has been recognized and won numerous Telly’s, Communicators, Admission Advertising, Beacon, and Cuppie Awards.
</p> 

<form class="contactForm" name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top"">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input class="submit" type="submit" value="Submit">
 </td>
</tr>
</table>
</form>	

</div>	
</div>

<footer>
	<div class="contactMe">
		<ul class="contactInfo">
			<li>610-283-3381</li>
			<li>larrybenderdesign@gmail.com</li>
			<li>302 Flourtown Road, Lafayette Hill, PA, 19444</li>
		</ul>	
	</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>
</body>

</html>