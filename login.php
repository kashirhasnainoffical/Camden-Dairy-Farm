
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./images/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<style>
		.form {
  padding-top: 20px;
  margin-top: 40px;
  width: 40%;
  margin-left: 30%;
  border: 1px solid black;
  border-radius: 20px;
  box-shadow: 2px 2px 32px black;
  background: rgba(255, 255, 255, 0.884);
}
.btn {
  width: 20%;
  margin-left: 40%;
}

@media screen and (min-width: 320px) {
  .form {
    width: 90%;
    margin-left: 5%;
  }
  .btn {
    width: 50%;
    margin-left: 25%;
  }
}

@media screen and (min-width: 768px) {
  .form {
    width: 70%;
    margin-left: 15%;
  }
}

@media screen and (min-width: 1000px) {
  .form {
    width: 30%;
    margin-left: 65%;
  }
}

		</style>
    <title>Camden Dairy Farm</title>
</head>

<body>
    <nav>
        <div class="logo">
            <div>
                <h5>Camden
                    <img src="./images/logo.png" alt="">
                    <span>DAIRY</span>
                </h5>
            </div>
       
           
        </div>
    </nav>
    <main>
    <div class="uk-section uk-container">
  		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
		  <form class="signInForm form border-light p-5" method='POST'>

<center><p class="h4 mb-4 text-center">
	Login</p></center>

<input type="email" id="signInEmail" name='email' class="form-control mb-4" placeholder="E-mail">

<input type="password" id="signInPassword" name='password' class="form-control mb-4" placeholder="Password">

<?php
	if(isset($message)){
		echo '<p style="color:red;">'.$message.'</p>';
	}
?>

<input type="submit" name="submit" id='signIn' class="btn btn-outline-primary" value='Login'>
</form>
  		</div>
  	</div>