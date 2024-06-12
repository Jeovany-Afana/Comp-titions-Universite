<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ouz.css">
    <title>Document</title>
</head>
<body>
    <fieldset id="field">
<div id="timer">
      <span id="minutes">00</span>:<span id="seconds">00</span>
    </div>
    <div id="control">
      <button id="startbtn">DEBUT</button>
      <button id="pausebtn">PAUSE</button>
      <button id="resumebtn"></button>
      <button id="resetbtn">REIN</button>

      <script>

var Clock = {
  totalSeconds: 0,
  startTimer: function () {
    if (!this.interval) {
        var self = this;
        function pad(val) { return val > 9 ? val : "0" + val; }
        this.interval = setInterval(function () {
          self.totalSeconds += 1;
          document.getElementById("minutes").innerHTML = pad(Math.floor(self.totalSeconds / 60 % 60));
          document.getElementById("seconds").innerHTML = pad(parseInt(self.totalSeconds % 60));
        }, 1000);
    }
  },
  resetTimer: function () {
    Clock.totalSeconds = null; 
    clearInterval(this.interval);
    document.getElementById("minutes").innerHTML = "00";
    document.getElementById("seconds").innerHTML = "00";
    delete this.interval;
  },
  pauseTimer: function () {
    clearInterval(this.interval);
    delete this.interval;
  },
  resumeTimer: function () {
    this.startTimer();
  },
};

document.getElementById("startbtn").addEventListener("click", function () { Clock.startTimer(); });
document.getElementById("pausebtn").addEventListener("click", function () { Clock.pauseTimer(); });
document.getElementById("resumebtn").addEventListener("click", function () { Clock.resumeTimer(); });
document.getElementById("resetbtn").addEventListener("click", function () { Clock.resetTimer(); });

      </script>
</fieldset>

</div>
</body>
</html>