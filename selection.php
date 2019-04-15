
<html>
    <head>
    <title>Select your mood</title>
    <link rel="stylesheet" type="text/css" href="mainStyle.css">
    <link rel="stylesheet" type="text/css" href="menu.css">
    </head>
    <body>

    <header>
         <h2>MoodMusic</h2>
          <div class="topnav">
            <a  href="home.php">Home</a>
            <a href="#news">Sign in</a>
            <a href="#contact">Resgister</a>
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
            
            <input type="submit" value = "Submit mood">

        </form>
        
    </article>
    
    </body>
</html>
