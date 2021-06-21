<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Control Broad</title>
    </head>
  
<body>
  <div class="header">
    <span id="logobox">
   <img src="robot.png" alt="robot">
    </span>
  </div>
          <h1>Robotic arm remote control interface</h1>


<center>
    <div  class="container">
           <form action="connection.php" method="post">
          <div class="slider-wrapper">

           Motor1 &nbsp; <input type="range"  min="0" max="180"  class="slider" id="Motor1" name="Motor1" >
           <span id="demo"></span>
           </div>
        

          <div class="slider-wrapper">
            Motor2 &nbsp; <input type="range"  min="0" max="180"  class="slider" id="Motor2" name="Motor2">
          <span id="demo"></span>
          </div>
          
          <div class="slider-wrapper">
            Motor3 &nbsp; <input type="range"  min="0" max="180"  class="slider" id="Motor3" name="Motor3">
          <span id="demo"></span>
          </div>

          <div class="slider-wrapper">
            Motor4 &nbsp; <input type="range"  min="0" max="180"  class="slider" id="Motor4" name="Motor4">
          <span id="demo"></span>
          </div>

          <div class="slider-wrapper">
            Motor5 &nbsp; <input type="range"  min="0" max="180" class="slider" id="Motor5" name="Motor5">
          <span id="demo"></span>
          </div>

          <div class="slider-wrapper">
            Motor6 &nbsp; <input type="range"  min="0" max="180" class="slider" id="Motor6" name="Motor6">
          <span id="demo"></span>
          </div>

          <input type="hidden" name="On_value" id="On_value" value="1"  size="1">
          <input type="hidden" name="Off_value" id="Off_value" value="1"  size="1">

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
           <button type="submit" class="button" name="submit" value="submit" >Submit!</button>
           <button type="submit" class="button button2" name="run" value="run" >On</button>
           <button type="submit" class="button button3" name="stop"value="stop" >Off</button>
 

    </center>
    </form>

    <script src="javascript.js"></script>

    <footer>
      <br><p>Copyright @2021 | Designed With by: Shahad Alsady<br>
      <a href="mailto:shahad680.s6@gmail.com">shahad680.s6@gmail.com</a></p>
    </footer>
  </body>
    </html>