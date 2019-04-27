<?php
//require_once("action.php");

?>
<html>
    <head>  
        <title> SONGS </title>

        <title>MoodMusic</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="menu.css">
        <link rel="stylesheet" type="text/css" href="mainStyle.css">

        <style>
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




body {
      background-image: url("backgroundImage.jpg");
      background-repeat: repeat;
    }
h2 {
    background-color: white; 
    color: black; 
    
}
</style>

       
    </head>
    <body>
        
<header>
  <h2>MoodMusic</h2>
  <div class="topnav">
        <a href="home.php">Home</a>
        <a href="signIn.php">Sign in</a>
        <a href="register.php">Resgister</a>
        <a href="selection.php">Select mood</a>
        <a href="questions.php">Go to questions</a>
        <a href="about.php">About</a>
      </div>
</header>

        <?php
            $conn = mysqli_connect("localhost","root","","mooddatabase");
            $sql = "SELECT * FROM songs, mood WHERE mood = '$mood' AND moodID = moodNumber";
            $result = mysqli_query($conn,$sql);
            $json_array = array();
            while($row = mysqli_fetch_assoc($result)){
                $json_array[] =$row;
            }
           $my_try_array=json_encode($json_array);
           $my_try_array_2 = json_decode($my_try_array);
          // echo $my_try_array;
           $someArray = json_decode($my_try_array,true);
           echo "<br>";
         //  echo "song name : "."<br>";
           $arrayOfSongs=array();
           for ($index =0; $index < sizeof($someArray); $index++){
            $arrayOfSongs[$index]=$someArray[$index]["songName"];
            
    
            }
            
           // echo "<hr>";
          //  print_r($arrayOfSongs);
           // echo "<hr>";
            //echo "<br>";


            $path ="Songs/";
         //   echo"<br>";
           // echo "<hr>";
            //echo $mood;
            switch ($mood) {
                case "bored":
                    $mood = ucfirst($mood);
                    $path = $path.$mood;
                    break;
                case "calm":
                    $mood = ucfirst($mood);
                    $path = $path.$mood;
                    break;
                case "excited":
                    $mood = ucfirst($mood);
                    $path = $path.$mood;
                    break;
                case "tense":
                    $mood = ucfirst($mood);
                    $path = $path.$mood;
                    break;
            }


            $starIndexSong = 0;
          function nowPlaying($arr, $current){
           
           
              return $arr[$current];

          }

          echo "<h2>  Your current mood is : $mood</h2>";
        ?>
    
    <audio id = "field2" autoplay src="<?php echo $path."/".nowPlaying($arrayOfSongs,$starIndexSong)?>" controls>
       
    </audio>
    <br>
    <!--
    <button onclick="#" >BACK</button>
    <button onclick="myFunction()">NEXT</button>
        -->
    <button class="button button1" onclick="#">BACK</button>
    <button class="button button2" onclick="myFunction()">NEXT</button>


    <script>
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
         }
         };
        xmlhttp.open("GET", "arrayOfSongs.php", true);
        xmlhttp.send();
       

    function myFunction() {
        
        document.getElementById("field2").src = "<?php echo $path."/".nowPlaying($arrayOfSongs,++$starIndexSong)?>";
      
    }
    </script>
    

    
<footer>
        <p>Posted by: Roberto Diaz</p>
        <p>Contact information: <a href="mailto:roberto.dg2611@gmail.com">
        roberto.dg2611@gmail.com</a>.</p>
</footer>
    
</html>