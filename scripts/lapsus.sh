#!/bin/bash
COUNT=0
CRR="0.067"
SLP=1
DEF_ARG="-dt --nopreview"

[ $1       ]&& N=$1||N=600

[ $WIDTH   ]&&  WIDTH="--width $WIDTH"
[ $HEIGHT  ]&& HEIGHT="--height $HEIGHT"
[ $QUALITY ]&&QUALITY="--quality $QUALITY"||QUALITY="--quality 100"
[ $TIMEOUT ]&&TIMEOUT="--timeout $TIMEOUT"||TIMEOUT="--timeout 1"
[ $THUMB   ]&&  THUMB="--thumb $THUMB"    ||  THUMB="--thumb none"

[ $AWB     ]&&    AWB="-awb $AWB"         || AWB="-awb sun" #off,auto,sun,cloud,shade,tungsten,fluorescent,incandescent,flash,horizon
[ $ISO     ]&&    ISO="-ISO $ISO"         || ISO="-ISO 100" 
[ $SS      ]&&     SS="-ss "`echo "scale=6;1000000*($SS)" | bc | cut -d. -f1`

[ $SHARP   ]&&  SHARP="--sharpness $SHARP"  #(-100 to 100)
[ $CONTR   ]&&  CONTR="--contrast $CONTR"   #(-100 to 100)
[ $BRIGH   ]&&  BRIGH="--brightness $BRIGH" #(-100 to 100)
[ $SAT     ]&&    SAT="--saturation $SAT"   #(-100 to 100)
[ $ROT     ]&&    ROT="--rotation $ROT"     #"0-359"


[ $LAST    ]&&   LAST="--latest $LAST"    ||LAST="--latest /var/www/html/lapsus/last.jpg"
[ ! $ODIR  ]&&   ODIR="/var/www/html/lapsus/DCIM"
[ ! $OFILE ]&&  OFILE="lapsus_"`date +%H%M%S`

[ ! -d $ODIR ]&& mkdir $ODIR

function take {
    #Adjust()
    #`printf "%06d\n" $COUNT` 
    echo `date +%H.%M.%S.%N` $DEF_ARG $WIDTH $HEIGHT $QUALITY $TIMEOUT $THUMB $SHARP $CONTR $BRIGH $SAT $ISO $SS $AWB $ROT $LAST -o $ODIR/$OFILE`printf "_%06d.jpg" $COUNT`
    raspistill $DEF_ARG\
        $WIDTH $HEIGHT $QUALITY $TIMEOUT $THUMB\
        $SHARP $CONTR $BRIGH $SAT\
        $ISO $SS $AWB $ROT $LAST\
        -o $ODIR/$OFILE`printf "_%06d.jpg" $COUNT`
}
while [ $COUNT -lt $N  ] ; do
    take &
    sleep $SLP #`echo "scale=4;$SLP-$CRR" | bc`
    COUNT=$[$COUNT+1]
done

