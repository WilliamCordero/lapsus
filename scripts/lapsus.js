/* 
 * Copyright (C) 2017 wcordero
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */
var shutter,iso,rot,rate,interval;
function refresh(){
    var Image=document.getElementById('last');
    Image.src='last.jpg?rand='+Math.random();
    setTimeout("refresh();",rate);
}
function ch_rate(r){document.getElementById("l_rate").innerHTML=rate=r;}
function ch_interval(i){document.getElementById("l_interval").innerHTML=interval=i<60?i:i<120?((i-60)*2)+60:i<180?((i-120)*4)+180:i<240?((i-180)*8)+420:Math.round(Math.pow(i-240,1.9297))+900;}
function ch_shutter(s){
    shutter=1/Math.pow(2,(s/3));
    if(shutter<1) document.getElementById("l_shutter").innerHTML="1/"+Math.round((1/shutter)*100)/100;
    else document.getElementById("l_shutter").innerHTML=Math.round(shutter*100)/100;
}
function ch_iso(n){document.getElementById("l_iso").innerHTML=Math.round(iso=Math.pow(2,(n/3))*100);}
function ch_rot(r){document.getElementById("l_rot").innerHTML=rot=r*90;}
ch_rate(1000);
ch_interval(1);
ch_shutter(18);
ch_iso(0);
ch_rot(0);
refresh();
