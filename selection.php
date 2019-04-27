
<html>
    <head>
    <title>Select your mood</title>
    <link rel="stylesheet" type="text/css" href="mainStyle.css">
    <link rel="stylesheet" type="text/css" href="menu.css">


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
</style>
    </head>
    <body>

    <header>
         <h2>MoodMusic</h2>
          <div class="topnav">
            <a  href="home.php">Home</a>
            <a href="signIn.php">Sign in</a>
            <a href="register.php">Resgister</a>
            <a href="selection.php" class="active" >Select mood</a>
            <a href="questions.php" >Go to questions</a>
            <a href="about.php" >About</a>
      </div>
    </header>

    <article>

        <p>Please select your current mood</p>
        <form action="mood.php" method="POST">
            
        
            <label for="mood">
                <input type="radio" name ="mood" value ="bored">Bored <br>
                <input type="radio" name ="mood" value ="calm">Calm <br>
                <input type="radio"name="mood" value ="excited">Excited <br>
                <input type="radio" name="mood" value="tense">Tense <br>
                
            </label>
            
            <input class="button button1" type="submit" value = "Submit mood">

        </form>
        
    </article>

    <footer>
        <p>Posted by: Roberto Diaz</p>
        <p>Contact information: <a href="mailto:roberto.dg2611@gmail.com">
        roberto.dg2611@gmail.com</a>.</p>
</footer>
    
    </body>
</html>
