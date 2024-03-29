<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script defer src="face-api.min.js"></script>
  <script defer src="script3.js"></script>
  <link rel="stylesheet" href="css/hover.css">

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Montserrat', sans-serif;
      background: #3c3d3f;
    }

    canvas {
      position: absolute;
      left: 3%;
      top:3%;
      overflow: hidden;
    }

    #video{
      position: absolute;
      left: 3%;
      top:3%;
    }

  .countdown{
  position: absolute;
  left: 80%;
  top:3%;
}


.base-timer {
  position: relative;
  width: 300px;
  height: 300px;
}

.base-timer__svg {
  transform: scaleX(-1);
}

.base-timer__circle {
  fill: none;
  stroke: none;
}

.base-timer__path-elapsed {
  stroke-width: 7px;
  stroke: grey;
}

.base-timer__path-remaining {
  stroke-width: 7px;
  stroke-linecap: round;
  transform: rotate(90deg);
  transform-origin: center;
  transition: 1s linear all;
  fill-rule: nonzero;
  stroke: currentColor;
}

.base-timer__path-remaining.green {
  color: rgb(65, 184, 131);
}

.base-timer__path-remaining.orange {
  color: orange;
}

.base-timer__path-remaining.red {
  color: red;
}

.base-timer__label {
  position: absolute;
  width: 300px;
  height: 300px;
  top: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 48px;
}

  </style>
</head>

<body>
  <video id="video" width="450" height="300" autoplay muted playsinline="true"></video>


  <div class="countdown">
    

  <div id="app"></div>
  </div>
  <div class="container1">


<div class="instruction">
    <h2>Try to reveal hidden words by clicking on them!</h2>
</div>
<div class="container">
    <div class="big_text text">
      <h1><span class="color_blue">Ready</span></h1>
    </div>

    <div class="small_texts">
    

      <button class="float">
        <script>
            var myArray = [
            "Gotcha",
            "Chill",
            "Relieve"
            ];
    
            var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
            document.write(randomItem);
        </script>
      </button>
      <button class="sunk">
        <script>
            var myArray = [
            "Admire",
            "Success",
            "Improve"
            ];
    
            var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
            document.write(randomItem);
        </script>
      </button>
      <button class="text_3 float">
        <script>
            var myArray = [
            "Adore",
            "Beloved",
            "Enjoy"
            ];
    
            var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
            document.write(randomItem);
        </script>
      </button>
      <button class="text_4 sunk">
        <script>
            var myArray = [
            "Keen",
            "Majestic",
            "Lovely"
            ];
    
            var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
            document.write(randomItem);
        </script>
      </button>
      <button class="text_5 float">
        <script>
          var myArray = [
          "Enrich",
          "Fun",
          "Ideal"
          ];
  
          var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
          document.write(randomItem);
      </script>
      </button>
      <button class="text_6 sunk">
        <script>
          var myArray = [
          "Classy",
            "Charismatic",
            "Bubbly"
          ];
  
          var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
          document.write(randomItem);
      </script>
      </button>
      <button class="text_7 float">
        <script>
          var myArray = [
          "Amuse",
            "Awesome",
            "Friendly"
          ];
  
          var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
          document.write(randomItem);
      </script>
      </button>
      <button class="text_8 sunk">
        <script>
          var myArray = [
          "Handsome",
            "Pretty",
            "Gorgeous"
          ];
  
          var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
          document.write(randomItem);
      </script>
      </button>
      <button class="text_9 float">
        <script>
          var myArray = [
          "Genuine",
            "Greatest",
            "Hypnotic"
          ];
  
          var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
          document.write(randomItem);
      </script>
      </button>
      <button class="text_10 sunk">
        <script>
          var myArray = [
          "Joy",
            "Motivated",
            "Snappy"
          ];
  
          var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
          document.write(randomItem);
      </script>
      </button class="text_11 float">
      <button>
        <script>
          var myArray = [
          "Acclaimed",
            "Lively",
            "Fashion"
          ];
  
          var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
          document.write(randomItem);
      </script>
      </button>
      <button class="text_12 sunk">
        <script>
          var myArray = [
          "Ecstatic",
          "Enticing",
          "Exaultant"
          ];
  
          var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
          document.write(randomItem);
      </script>
      </button>
      <button class="text_13 float">
        <script>
          var myArray = [
          "Genuine",
          "Greatest",
          "Hypnotic"
          ];
  
          var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
          document.write(randomItem);
      </script>
      </button>
    </div>
  </div>

</body>
</html>

<script src = "javascript/countdown3.js"></script>