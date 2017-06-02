#!/bin/bash

COUNT=0
CRR="0.067"

SLP=3

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
[ ! $OFILE ]&&  OFILE="lapsus_%010d"
#[ ! $ ]&&=""

function take {
    #Adjust()
    T=`date +%H.%M.%S.%N`
    echo $T `printf "%06d\n" $COUNT` $DEF_ARG $WIDTH $HEIGHT $QUALITY $TIMEOUT $THUMB $SHARP $CONTR $BRIGH $SAT $ISO $SS $AWB -o $ODIR/$OFILE`printf "_%06d.jpg" $COUNT`
    raspistill $DEF_ARG\
        $WIDTH $HEIGHT $QUALITY $TIMEOUT $THUMB\
        $SHARP $CONTR $BRIGH $SAT\
        $ISO $SS $AWB\
        -o $ODIR/$OFILE`printf "_%06d.jpg" $COUNT`
}
while : ; do
    take & sleep `echo "scale=4;$SLP-$CRR" | bc ` #4.933
    COUNT=$[$COUNT+1]
done
