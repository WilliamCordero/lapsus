<?php
require 'config.php';
if(!empty($_POST)){
    $cmd ="export ISO=".$_POST['ISO']."; ";
    $cmd.="export SS=".$_POST['SS']."; ";
    $cmd.="export ROT=".$_POST['ROT']."; ";
    $cmd.="export SLP=".$_POST['SLP']."; ";
    $cmd.="export QUALITY=".$_POST['QUALITY']."; ";
    $cmd.="export BRIGH=".$_POST['BRIGH']."; ";
    $cmd.="export CONTR=".$_POST['CONTR']."; ";
    $cmd.="export SAT=".$_POST['SAT']."; ";
    $cmd.="export SHARP=".$_POST['SHARP']."; ";
    $cmd.="export AWB=".$_POST['AWB']."; ";
    //$cmd.="export =".$_POST['']."; ";
    $cmd.=$scripts.'lapsus.sh 1';
    print_r(shell_exec($cmd)."<br>");
    print_r($cmd."<br>");
}