<head>

    <meta charset="utf-8">

    <title>Instruction</title>

    <link rel="stylesheet" href="css/instruction.css">

</head>

<body>

<?php
  include_once("include/config.php");
  include_once("include/session.php");

  $path = $_GET['path'];

  if($path==1){

echo "<div class=\"box\">";

echo "<div class=\"header\">Please Follow the Instruction Below</div>";
echo "<div class=\"instruction\">You will be given 2 minute to read through an article. Your stress level will be determined by analyzing your eye blinking rate throughout the event. 
        <br>
        Note: Please avoid wearing glasses and keep you head stay still for more accurate detection. Due to the delayness of server, please wait for 10-20 seconds for the webcam frame to show up and refresh the page.
        </div>";

echo "<div class=\"video\">";
    echo "<video width=\"750px\" height=\"500px\" autoplay muted loop>
    <source src=\"fyp_video/Article.mp4\" type=\"video/mp4\">
    </video>";
echo "</div>";

echo "<div class=\"button\">
    <a class=\"red\" href=\"decisionPanel.php\">Cancel</a>
    <a class=\"green\" href=\"https://stress-detect-app.herokuapp.com/interaction1.php\">Proceed</a>
</div>
</div>";
  }

 else if($path==2){

    echo "<div class=\"box\">";
    
    echo "<div class=\"header\">Please Follow the Instruction Below</div>";
    echo "<div class=\"instruction\">You will be given 30 seconds to observe some floating words. Your stress level will be determined by analyzing your eye blinking rate throughout the interaction. 
            <br>
        Note: Please avoid wearing glasses and keep you head stay still for more accurate detection. Due to the delayness of server, please wait for 10-20 seconds for the webcam frame to show up and refresh the page.    
    </div>";
    
    echo "<div class=\"video\">";
        echo "<video width=\"750px\" height=\"500px\" autoplay muted loop>
        <source src=\"fyp_video/Float.mp4\" type=\"video/mp4\">
        </video>";
    echo "</div>";
    
    echo "<div class=\"button\">
        <a class=\"red\" href=\"decisionPanel.php\">Cancel</a>
        <a class=\"green\" href=\"https://stress-detect-app.herokuapp.com/interaction2.php\">Proceed</a>
    </div>
    </div>";
      }

      else if($path==3){

        echo "<div class=\"box\">";
        
        echo "<div class=\"header\">Please Follow the Instruction Below</div>";
        echo "<div class=\"instruction\">You will be given 1 minute to find out the hidden words by hovering and clicking on them. Your stress level will be determined by analyzing your eye blinking rate throughout the interaction. 
                <br>
        Note: Please avoid wearing glasses and keep you head stay still for more accurate detection. Due to the delayness of server, please wait for 10-20 seconds for the webcam frame to show up and refresh the page.
        </div>";
        
        echo "<div class=\"video\">";
            echo "<video width=\"750px\" height=\"500px\" autoplay muted loop>
            <source src=\"fyp_video/Hover.mp4\" type=\"video/mp4\">
            </video>";
        echo "</div>";
        
        echo "<div class=\"button\">
            <a class=\"red\" href=\"decisionPanel.php\">Cancel</a>
            <a class=\"green\" href=\"https://stress-detect-app.herokuapp.com/interaction3.php\">Proceed</a>
        </div>
        </div>";
          }

?>

</body>
