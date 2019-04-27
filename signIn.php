<html>
    <head>
    <title>Sign in</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="menu.css">
<link rel="stylesheet" type="text/css" href="mainStyle.css">


<style>
    body {
      background-image: url("backgroundImage.jpg");
      background-repeat: repeat;
    }
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

</style>

    </head>
    <body>
    <header>
  <h2>Mood Music</h2>
  <div class="topnav">
        <a  href="home.php">Home</a>
        <a class="active" href="signIn.php">Sign in</a>
        <a href="register.php">Resgister</a>
        <a href="selection.php">Select mood</a>
        <a href="questions.php">Go to questions</a>
        <a href="about.php">About</a>
      </div>
</header>

<section>

    <article>
    <h2>Sign in</h2>
       
        Username: <input type="text"><br>
        Password: <input type="password"><br>
        
        <input class="button button1" type="submit" value="Sign in">
        <input class="button button2" type="reset" value="reset">
        <button class="button button2">Forgot password</button>
        
  </article>
</section>
   
<footer>
        <p>Posted by: Roberto Diaz</p>
        <p>Contact information: <a href="mailto:roberto.dg2611@gmail.com">
        roberto.dg2611@gmail.com</a>.</p>
        </footer>

    </body>
</html>