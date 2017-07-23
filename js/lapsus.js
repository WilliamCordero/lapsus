var 
        awb="auto",
        iso=50,
    shutter=15625,
      width=3280,
     heigth=2464,
        rot=180,
        rate,
        interval,
        quality,
        brigh=50,
        contr=0,
        sat=0,
        sharp=0
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
function     ch_rate(r){document.getElementById("l_rate").innerHTML=rate=r;}
function ch_interval(i){document.getElementById("l_interval").innerHTML=interval=i<60?i:i<120?((i-60)*2)+60:i<180?((i-120)*4)+180:i<240?((i-180)*8)+420:Math.round(Math.pow(i-240,1.9297))+900;}
function  ch_shutter(s){document.getElementById("l_shutter").innerHTML=(s>0?"1/":"")+Math.round(((shutter=1/Math.pow(2,(s.value/3)))<1?1/shutter:shutter)*100)/100;}
function      ch_iso(n){document.getElementById("l_iso").innerHTML=iso=Math.round(Math.pow(2,(n.value/3))*100);}
function  ch_quality(n){document.getElementById("l_quality").innerHTML=quality=n;}
function    ch_brigh(n){document.getElementById("l_brigh").innerHTML=brigh=n.value;}
function    ch_contr(n){document.getElementById("l_contr").innerHTML=contr=n.value;}
function      ch_sat(n){document.getElementById("l_sat").innerHTML=sat=n.value;}
function    ch_sharp(n){document.getElementById("l_sharp").innerHTML=sharp=n.value;}
function      ch_rot(n){document.getElementById("l_rot").innerHTML=rot=n.checked?180:0;}

function      ch_awb(n){
    awb=n.value;
}

function         test(){
    $.post("scripts/test.php",
    {
        SS: shutter,
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
        HEIGHT: heigth
    }
    ,function(d){document.getElementById("messages").innerHTML=d;});
}
function      control(){
    console.log("START");
}

ch_rate(2000);
ch_interval(1);
ch_quality(100);

//ls();
refresh();
