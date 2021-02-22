<!DOCTYPE html> 
<html> 
<style> 
	/*set border to the form*/ 
	
	form { 
    border: 3px solid #f1f1f1; 
    align : center;
	} 
	/*assign full width inputs*/ 
	
	input[type=text], 
  input[type=password],
  input[type=tel] { 
		width: 100%; 
		padding: 12px 20px; 
		margin: 8px 0; 
		display: inline-block; 
		border: 1px solid #ccc; 
		box-sizing: border-box; 
  } 
  
  input[type=date] {
    width: 15%;
    padding: 10px 10px; 
		margin: 5px 0; 
		display: inline-block; 
		border: 1px solid #ccc; 
		box-sizing: border-box;
  }

  body{
  	min-height: 100vh;
  }
	/*set a style for the buttons*/ 
	
	button { 
		background-color: #4CAF50; 
		color: white; 
		padding: 14px 20px; 
		margin: 8px 0; 
		border: none; 
		cursor: pointer; 
		width: 100%; 
	} 
	/* set a hover effect for the button*/ 
	
	button:hover { 
		opacity: 0.8; 
	} 
	/*set extra style for the cancel button*/ 
	
	.cancelbtn { 
		width: auto; 
		padding: 10px 18px; 
		background-color: #f44336; 
	} 
	/*centre the display image inside the container*/ 
	
	.imgcontainer { 
		text-align: center; 
		margin: 24px 0 12px 0; 
	} 
	/*set image properties*/ 
	
	img.avatar { 
		width: 20%; 
	} 
	/*set padding to the container*/ 
	
	.container { 
		padding: 30px;
		background: #f1f1f1; 
	} 
	/*set the forgot password text*/ 
	
	span.psw { 
		float: right; 
		padding-top: 16px; 
	} 
	/*set styles for span and cancel button on small screens*/ 
	
	@media screen and (max-width: 300px) { 
		span.psw { 
			display: block; 
			float: none; 
		} 
		.cancelbtn { 
			width: 100%; 
		} 
	} 
</style> 

<body>
  <div align="center">
    <h2>Daftar Akun</h2> 
  </div>
	<!--Step 1 : Adding HTML-->
	<form action="/web1/staff/staffoutsource/login.php"> 
		<div class="imgcontainer"> 
			<img src="/web1/ptkai.png"
				alt="Avatar" class="avatar"> 
		</div> 

		<div class="container"> 
			<label><b>Name</b></label><br> 
			<input type="text" placeholder="Enter Name" name="name" required> 

      <label><b>Username</b></label><br> 
			<input type="text" placeholder="Enter Username" name="uname" required>

			<label><b>Birthday</b></label><br> 
			<input type="date" placeholder="Enter Birthday" name="bth" required><br>

      <label><b>Telephone</b></label><br> 
      <input type="tel" name="phone" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required><br>
      <span>Format: 1234-4567-8900</span><br>

      <label><b>Password</b></label> 
			<input type="password" placeholder="Enter Password" name="psw" required> 

      <label><b>Email</b></label> 
			<input type="text" placeholder="Enter Email" name="email" required>

			<button type="submit">Daftar</button>  
		</div> 

		<div class="container" style="background-color:#f1f1f1"> 
			<button type="button" class="cancelbtn"><a href="/web1/login.php"><font color="white" >Cancel</font></a></button>  
		</div> 
	</form> 

</body> 

</html> 
