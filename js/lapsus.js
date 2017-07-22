var shutter,iso,rot,rate,interval;
function refresh(){
    document.getElementById('last').src='last.jpg?r='+(Math.random()*100000);
//    document.getElementById('ls').src='scripts/ls.php';
//    $.getJSON("scripts/ls.json", function(json){
//        console.log(json);
//    });
    setTimeout("refresh();",rate);
}
function     ch_rate(r){document.getElementById("l_rate").innerHTML=rate=r;}
function ch_interval(i){document.getElementById("l_interval").innerHTML=interval=i<60?i:i<120?((i-60)*2)+60:i<180?((i-120)*4)+180:i<240?((i-180)*8)+420:Math.round(Math.pow(i-240,1.9297))+900;}
function  ch_shutter(s){document.getElementById("l_shutter").innerHTML=(s>0?"1/":"")+Math.round(((shutter=1/Math.pow(2,(s/3)))<1?1/shutter:shutter)*100)/100;}
function      ch_iso(n){document.getElementById("l_iso").innerHTML=Math.round(iso=Math.pow(2,(n/3))*100);}
function      ch_rot(r){document.getElementById("l_rot").innerHTML=rot=r*90;}
function control(){
    console.log("START");
}
function test(){
    console.log("TEST");
}


ch_rate(1000);
ch_interval(1);
ch_shutter(18);
ch_iso(0);
ch_rot(0);
refresh();
