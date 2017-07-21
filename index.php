<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta  name="viewport" content="width=device-width, initial-scale=1">
        <link   rel="stylesheet" href="scripts/jquery.mobile-1.4.5.min.css">
        <script src="scripts/jquery-1.12.4.min.js"></script>
        <script src="scripts/jquery.mobile-1.4.5.min.js"></script>
    </head>
    <body>
        <img  id="last" src="last.jpg" height="400"/><br>
        Shutter(<span id="l_shutter"></span>s)<br>
        <input type="range" name="shutter" id="shutter" value="18" min="-15" max="33" onchange="ch_shutter(this.value);"><br>
        ISO(<span id="l_iso"></span>)<br>
        <input type="range" name="iso" id="iso" value="0" min="-3" max="18" onchange="ch_iso(this.value);"><br>
        Rotation(<span id="l_rot"></span>°)<br>
        <input type="range" name="rot" id="rot" value="0" min="0" max="3" onchange="ch_rot(this.value);"><br>
        Interval(<span id="l_interval"></span>s):<br>
        <input type="range" name="interval" id="interval" value="1" min="0" max="300" onchange="ch_interval(this.value);"><br>
        Refresh(<span id="l_rate"></span>ms):<br>
        <input type="range" name="refresh" id="refresh" value="1000" min="100" max="5000" step="100" onchange="ch_rate(this.value);"><br>
        <?php //echo "lapsus"; ?>
    </body>
    <script src="scripts/lapsus.js"></script>
</html>
