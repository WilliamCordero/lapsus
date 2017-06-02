#!/bin/bash

COUNT=0
CRR="0.067"

SLP=4

TIMEOUT=1
QUALITY=100
THUMB="none"
#AWB="sun"

DEF_ARG="-dt --nopreview"

[ $WIDTH   ]&&  WIDTH="--width $WIDTH"
[ $HEIGHT  ]&& HEIGHT="--height $HEIGHT"
[ $QUALITY ]&&QUALITY="--quality $QUALITY"
[ $TIMEOUT ]&&TIMEOUT="--timeout $TIMEOUT"
[ $THUMB   ]&&  THUMB="--thumb $THUMB"

[ $SHARP   ]&&  SHARP="--sharpness $SHARP"  #(-100 to 100)
[ $CONTR   ]&&  CONTR="--contrast $CONTR"   #(-100 to 100)
[ $BRIGH   ]&&  BRIGH="--brightness $BRIGH" #(-100 to 100)
[ $SAT     ]&&    SAT="--saturation $SAT"   #(-100 to 100)

[ $ISO     ]&&    ISO="-ISO $ISO" #ISO="100"
[ $SS      ]&&     SS="-ss "`echo "scale=6;1000000*($SS)" | bc | cut -d. -f1`
[ $AWB     ]&&    AWB="-awb $AWB" #off,auto,sun,cloud,shade,tungsten,fluorescent,incandescent,flash,horizon

[ ! $ODIR  ]&&   ODIR="/var/www/html/DCIM"
[ ! $OFILE ]&&  OFILE="lapsus_"`date +%H%M%S`
#[ ! $ ]&&=""

function take {
    #Adjust()
    echo `date +%H.%M.%S.%N` `printf "%06d\n" $COUNT` $DEF_ARG $WIDTH $HEIGHT $QUALITY $TIMEOUT $THUMB $SHARP $CONTR $BRIGH $SAT $ISO $SS $AWB -o $ODIR/$OFILE`printf "_%06d.jpg" $COUNT`
    raspistill $DEF_ARG\
        $WIDTH $HEIGHT $QUALITY $TIMEOUT $THUMB\
        $SHARP $CONTR $BRIGH $SAT\
        $ISO $SS $AWB\
        -o $ODIR/$OFILE`printf "_%06d.jpg" $COUNT`
}
while : ; do
    take &
    sleep $SLP #`echo "scale=4;$SLP-$CRR" | bc`
    COUNT=$[$COUNT+1]
done
