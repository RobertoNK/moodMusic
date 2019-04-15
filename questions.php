<!DOCTYPE html>
<html lang="en">
<head>
<title>MoodMusic</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="menu.css">
<link rel="stylesheet" type="text/css" href="mainStyle.css">
</head>
    <body>
    <header>
        <h2>MoodMusic</h2>
        <div class="topnav">
            <a  href="home.php">Home</a>
            <a href="#">Sign in</a>
            <a href="#">Resgister</a>
            <a href="selection.php" >Select mood</a>
            <a href="questions.php" class="active" >Go to questions</a>
            <a href="about.php">About</a>
      </div>
    </header>

            <article>  
            <form action="/action.php" method="post">
                 <p> 1. If somebody came up and gave you a playful punch on the shoulder, with the mood you're in now, what would you do?</p>
                 <label for="question1">
                    <input type="radio" name = "question1" value = "tense">Tackle them <br>
                    <input type="radio" name = "question1" value = "excited">Playfull punch them back <br>
                    <input type="radio" name = "question1" value = "bored"> Start conversation <br>
                    <input type="radio" name = "question1" value = "calm">Start conversation <br>
            
                  </label>
            
                 <p>2. Have you cried today?</p>
            
                <label for="question2">
                            
                    <input type="radio" name = "question2" value = "bored">No<br>
                    <input type="radio" name = "question2" value = "calm">Yeah, it was a while ago<br>          
                    <input type="radio" name = "question2" value = "tense">Crying at the moment<br>            
                    <input type="radio" name = "question2" value = "excited">I only had time to laugh <br>
            
                 </label>
              
                <p>
                 3. You're done with fighting somebody at the moment... and then your friend comes up and cracks a funny yet mean joke about the person, with the mood you're in now, what do you do?
                  
                </p>
                <label for="question3">

                    <input type="radio" name = "question3" value = "bored">Ignore it <br>
                    <input type="radio" name = "question3" value = "calm"> Say, "you're si immature" <br>
                    <input type="radio" name = "question3" value  = "excited"> Start laughin along <br>
                    <input type="radio" name = "question3" value ="tense">Tell your friend to go away or you go away <br>

             </label> 

                <p>
                 4. You're walking down the street and a girl suddenly walks up and pushes you. with the mood you're in now, what do you do?
                </p>

                <label for="question4">

                  <input type="radio" name = "question4" value = "tense"> Say, "what's your problem?" <br>
                  <input type="radio" name = "question4" value = "excited"> Feel flattered (I'm a guy) <br>
                  <input type="radio" name = "question4" value = "calm"> Say, "hello" <br>
                  <input type="radio" name = "question4" value = "bored"> AHEM <br>

              </label>

              <p>
               5.  True or False. you're sleepy.
              </p>

              <label for="question5">

                <input type="radio" name = "question5" value ="bored">True <br>
                <input type="radio" name = "question5" value ="tense">False <br>
                <input type="radio" name = "question5" value ="calm">A little<br>
              </label>

              <p>
                6. True or False. with the mood you're in now, you're ready to punch somebody in the face.
              </p>

                <label for="question6">

                <input type="radio" name = "question6" value ="tense">True <br>
                <input type="radio" name = "question6" value ="calm">False <br>
                <input type="radio" name = "question6" value ="bored">A little<br>

              </label> 
              
              <p>
                7. True or False. at the moment, you feel like you're alone (even if you ARE in a room full of people)
              </p>

              <label for="question7">

                <input type="radio" name = "question7" value ="tense">True <br>
                <input type="radio" name = "question7" value ="excited">False <br>
                <input type="radio" name = "question7" value ="bored">A little<br>

              </label>
              
              <p>
               8. With the mood you're in now, how do you feel about your bf/gf?
              </p>

              <label for="question8">

                <input type="radio" name = "question8" value = "excited"> I love them <br>
                <input type="radio" name = "question8" value = "tense">I hate them <br>
                <input type="radio" name = "question8" value = "calm"> I don't have a bf/gf <br>
                <input type="radio" name = "question8" value = "bored"> They're okay <br>
                
              </label>
              
              <p>
                9. With the mood you're in now, how do you feel about yourself?
              </p>
              
              <label for="question9">
                
                <input type="radio" name = "question9" value = "tense"> Who cares about me? <br>
                <input type="radio" name = "question9" value = "excited"> I love myself <br>
                <input type="radio" name = "question9" value = "bored">Feelings?? <br>
                <input type="radio" name = "question9" value = "calm">I'm okay <br>

              </label>
              
              <p>
                10. With the mood you're in now, how do you feel about your worst enemy?
              </p>

              <label for="question10">

                <input type="radio" name = "question10" value = "excited">I love them <br>
                <input type="radio" name = "question10" value = "tense">I hate them <br>
                <input type="radio" name = "question10" value = "calm">I'm starting to get along with them <br>
                <input type="radio" name = "question10" value = "bored">I don't have a worst enemy <br>
                
              </label>
              
              <p>
                11. A guy you don't even known walks up to you and says, "hello", with the mood you're in now, what do you say?
              </p>

              <label for="question11">

                <input type="radio" name = "question11" value = "excited">"Hey, sup man?" <br>
                <input type="radio" name = "question11" value = "bored"> "I don't know you."<br>
                <input type="radio" name = "question11" value = "tense">"Go away." <br>
                <input type="radio" name = "question11" value = "calm"> "Keep on walking, buddy."<br>

              </label>
              
              <p>
                12. You are reading a book and suddenly one of the characters you didn't really care for dies.
              </p>

              <label for="question12">
                
                <input type="radio" name = "question12" value = "calm"> Big deal, you continue reading your book <br>
                <input type="radio" name = "question12" value = "bored">You stop reading now <br>
                <input type="radio" name = "question12" value = "tense">You begin crying <br>
                <input type="radio" name = "question12" value = "excited">You feel sorry for the character <br>

              </label>

              <p>
                13. Are you happy with yourself right now?
              </p>

              <label for="question13">

                <input type="radio" name = "question13" value = "tense">I am never happy with myself <br>
                <input type="radio" name = "question13" value = "bored">Of course <br>
                <input type="radio" name = "question13" value = "excited">Yes <br>
                <input type="radio" name = "question13" value = "calm">No, but someone else is <br>

              </label>
              
              <p>
                14. How would you feel if this questionnaire was over?
              </p>

              <label for="question14">

                <input type="radio" name = "question14" value = "excited">Happy <br>
                <input type="radio" name = "question14" value = "upset">Tense <br>
                <input type="radio" name = "question14" value = "calm">Sad <br>
               
              </label>
              
              <p>
                15. How would you feel if you were told that the last question meant nothing, and that there are still questions to go?
              </p>

              <label for="question15">

                <input type="radio" name = "question15" value = "excited">Excuse me? <br>
                <input type="radio" name = "question15" value = "tense">Angry <br>
                <input type="radio" name = "question15" value = "calm">Happy <br>
                <input type="radio" name = "question15" value = "bore">Depressed <br>
              </label>

              <br>

              <input type="submit" value = "Submit">
              <input type="reset" value = "Reset">
             </form>

            </article>
    </body>
</html>