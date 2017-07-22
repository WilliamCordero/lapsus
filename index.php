<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>lapsus</title>
        <meta  name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style/jquery.mobile.lapsus.css" />
	<link rel="stylesheet" href="style/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="style/jquery.mobile.structure-1.4.5.min.css" />
        <link rel="stylesheet" href="style/lapsus.css" />
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/jquery.mobile-1.4.5.min.js"></script>
    </head>
    <body>
        <div class="all">
            <div class="preview">
                <img id="last" src="last.jpg" width="100%"/>
            </div>
            <div class="content">
                <div class="controls">
                    <div class="controls_row">
                        <div class="controls_cell">
                            <button class="ui-btn ui-icon-recycle ui-btn-icon-left ui-shadow ui-corner-all" type="button" id="test" onclick="test();">Test</button>
                        </div>
                        <div class="controls_cell">
                            <button class="ui-btn ui-icon-camera ui-btn-icon-right ui-shadow ui-corner-all" type="button" id="start" onclick="control();">Start</button>
                        </div>
                    </div>
                </div>
                <div class="category">
                    <div class="element">
                        Shutter(<span id="l_shutter"></span>s)
                        <input type="range" name="shutter" id="shutter" value="18" min="-15" max="33" onchange="ch_shutter(this.value);"><br>
                    </div>
                    <div class="element">
                        ISO(<span id="l_iso"></span>)
                        <input type="range" name="iso" id="iso" value="0" min="-3" max="18" onchange="ch_iso(this.value);"><br>
                    </div>
                    <div class="element">
                        Rotation(<span id="l_rot"></span>°)
                        <input type="range" name="rot" id="rot" value="0" min="0" max="3" onchange="ch_rot(this.value);"><br>
                    </div>
                    <div class="element">
                        Interval(<span id="l_interval"></span>s):
                        <input type="range" name="interval" id="interval" value="1" min="0" max="300" onchange="ch_interval(this.value);"><br>
                    </div>
                    <div class="element">
                        Refresh(<span id="l_rate"></span>ms):
                        <input type="range" name="refresh" id="refresh" value="1000" min="100" max="5000" step="100" onchange="ch_rate(this.value);"><br>
                        <?php //echo "lapsus"; ?>
                    </div>
                </div>
                <div class="category">
                    <!--<iframe id="ls" src="scripts/ls.php"></iframe>-->
                </div>
            </div>
        </div>
    </body>
    <script src="js/lapsus.js"></script>
</html>