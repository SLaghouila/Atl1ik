<?
	$this= new PDO($db, $db_username, $db_password);

	function Login(){
		if(empty($_POST['username'])){
			$this->HandleError("UserName is empty!");
			return false;
		}
     
		if(empty($_POST['password'])){
			$this->HandleError("Password is empty!");
			return false;
		}
     
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
     
		if(!$this->CheckLoginInDB($username,$password)){
			return false;
		}
     
		session_start();
     
		$_SESSION[$this->GetLoginSessionVar()] = $username;
     
		return true;
	}

	function CheckLoginInDB($username,$password){
		if(!$this->DBLogin()){
			$this->HandleError("Database login failed!");
			return false;
		}          
		$username = $this->SanitizeForSQL($username);
		$qry = "Select name, email from $this->tablename ".
		" where username='$username' and password='$password' ".
		" and confirmcode='y'";
     
		$result = mysql_query($qry,$this->connection);
     
		if(!$result || mysql_num_rows($result) <= 0){
			$this->HandleError("Error logging in. ".
			"The username or password does not match");
			return false;
		}
		return true;
	}
?>

<HTML>
	<head>
		<title>Login</title>
	</head>
	<body>
		<a href="forside.php">[til forsiden]</a>
		<CENTER>
			<H1>Login</H1>
			*P&aring;kr&aelig;vede felter
			<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
				<fieldset >
					<legend>Login</legend>
					<input type='hidden' name='submitted' id='submitted' value='1'/>
 	
					<label for='username' >UserName*:</label>
					<input type='text' name='username' id='username'  maxlength="50" />
 	
					<label for='password' >Password*:</label>
					<input type='password' name='password' id='password' maxlength="50" />
 	
					<input type='submit' name='Submit' value='Submit' />
 	
				</fieldset>
			</form>
		</CENTER>
	</body>
</HTML>
