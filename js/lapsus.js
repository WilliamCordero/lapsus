var rate=2500,
interval=1,
     awb="auto",
     iso=50,
 shutter=15625,
   width=3280,
  heigth=2464,
     rot=180,
 quality=100,
   brigh=50,
   contr=0,
     sat=0,
   sharp=0,
   hflip=false,
   vflip=false
;
function refresh(){
    $("#last").attr("src",'last.jpg?r='+(Math.random()*100000));
/*    $.getJSON("scripts/ls.php", function(json){
        console.log(json);
    });
*/    setTimeout("refresh();",rate);
}
function ls(){
    $.getJSON("scripts/ls.php", function(json){
        document.getElementById("messages").innerHTML=json;
    });
    setTimeout("ls();",rate*4);
}

function   ch_shutter(n){$('#l_shutter').html((n.value>0?"1/":"")+Math.round(((shutter=1/Math.pow(2,(n.value/3)))<1?1/shutter:shutter)*100)/100);}
function  ch_lshutter(n){$('#shutter').slider(n.checked?'enable':'disable');}
function       ch_iso(n){$('#l_iso').html(iso=Math.round(Math.pow(2,(n.value/3))*100));}
function      ch_liso(n){$('#iso').slider(n.checked?'enable':'disable');}
function     ch_brigh(n){$('#l_brigh').html(brigh=n.value);}
function    ch_lbrigh(n){$('#brigh').slider(n.checked?'enable':'disable');}
function     ch_contr(n){$('#l_contr').html(contr=n.value);}
function    ch_lcontr(n){$('#contr').slider(n.checked?'enable':'disable');}
function       ch_sat(n){$('#l_sat').html(sat=n.value);}
function      ch_lsat(n){$('#sat').slider(n.checked?'enable':'disable');}
function     ch_sharp(n){$('#l_sharp').html(sharp=n.value);}
function    ch_lsharp(n){$('#sharp').slider(n.checked?'enable':'disable');}
function     ch_width(n){$('#l_width').html(width=n.value);}
function    ch_lwidth(n){$('#width').slider(n.checked?'enable':'disable');}
function    ch_height(n){$('#l_height').html(height=n.value);}
function   ch_lheight(n){$('#height').slider(n.checked?'enable':'disable');}
function   ch_quality(n){$('#l_quality').html(quality=n.value);}
function  ch_lquality(n){$('#quality').slider(n.checked?'enable':'disable');}
function  ch_interval(n){$('#l_interval').html(interval=n.value<60?n.value:n.value<120?((n.value-60)*2)+60:n.value<180?((n.value-120)*4)+180:n.value<240?((n.value-180)*8)+420:Math.round(Math.pow(n.value-240,1.9297))+900);}
function ch_linterval(n){$('#interval').slider(n.checked?'enable':'disable');}
function      ch_rate(n){$('#l_rate').html(rate=n.value);}
function     ch_lrate(n){$('#rate').slider(n.checked?'enable':'disable');}
//function     ch_l(n){$('#').slider(n.checked?'enable':'disable');}




function      ch_rot(n){rot=n.checked?180:0;}
function      ch_hflip(n){hflip=n.checked;}
function      ch_vflip(n){vflip=n.checked;}
function      ch_awb(n){awb=n.value;}

function         test(){
    $.post("scripts/test.php",
    {   SS: shutter,
        ISO: iso,
        ROT: rot,
        SLP: interval,
        QUALITY: quality,
        BRIGH: brigh,
        CONTR: contr,
        SAT: sat,
        SHARP: sharp,
        AWB: awb,
        WIDTH: width,
        HEIGHT: heigth,
        HFLIP: hflip,
        VFLIP: vflip
    }
    ,function(d){document.getElementById("messages").innerHTML=d;});
}
function      control(){
    console.log("START");
}

//ls();
refresh();
