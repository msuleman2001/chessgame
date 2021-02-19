<?php
/* 
| Developed by: Tauseef Ahmad
| Last Upate: 13-12-2020 04:46 PM
| Facebook: www.facebook.com/ahmadlogs
| Twitter: www.twitter.com/ahmadlogs
| YouTube: https://www.youtube.com/channel/UCOXYfOHgu-C-UfGyDcu5sYw/
| Blog: https://ahmadlogs.wordpress.com/
 */ 
 
require_once 'config.php';

$permissions = ['email']; //optional

if (isset($accessToken))
{
	if (!isset($_SESSION['facebook_access_token'])) 
	{
		//get short-lived access token
		$_SESSION['facebook_access_token'] = (string) $accessToken;
		
		//OAuth 2.0 client handler
		$oAuth2Client = $fb->getOAuth2Client();
		
		//Exchanges a short-lived access token for a long-lived one
		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
		$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
		
		//setting default access token to be used in script
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	} 
	else 
	{
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	}
	
	
	//redirect the user to the index page if it has $_GET['code']
	if (isset($_GET['code'])) 
	{
		header('Location: ./');
	}
	
	
	try {
		$fb_response = $fb->get('/me?fields=name,first_name,last_name,email');
		$fb_response_picture = $fb->get('/me/picture?redirect=false&height=200');
		
		$fb_user = $fb_response->getGraphUser();
		$picture = $fb_response_picture->getGraphUser();
		
		$_SESSION['fb_user_id'] = $fb_user->getProperty('id');
		$_SESSION['fb_user_name'] = $fb_user->getProperty('name');
		$_SESSION['fb_user_email'] = $fb_user->getProperty('email');
		$_SESSION['fb_user_pic'] = $picture['url'];
		
		
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		echo 'Facebook API Error: ' . $e->getMessage();
		session_destroy();
		// redirecting user back to app login page
		header("Location: ./");
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		echo 'Facebook SDK Error: ' . $e->getMessage();
		exit;
	}
} 
else 
{	
	// replace your website URL same as added in the developers.Facebook.com/apps e.g. if you used http instead of https and you used
	$fb_login_url = $fb_helper->getLoginUrl('http://localhost/facebook1/', $permissions);
}
?>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chess.css">
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylew.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fa/css/all.css">
		
		<meta name="google-signin-client_id" content="726505064962-466c8l12n8d7i6ctt5di26npl1uej3jf.apps.googleusercontent.com">
		<script src="https://apis.google.com/js/platform.js" async defer></script>
	</head>
	<body class="body-bg">
		<nav class="navbar navbar-expand-lg main-navbar">
			<div class="mr-auto"></div>
		</nav>
		<button onclick="signOut()">Sign out</button>
		<div class="main-art">
			<div class="two-col-left">
				<form id="frmLogin" method="post" action="<?php echo site_url('Member/perform_login'); ?>" class="needs-validation" novalidate="">
					<div class="form-group">
						<label for="email">Email</label>
						<input id="txtPlayerEmail" type="email" class="form-control" name="txtPlayerEmail" tabindex="1" required autofocus>
						<div class="invalid-feedback">
							Please fill in your email
						</div>
					</div>

					<div class="form-group">
						<div class="d-block">
							<label for="password" class="control-label">Password</label>
							<div class="float-right">
								<a href="auth-forgot-password.html" class="text-small">
								Forgot Password?
								</a>
							</div>
						</div>
						<input id="txtPlayerPassword" type="password" class="form-control" name="txtPlayerPassword" tabindex="2" required>
						<div class="invalid-feedback">
							please fill in your password
						</div>
					</div>

					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="chkRememberMe" class="custom-control-input" tabindex="3" id="chkRememberMe">
							<label class="custom-control-label" for="remember-me">Remember Me</label>
						</div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
							Login
						</button>
					</div>
                </form>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
						Sign Up
					</button>
				</div>
			</div>
			<div class="two-col-right">
				<img src="img_girl.jpg"  width="500" height="600">
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/bootstrap.min.js">
	</body>
</html>