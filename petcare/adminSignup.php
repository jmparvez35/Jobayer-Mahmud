<html>
<head>
<Title> Signup</Title>
<link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container">
<div class="formContainer">
<form action="../../Controllers/loginController.php" method="POST">
<div class= "formControl">
<span> Name</span>
<input type="text"
                               name="name"
                               class="txtField mb"
                               placeholder="Enter your name" >    
</div>
<div class= "formControl">
<span>Email:</span>
<input type="email"
                               name="email"
                               class="txtField mb"
                               placeholder="Enter your email" >    
</div>
<div class= "formControl">
<span>Phone</span>
<input type="text"
                               name="phone"
                               class="txtField mb"
                               placeholder="Enter your number" >    
</div>
<div classs = "formControl mb">
<span class= "label">Password: </span>
<input  type="password"
                               name="password"
                               class="txtField mb"
                               placeholder="Enter your Password">
</div>
<div class = "formControl">
<input type="submit" name="submit" class="button">
<input type="reset" name="reset" class="button">
</div>
</form>
</div>
</div>
</body>
</html>