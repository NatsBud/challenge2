<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>CSS Clock</title>
  </head>
  <body>
    <div class="main-clock">
      <div class="clock-container">
        <div class="clock">
          <div class="clock-face">
            <div class="hand hour-hand"></div>
            <div class="hand min-hand"></div>
            <div class="hand second-hand"></div>
          </div>
        </div>
        <div class="place-phil">
          <h1 style="padding:50px; text-align: center; color:#ffffff">PHILIPPINES</h1>
        </div>
      </div>
    </div>
    <div class="analog">
      <div class="place">
        <h1>NEW YORK </h1>
        <?php
        date_default_timezone_set("America/New_York");
        echo "The time is " . date("h:i:sa");
        ?>
      </div>
      <div class="place">
        <h1>PARIS </h1>
        <?php
        date_default_timezone_set("Europe/Paris");
        echo "The time is " . date("h:i:sa");
        ?>
      </div>
      <div class="place">
        <h1>SEOUL </h1>
        <?php
        date_default_timezone_set("Asia/Seoul");
        echo "The time is " . date("h:i:sa");
        ?>
      </div>
    </div>
    <style>
    
    body {
    padding:0;
    margin: 0;
    font-size: 2rem;
    align-items: center;
    }
    .clock-container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    }
    .clock {
    width: 30rem;
    height: 30rem;
    border:20px solid white;
    border-radius:50%;
    position: relative;
    padding:2rem;
    box-shadow:
    0 0 0 4px rgba(0,0,0,0.1),
    inset 0 0 0 3px #EFEFEF,
    inset 0 0 10px black,
    0 0 10px rgba(0,0,0,0.2);
    }
    .clock-face {
    position: relative;
    width: 100%;
    height: 100%;
    transform: translateY(-3px); /* account for the height of the clock hands */
    }
    .hand {
    width:50%;
    height:6px;
    background:#c83737;
    position: absolute;
    top:50%;
    transform-origin: 100%;
    transform: rotate(90deg);
    transition: all 0.05s;
    transition-timing-function: cubic-bezier(0.1, 2.7, 0.58, 1);
    }
    .place-phil{
    width:100%;
    }
    .analog{
    width:100%;
    height:40%;
    background:#FFFFFF;
    display:flex;
    flex-direction:row;
    }
    .main-clock{
    margin:0;
    width:100%;
    height:60%;
    background:#505050;
    display:flex;
    justify-content:center;
    
    }
    .place{
    padding:5%;
    }
    </style>
    <script>
    const secondHand = document.querySelector('.second-hand');
    const minsHand = document.querySelector('.min-hand');
    const hourHand = document.querySelector('.hour-hand');
    function setDate() {
    const now = new Date();
    const seconds = now.getSeconds();
    const secondsDegrees = ((seconds / 60) * 360) + 90;
    secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
    const mins = now.getMinutes();
    const minsDegrees = ((mins / 60) * 360) + ((seconds/60)*6) + 90;
    minsHand.style.transform = `rotate(${minsDegrees}deg)`;
    const hour = now.getHours();
    const hourDegrees = ((hour / 12) * 360) + ((mins/60)*30) + 90;
    hourHand.style.transform = `rotate(${hourDegrees}deg)`;
    }
    setInterval(setDate, 1000);
    setDate();
    </script>
  </body>
</html>