<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta  name="viewport" content="width=device-width, initial-scale=1">
        <link   rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </head>
    <body>
        <img  id="last" src="last.jpg" height="400"/><br>
        Refresh(ms):<br>
        <input type="range" name="refresh" id="refresh" value="1000" min="125" max="10000" onchange="ch_rate(this.value);"><br>
        <?php //echo "lapsus"; ?>
    </body>
    <script src="scripts/lapsus.js"></script>
</html>
