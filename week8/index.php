<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TJ SAYSON</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="icon" type="image/jpg" href="aoi.jpg" />
  </head>

  <body>
    <h1>Who am I?<span style="font-size: 40px">&#128556;</span></h1>
    <audio controls autoplay hidden src="test.mp3"></audio>
    <img id="Me" src="Me.jpg" alt="TJ's picture" style="width: 300px; height: 300px" />

    <h2>Personal Information<span style="font-size: 40px">&#129313;</span></h2>

    <div>
      <p id="name"></p>

      <p><strong>Nickname:</strong> TJ/Teej/Jay</p>

      <p id="age"></p>

      <p id="birth"></p>

      <p>
        <strong>Hobbies / Interests / libangan:</strong><br />My hobbies are playing sports like
        basketball, badminton, volleyball, and swimming. I have a lot of interests in history
        especially Philippine history and war history. I usually watch or read about them when I get
        bored and can’t sleep
      </p>
      <p>
        <strong>Goals in Life:</strong><br />To graduate and become a successful IT professional and
        would like to pursue a master’s degree about IT.
      </p>
      <p>
        <strong>Dreams wish to fulfill:</strong><br />I have dreamt to be a historian since I have a
        lot of interest when it comes to history. I might pursue this once I have the money to
        educate myself after graduating. I also dreamt to become a successful gamer/streamer since I
        am really addicted to gaming.
      </p>
    </div>

    <div>
      <?php

      echo "<h2>School Information<span style='font-size: 40px'>&#127979;</span></h2>";
      ?> 
      <p>
        <strong><u>Senior High School Graduated From:</u></strong> <br />
        - I graduated senior high school here in Asia Pacific College. It is located in Humabon,
        Makati City <br />
      </p>
      <p>
        <strong><u>Senior High School Graduated From:</u></strong> <br />
        - The course I picked is Bachelor of Science in Information Technology specializing in
        mobile and internet technology.
      </p>
      <p>
        <strong><u>Scholarship:</u></strong> <br />
        - My scholarship is Entrance Academic Scholarship (50% Tuition Fee only).
      </p>
      <p>
        <strong><u>Why did you choose this course:</u></strong> <br />
        - I chose this course because I really like computers ever since I was a elementary student.
        Whenever there is a technology problem in our home, I am the one willing to study on how to
        fix it.
      </p>
      <p>
        <strong><u>I.T. Experience: Programming / Gaming / Others:</u></strong> <br />
        - I have a background in programming in making a website and a mobile application. The
        languages used are HTML, CSS, JavaScript, Java, and Python. I also like gaming and tried
        participating in gaming tournaments
      </p>
      <h3>Other interesting aspects of my life<span style="font-size: 40px">&#128570;</span></h3>
      <p>
        I tried to do streaming and creating my own page since I am heavily addicted in gaming and
        tried if it’s really for me. I also tried to find a part time job which is an encoder since
        I am a keyboard warrior.
      </p>
      <p>
        <strong><u>Pictures about yourself and your interests:</u></strong> <br />
        - This is my Facebook page where I started streaming. I created this during the pandemic and
        after getting a PC upgrade. Additionally, I am a cat person and here are the pictures of 3
        of my cats.
        <?php
        $txt = "Sebastian, Sophie, and Sue";
        echo "Their names are  $txt!";

        function myMessage() {
        echo " Sebastian is the eldest which is 11 years old";
          }
          myMessage();

          $x = 4;
  
        function myfunction() {
        echo ", Sophie and Sue is " . $GLOBALS['x'] . " years old ";
          }
          myfunction();

          $x = 5;
          var_dump($x);
        ?>
        
      </p>

      <img src="Pets.png" alt="My 3 pet cats" style="width: 300px; height: 300px" />
      <img src="FB page.jpg" alt="My Facebook page" style="width: 300px; height: 300px" />
      <img src="allmight.gif" alt="My Favorite anime" style="width: 400px; height: 300px" />

      <h3>Games I Play when bored<span style="font-size: 40px">&#127918;</span></h3>
      <p><strong><u>Here are some of the games I always play:</u></strong> <br /></p>
      <p id="game"></p>

      <h4>Time Check <span style="font-size: 40px">&#128337;</span></h4>
      <p id="date"></p>
      <button id="clicks1" onclick="today()">Today is?</button>

      <button id="clicks"> Click me </button>

      <input type="image" src="git.png" alt="Check my github" onclick="newWin()" width="48" height="48">

    </div>

    <script src="./script.js"></script>
  </body>
</html>
