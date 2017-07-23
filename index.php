<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lapsus 0.01</title>
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
                        <input type="checkbox" name="rot" id="rot" value="180" onchange="ch_rot(this);" checked><br>
                    </div>
                    <div class="element">
                        Interval(<span id="l_interval"></span>s):
                        <input type="range" name="interval" id="interval" value="1" min="0" max="300" onchange="ch_interval(this.value);"><br>
                    </div>
                    <div class="element">
                        Refresh(<span id="l_rate"></span>ms):
                        <input type="range" name="refresh" id="refresh" value="2000" min="100" max="5000" step="100" onchange="ch_rate(this.value);"><br>
                        <?php //echo "lapsus"; ?>
                    </div>
                    <div class="element">
                        Quality(<span id="l_quality"></span>):
                        <input type="range" name="quality" id="quality" value="100" min="0" max="100" step="5" onchange="ch_quality(this.value);"><br>
                    </div>
                    <div class="element">
                        Brightness(<span id="l_brigh"></span>s):
                        <input type="range" name="brigh" id="brigh" value="50" min="0" max="100" onchange="ch_brigh(this.value);"><br>
                    </div>
                    <div class="element">
                        Contrast(<span id="l_contr"></span>s):
                        <input type="range" name="contr" id="contr" value="0" min="-100" max="100" onchange="ch_contr(this.value);"><br>
                    </div>
                    <div class="element">
                        Saturation(<span id="l_sat"></span>s):
                        <input type="range" name="sat" id="sat" value="0" min="-100" max="100" onchange="ch_sat(this.value);"><br>
                    </div>
                    <div class="element">
                        Sharpness(<span id="l_sharp"></span>s):
                        <input type="range" name="sharp" id="sharp" value="0" min="-100" max="100" onchange="ch_sharp(this.value);"><br>
                    </div>
                    <div class="element">
                        <select name="awb" id="awb" onchange="ch_awb(this);">
                            <option value="off">awb(off)</option>
                            <option value="auto" selected>awb(auto)</option>
                            <option value="sun">awb(sun)</option>
                            <option value="cloud">awb(cloud)</option>
                            <option value="shade">awb(shade)</option>
                            <option value="tungsten">awb(tungsten)</option>
                            <option value="fluorescent">awb(fluorescent)</option>
                            <option value="incandescent">awb(incandescent)</option>
                            <option value="flash">awb(flash)</option>
                            <option value="horizon">awb(horizon)</option>
                        </select>
                    </div>
                    <!--<div class="element">
                        (<span id="l_"></span>s):
                        <input type="range" name="" id="" value="0" min="-100" max="100" onchange="ch_(this.value);"><br>
                    </div>-->

                </div>
                <div class="category">
                    <!--<iframe id="ls" src="scripts/ls.php"></iframe>-->
                </div>
                <div id="messages" class="category"></div>
            </div>
        </div>
    </body>
    <script src="js/lapsus.js"></script>
</html>