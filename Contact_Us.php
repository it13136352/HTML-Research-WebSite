<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Big Business 2.0
Description: A two-column, fixed-width design with a bright color scheme.
Version    : 1.0
Released   : 20120624
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>මහෞෂධ 2</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.1.js"></script>
<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
		
	});
</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="index.html">මහෞෂධ 2</a></h1>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li class="first">
            <li><a href="index.html">Home</a></li>
				<li>
				<span class="opener" >Domain<b></b></span>
				<ul>
					<li><a href="Literature_survey.html">Literature survey</a></li>
					<li><a href="Research_Gap.html">Research Gap</a></li>
					<li><a href="problem.html">Problem to be addressed</a></li>
				</ul>
			</li>
            <li>
				<span class="opener">Milestones<b></b></span>
				<ul>
					<li><a href="Project_Proposal.html">Project Proposal</a></li>
					<li><a href="SRS_Presentation.html">SRS Presentation</a></li>
					<li><a href="Prototype_Presentation.html">Prototype Presentation</a></li>
					<li><a href="Final Trial.html">Final Trial</a></li>
					<li><a href="Final_Presentation.html">Final Presentation</a></li>
                    <li><a href="Viva.html">Viva</a></li>
				</ul>
			</li>
            <li><a href="Document.html">Documents</a></li>
			<li><a href="Presentation_Slide.html">Presentation Slides</a></li>
            <li><a href="About_Us.html">About Us</a></li>
			<li><a href="Contact_Us.php">Contact Us</a></li>
		</ul>
		<br class="clearfix" />
	</div>	
	<div id="page">
		<div id="content">
			<div class="box">
				<h2>Contact Us</h2>
				
                <p>
                <?php /* PUT THE REST IN THE BODY SECTION OF THE HTML */ ?>
<p>
<!-- contact us script from www.douglassdavis.com (c) 2005-2006 Douglass Davis -->


<form action="" method="post" name="form1" id="form1" onSubmit="MM_validateForm('name','','R','email','','RisEmail','phone','','RisNum','message','','R');return document.MM_returnValue">
  <table width="680" border="0" cellpadding="10" cellspacing="10">
    
    <br />
    <td width="87"></caption>
    <tr>
      <td align="left"><label for="name">Name  :</label></td>
      <td width="538" align="left"><input type="text" name="name" id="name" /></td>
    </tr>
    <tr>
      <td align="left"><label for="email">E-Mail   :</label></td>
      <td align="left"><input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <td align="left"><label for="phone">Phone : </label></td>
      <td align="left"><input name="phone" type="text" id="phone" maxlength="13" /></td>
    </tr>
    <tr>
      <td align="left"><label for="sendTo">Contact :</label></td>
      <td align="left">
      		<select id="sendTo" name="sendTo">
			<option id="Thilini" value="Thilini Weerasooriya">Thilini Weerasooriya</option>
			<option id="Chamodi" value="Chamodi Silva">Chamodi Silva</option>
			<option id="Ridma" value="Ridma Ekanayake">Ridma Ekanayake</option>
            <option id="Asitha" value="Asitha Raddella">Asitha Raddella</option>
			</select>
      
      </td>
    </tr>
    <tr>
		<td> <label for="subject">Subject:</label></td>
		<td><input id="subject" name="subject" class="tb" /></td>
	</tr>
    <tr>
      <td height="191" align="left"><label for="message">Message : </label></td>
      <td align="left"><textarea name="message" id="message" cols="70" rows="10"></textarea></td>
    </tr>
    <!-- <tr>
		<td> <label for="security">Security: </label></td>
		<td><p  style="text-align:justify"><img src="images/Capture.PNG" alt="capture" width="160" height="55">
		  </p>
		  <p style="text-align:justify" width="160" height="30">
		    <input  id="security" name="security" class="tb" />
		      </p>
		  <br>
          </td>
	</tr> -->
    
    <tr>
      <td align="left">&nbsp;</td>
	  
      <td align="left"><input type="submit" name="submit" id="submit" value="Send Message" onClick=" show_alert()"/>
      <input type="reset" name="reset" id="reset" value="Reset" /></td>
    </tr>
  </table>
</form>
<?php
}
?>   
                </p>
			</div>
			
			

		

		</div>
		<br class="clearfix" />
	</div>
	<div id="page-bottom">
		
		
		<br class="clearfix" />
	</div>
</div>

<script type="text/javascript"> Cufon.now(); </script>
		<script>
		function show_alert() 
	{ 
	alert("Message was sent successfully!"); 
	} 
			$(window).load(function(){
				$('#slider')._TMS({
					banners:true,
					waitBannerAnimation:false,
					preset:'diagonalFade',
					easing:'easeOutQuad',
					pagination:true,
					duration:400,
					slideshow:8000,
					bannerShow:function(banner){
						banner.css({marginRight:-500}).stop().animate({marginRight:0}, 600)
					},
					bannerHide:function(banner){
						banner.stop().animate({marginRight:-500}, 600)
					}
					})
			})
		</script>
<div id="footer">
	Copyright (c) 2015-2016 Mahoshada.com. All rights reserved.
</div>
</body>
</html>