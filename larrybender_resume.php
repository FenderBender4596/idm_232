<?php include 'includes/larryResumeData.php'; ?>
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

<div class="resume">
<h1 class="resumeHeader">Resume</h1>
<div class="listItems">
<br>
<h1>Areas Of Expertise</h1>
<br>
	<ul>
		<li>Leadership</li>
		<li>Management and mentoring</li>
		<li>Art Direction</li>
		<li>Visual communication</li>
		<li>Eidtorial review</li>
		<li>Vendor management</li>
		<br>
		<li>budget planning, oversight</li>
		<li>brand development and stewardship</li>
		<li>development of targeted data-driven communication plans</li>
		<br>
		<li>SEO and campaign analytics</li>
		<li>Full Uunderstanding of enrollment funnel and student life cycle</li>
		<li>Adobe Creative Suite</li>
	</ul>
<br>
<h1>Career</h1>

<div class="career">
<?php 
$query = "SELECT * FROM larry_resume";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
	// $startYear = $row['start_year'];
	// $endYear = $row['end_year'];
	// $job = $row['job'];
	// $wrkStuff = $row['duties'];
	// $skills = $row['skills'];
	echo "<hr>";
	echo "<p>" . $row['end_year'] . " - " . $row['start_year'] . ":</p>"; 
	echo "<p>" . $row['job'] . "</p>";
	echo "<p>" . $row['duties'] . "</p>";
	echo "<p>" . $row['skills'] . "</p>";
	echo "<hr>";

}
 ?>
</div>

<h1>Education</h1>

	<h2>1984-1992: Parsons School Of Design and Otis Art Institute of Parsons School Of Design</h2>
	<br>
	<h2>New York, NY and Los Angeles, CA</h2>
	<ul>
		<li>Bachelor of Fine Art</li>
	</ul>

<h1>Awards and Honors</h1>

	<h2>Drexel University's Presidents Award 2010-2012</h2>
	<br>
	<h2>Telly Awards</h2>
	<ul>
		<li>31st Annual - Bronze</li>
		<li>33rd Annual - Double Bronze</li>
		<li>35th Annual - Double Bronze</li>
	</ul>
	<br>
	<h2>Admissions Advertising Awards</h2>
	<ul>
		<li>19 Annual - Gold Award</li>
		<li>20 Annual - Merit Award</li>
		<li>21 Annual - Silver and Merit Awards</li>
		<li>22 Annual - Silver, Bronze, and Merit Awards</li>
		<li>23 Annual - Merit Award</li>
		<li>24 Annual - Merit Award</li>
		<li>27 Annual - Gold Award</li>
	</ul>
	<br>
	<h2>Awards for Publication Excellence</h2>
	<ul>
		<li>2007 Award of Excellence</li>
		<li>2008 Award of Excellence</li>
	</ul>
	<br>
	<h2>Beacon Awards</h2>
	<ul>
		<li>2005 Direct Mail Awards Finalist</li>
		<li>2008 Gold Beacon Awards Finalist</li>
	</ul>
	<br>
	<h2>Service Industry Advertising Awards</h2>
	<ul>
		<li>2005 - Merit Award</li>
		<li>2006 - Silver and Merit Awards</li>
		<li>2007 - Silver and Merit Awards</li>
	</ul>
	<br>
	<h2>Cuppie Awards</h2>
	<ul>
		<li>2013 - Double Bronze</li>
		<li>2015 - Gold, Silver, Double Bronze</li>
		<li>2016 - Double Silver</li>
	</ul>

</div>	
</div>
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