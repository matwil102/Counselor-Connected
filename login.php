<?php 

//Connects to your Database 
//$conect = mysqli_connect("db location","username","password", "forks") or die(mysql_error()); 

//Checks if there is a login cookie
//if(isset($_COOKIE['ID_your_site'])){ //if there is, it logs you in and directes you to the members page
 //	$username = $_COOKIE['ID_your_site']; 
 //	$pass = $_COOKIE['Key_your_site'];
 //	$check = mysqli_query($conect, "SELECT * FROM users WHERE username = '$username'")or die(mysql_error());

 //	while($info = mysqli_fetch_array( $check )){
 //		if ($pass != $info['password']){}
 //		else{
 //			header("Location: login.php");
//		}
 //	}
 //}

 //if the login form is submitted 
 if (isset($_POST['submit'])) {

	// makes sure they filled it in
 	if(!$_POST['username']){
 		die('You did not fill in a username.');
 	}
 	if(!$_POST['pass']){
 		die('You did not fill in a password.');
 	}

 	// checks it against the database
 	if (!get_magic_quotes_gpc()){
 		$_POST['email'] = addslashes($_POST['email']);
 	}

// 	$check = mysqli_query($conect, "SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());

 //Gives error if user dosen't exist
 //$check2 = mysqli_num_rows($check);
 //if ($check2 == 0){
//	die('That user does not exist in our database.<br /><br />If you think this is wrong <a href="login.php">try again</a>.');
//}

//while($info = mysqli_fetch_array( $check )){
//	$_POST['pass'] = stripslashes($_POST['pass']);
 //	$info['password'] = stripslashes($info['password']);
 //	$_POST['pass'] = md5($_POST['pass']);

	//gives error if the password is wrong
 	if ($_POST['pass'] != 'falcons'){
 		die('Incorrect password, please <a href="login.php">try again</a>.');
 	}
	
	else{ // if login is ok then we add a cookie 
		if ($_POST['username'] != 'sphs'){
			die('Incorrect username, please <a href ="login.php">try again</a>.');
		}

		$_POST['username'] = stripslashes($_POST['username']); 
		$hour = time() + 3600; 
		setcookie(ID_your_site, $_POST['username'], $hour); 
		setcookie(Key_your_site, $_POST['pass'], $hour);	 
 
		//then redirect them to the members area 
		header("Location: main-page.php"); 
	}
}
//}
else{
// if they are not logged in 
?>

<head>
     <style>
	 h1 {color: white;
      font: 400 100px/1.3 'Oleo Script', Helvetica, sans-serif;
      text-shadow: 4px 4px 0px rgba(0,0,0,0.1);
      text-align:center;} 
    
body {
background-image: url("Background.jpg");
background-repeat: no-repeat;
background-color:#add8e6;
}
 
#sign-in {text-align: center;
            display: inline-block;
            border: 2px black solid;
            padding: 10px;
            background-color: white;
            margin-left: 40%;
            margin-top: 20px;}
   
     
</style>
</head>

<body>

     <div id="app-name">
	      <h1>Counselor Connected</h1>
	      <hr>
     </div>
	
     <div id="google_translate_element"></div>
     <script type="text/javascript">
      function googleTranslateElementInit() {
  	new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,es,tl,vi,zh-CN',
						layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 
						'google_translate_element');
      }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
	
     <div id="sign-in">

 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 

 <table border="0"> 


 <tr><td>Username:</td><td> 

 <input type="text" name="username" maxlength="40"> 

 </td></tr> 

 <tr><td>Password:</td><td> 

 <input type="password" name="pass" maxlength="50"> 

 </td></tr> 

 <tr><td colspan="2" align="right"> 

 <input type="submit" name="submit" value="Login"> 

 </td></tr> 

 </table> 

 </form> 


	</div>	     
</body>
 <?php 
 }
 ?> 
