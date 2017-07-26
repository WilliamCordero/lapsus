<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lapsus 0.01</title>
        <meta  name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style/jquery.mobile.lapsus.css"/>
	<link rel="stylesheet" href="style/jquery.mobile.icons.min.css"/>
	<link rel="stylesheet" href="style/jquery.mobile.structure-1.4.5.min.css"/>
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
                            <button class="ui-btn ui-icon-recycle ui-btn-icon-left ui-shadow ui-corner-all" type="button" id="test" onclick="test(this);">Test</button>
                        </div>
                        <div class="controls_cell">
                            <button class="ui-btn ui-icon-camera ui-btn-icon-right ui-shadow ui-corner-all" type="button" id="rec" onclick="control(this);">Start</button>
                        </div>
                    </div>
                </div>
                <div class="category">
                    <div class="element">
                        <div class="element_row">
                            <div class="element_cell">
                                <label for="shutter">Shutter(<span id="l_shutter">1/64</span>s)</label>
                                <input type="range" name="shutter" id="shutter" value="18" min="-15" max="33" onchange="ch_shutter(this);" disabled>
                            </div>
                            <div class="element_lock">
                                <button class="ui-btn ui-btn-nb ui-icon-lock ui-btn-icon-right ui-shadow ui-corner-all" type="button" id="lshutter" onclick="ch_lshutter(this)">.</button>
                            </div>
                        </div>
                    </div>
                    <div class="element">
                        <div class="element_row">
                            <div class="element_cell">
                                <label for="iso">ISO(<span id="l_iso">50</span>)</label>
                                <input type="range" name="iso" id="iso" value="-3" min="-3" max="18" onchange="ch_iso(this);" disabled>
                            </div>
                            <div class="element_lock">
                                <button class="ui-btn ui-btn-nb ui-icon-lock ui-btn-icon-right ui-shadow ui-corner-all" type="button" id="liso" onclick="ch_liso(this)">.</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="category">
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
                    <div class="element">
                        <div class="element_row">
                            <div class="element_cell">
                                <label for="brigh">Brightness(<span id="l_brigh">50</span>)</label>
                                <input type="range" name="brigh" id="brigh" value="50" min="0" max="100" onchange="ch_brigh(this);" disabled>
                            </div>
                            <div class="element_lock">
                                <button class="ui-btn ui-btn-nb ui-icon-lock ui-btn-icon-right ui-shadow ui-corner-all" type="button" id="lbrigh" onclick="ch_lbrigh(this)">.</button>
                            </div>
                        </div>
                    </div>
                    <div class="element">
                        <div class="element_row">
                            <div class="element_cell">
                                <label for="contr">Contrast(<span id="l_contr">0</span>)</label>
                                <input type="range" name="contr" id="contr" value="0" min="-100" max="100" onchange="ch_contr(this);" disabled>
                            </div>
                            <div class="element_lock">
                                <button class="ui-btn ui-btn-nb ui-icon-lock ui-btn-icon-right ui-shadow ui-corner-all" type="button" id="lcontr" onclick="ch_lcontr(this)">.</button>
                            </div>
                        </div>
                    </div>
                    <div class="element">
                        <div class="element_row">
                            <div class="element_cell">
                                <label for="sat">Saturation(<span id="l_sat">0</span>)</label>
                                <input type="range" name="sat" id="sat" value="0" min="-100" max="100" onchange="ch_sat(this);" disabled>
                            </div>
                            <div class="element_lock">
                                <button class="ui-btn ui-btn-nb ui-icon-lock ui-btn-icon-right ui-shadow ui-corner-all" type="button" id="lsat" onclick="ch_lsat(this)">.</button>
                            </div>
                        </div>
                    </div>
                    <div class="element">
                        <div class="element_row">
                            <div class="element_cell">
                                <label for="sharp">Sharpness(<span id="l_sharp">0</span>)</label>
                                <input type="range" name="sharp" id="sharp" value="0" min="-100" max="100" onchange="ch_sharp(this);" disabled>
                            </div>
                            <div class="element_lock">
                                <button class="ui-btn ui-btn-nb ui-icon-lock ui-btn-icon-right ui-shadow ui-corner-all" type="button" id="lsharp" onclick="ch_lsharp(this)">.</button>
                            </div>
                        </div>
                    </div>
                    <div class="element">
                        <div class="element_row">
                            <div class="element_cell">
                                <label for="width">Width(<span id="l_width">3280</span>px)</label>
                                <input type="range" name="width" id="width" value="3280" min="0" max="3280" onchange="ch_width(this);" disabled>
                            </div>
                            <div class="element_lock">
                                <button class="ui-btn ui-btn-nb ui-icon-lock ui-btn-icon-right ui-shadow ui-corner-all" type="button" id="lwidth" onclick="ch_lwidth(this)">.</button>
                            </div>
                        </div>
                    </div>
                    <div class="element">
                        <div class="element_row">
                            <div class="element_cell">
                                <label for="height">Height(<span id="l_height">2464</span>px)</label>
                                <input type="range" name="height" id="height" value="2464" min="0" max="2464" onchange="ch_height(this);" disabled>
                            </div>
                            <div class="element_lock">
                                <button class="ui-btn ui-btn-nb ui-icon-lock ui-btn-icon-right ui-shadow ui-corner-all" type="button" id="lheight" onclick="ch_lheight(this)">.</button>
                            </div>
                        </div>
                    </div>
                    <div class="element">
                        <div class="element_row">
                            <div class="element_cell">
                                <label for="queality">Quality(<span id="l_quality">100</span>)</label>
                                <input type="range" name="quality" id="quality" value="100" min="0" max="100" step="5" onchange="ch_quality(this);" disabled>
                            </div>
                            <div class="element_lock">
                                <button class="ui-btn ui-btn-nb ui-icon-lock ui-btn-icon-right ui-shadow ui-corner-all" type="button" id="lquality" onclick="ch_lquality(this)">.</button>
                            </div>
                        </div>
                    </div>
                    <div class="element">
                        <label for="rot">Rotation 180°</label>
                        <input type="checkbox" name="rot" id="rot" onchange="ch_rot(this);" checked>
                    </div>
                    <div class="element">
                        <label for="hflip">Horizontal Flip</label>
                        <input type="checkbox" name="hflip" id="hflip" onchange="ch_hflip(this);">
                    </div>
                    <div class="element">
                        <label for="vflip">Vertical Flip</label>
                        <input type="checkbox" name="vflip" id="vflip" onchange="ch_vflip(this);">
                    </div>
                </div>
                <div class="category">
                    <div class="element">
                        <div class="element_row">
                            <div class="element_cell">
                                <label for="interval">Interval(<span id="l_interval">1</span>s)</label>
                                <input type="range" name="interval" id="interval" value="1" min="0" max="300" onchange="ch_interval(this);" disabled>
                            </div>
                            <div class="element_lock">
                                <button class="ui-btn ui-btn-nb ui-icon-lock ui-btn-icon-right ui-shadow ui-corner-all" type="button" id="linterval" onclick="ch_linterval(this)">.</button>
                            </div>
                        </div>
                    </div>
                    <div class="element">
                        <div class="element_row">
                            <div class="element_cell">
                                <label for="count">Count(<span id="l_count">300</span>)</label>
                                <input type="range" name="count" id="count" value="300" min="0" max="1200" onchange="ch_count(this);" disabled>
                            </div>
                            <div class="element_lock">
                                <button class="ui-btn ui-btn-nb ui-icon-lock ui-btn-icon-right ui-shadow ui-corner-all" type="button" id="lcount" onclick="ch_lcount(this)">.</button>
                            </div>
                        </div>
                    </div>
                    <div class="element">
                        <div class="element_row">
                            <div class="element_cell">
                                <label for="rate">Refresh(<span id="l_rate">2500</span>ms)</label>
                                <input type="range" name="rate" id="rate" value="2000" min="100" max="5000" step="100" onchange="ch_rate(this);" disabled>
                            </div>
                            <div class="element_lock">
                                <button class="ui-btn ui-btn-nb ui-icon-lock ui-btn-icon-right ui-shadow ui-corner-all" type="button" id="lrate" onclick="ch_lrate(this)">.</button>
                            </div>
                        </div>
                    </div>
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