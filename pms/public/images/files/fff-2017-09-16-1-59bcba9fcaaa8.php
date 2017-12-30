{*
7001 - Added Proper HTML
10612- Added CAPTCHA Image
*}
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="http://dev.cdgirls.com/css/login_css.css" />
	</head>
	<body class="member_password_recovery">
		<div id="body">
			<div class="header-logo">
				<a href="main.html"><img src="/logos/CDGAFFILATEProgramLOGO.png" width="330" height="75" alt=""></a>				
			</div>
			<div class="login">
				<div class="login-header">
					<h1>Lost Password</h1>
				</div>
				<div class="login-form">
					<FORM action="password.php" method="GET">
						<h3>Use this form to recover your lost password</h3>
						
						<INPUT type="hidden" name="siteid" value="{$_siteid}"/>
						<INPUT type="hidden" name="update" value="{$smarty.request.update}"/>
						<INPUT type="hidden" name="submit" value="1"/>
						{if $error}
						<br>
						<p class="forgot_error">{$error}</p>
						</br>
						{/if}
						{if $config.RETRIEVAL_REQUIRE_USERNAME == 1}
						<INPUT type="text" name="username" placeholder="Username" value="{$username}"/><br>
						{/if}
						{if $config.MEMBER_PASSWORD_UPDATE == 1 && $smarty.request.update}
						<INPUT type="text" placeholder="Old Password" name="old_password" value="{$old_password}"/><br>
						<INPUT type="text" placeholder="New Password" name="new_password" value="{$new_password}"/><br>						
						{/if}						
						
						<INPUT type="text" placeholder="Email address" name="email" value="{$email}"/><br>
						<h4>Please enter your details and an email will</h4>
						
						<h4>be sent to your email address on file:</h4><br>
						<br>
						{if $config.MEMBER_PASSWORD_USE_CAPTCHA}
						<img src="/captcha_image.php?key=mem_pass_retrieve"><br>
						<input type="text" name="captcha" placeholder="Verify Text" size="35" value=""><br>
						<input type="hidden" name="captcha_key" value="mem_pass_retrieve">
						{/if}
						<INPUT class="login-button" type="submit" value="Send"/><br>						
						<br>
						<br>
						<br>
					</FORM>	
					</div>
				</div>
			</div>
			
			<div class="footer">				
				<div class="wrapper">					
					<ul class="right">
						<li><a href=""http://cdgirls.com/main">Home</a></li>
						<li><a href=""http://cdgirls.com/sites">Sites</a></li>
						<li><a href=""http://cdgirls.com/models">Girls</a></li>
						<li><a href=""http://cdgirls.com/search">Search</a></li>
						<li><a href=""http://cdgirls.com/help">Support</a></li>
						<li><a href=""http://cdgirls.com/signup">Sign-up</a></li>
					</ul>
					<p>&copy; 2017 Copyright <b>CDGIRLS.COM / RWJScans Inc.</b> All Rights reserved.</p>
					<!-- END .wrapper -->
				</div>				
			</div>			
		</body>
	</html>	