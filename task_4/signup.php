<html >
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
        <link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="/code_examples/passtest.js"></script>
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 
		<script type="text/javascript">
    	$(function() {
        	$("#datepicker").datepicker({ dateFormat: "yy-mm-dd" }).val()
       	});
    </script>
   	<script language="javascript">
		function checkEmail() {

		var email = document.getElementById('enter__email');
		var message = document.getElementById('validEmail');
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var goodColor = "#66cc66";
		var badColor = "#ff6666";	
			if (!filter.test(email.value)) {
				email.style.backgroundColor = badColor;
				message.style.color = badColor;
				message.innerHTML = "Please provide a valid email address!"
			}else{
				email.style.backgroundColor = goodColor;
				message.style.color = goodColor;
				message.innerHTML = "Email Valid!"
			}
		}
		
		function checkPass() {
			var pass1 = document.getElementById('login__password');
			var pass2 = document.getElementById('confirm__password');
			var message = document.getElementById('confirmMessage');
			var goodColor = "#66cc66";
			var badColor = "#ff6666";
			if(pass1.value == pass2.value){
				pass2.style.backgroundColor = goodColor;
				message.style.color = goodColor;
				message.innerHTML = "Passwords Match!"
			}else{
				pass2.style.backgroundColor = badColor;
				message.style.color = badColor;
				message.innerHTML = "Passwords Do Not Match!"
			}
		}  
    </script>
  </head>

<body>
 <body class="align">
  <div class="site__container">
    <div class="grid__container">
      <form action="" method="post" class="form form--login">
        
		<div class="form__field">
          <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
          <input id="login__username" type="text" class="form__input" placeholder="Username" autofocus="" required="">
        </div>
        
		<div class="form__field">
          <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
          <input id="login__password" type="password" class="form__input" placeholder="password" required="">
        </div>
		
		<div class="form field">
			<label class="fontawesome-lock" for="confirm__password"><span class="hidden">Confirm Password</span></label>
			<input id="confirm__password" type="password" class="form__input" placeholder="re-enter password" required="" onKeyUp="javascript:checkPass();">
			<span id="confirmMessage" class="confirmMessage"></span>	
		</div>	
		
		<div class="form field">
			<label class="fontawesome-lock" for="enter__name"><span class="hidden">Enter Name</span></label>
			<input id="enter__name" type="text" class="form__input" placeholder="Enter Your Name" required="">	
		</div>
		
		<div class="form field">
			<label class="fontawesome-envelope" for="enter__email"><span class="hidden">Enter Email</span></label>
			<input id="enter__email" type="text" class="form__input" placeholder="Enter Your Email" required="" onKeyUp="javascript:checkEmail();">
			<span id="validEmail" class="validEmail"></span>
		</div>
		
		<div class= "form field">
			<label class="fontawesome-building" for="birthday__place"><span class="hidden">BirthPlace</span></label>
			<select id="province"
				<option value="0">Province</option>
				<option value="1">Jawa Barat</option>
				<option value="2">Jawa Tengah</option>
				<option value="3">Jawa Timur</option>
			</select>
			<select id="city">
				<option value="0">Province</option>
				<option value="1">Jawa Barat</option>
				<option value="2">Jawa Tengah</option>
				<option value="3">Jawa Timur</option>
			</select>
		</div>
		
		<div class="form field">
		<input id="datepicker" type="text" placeholder="Date of Birth" required="">
		</div>		
		
        <div class="form__field">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
 </body>
</body>
</html>