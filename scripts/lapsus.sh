#!/bin/bash
if echo $@ | grep -q daemon; then
    setsid $0 >/dev/null 2>&1 < /dev/null &
    exit
fi
N=0
DEF_ARG="-dt --nopreview"
[ ! $SLP   ]&& SLP=2
[ ! $COUNT ]&& COUNT=300
[ $WIDTH   ]&&  WIDTH="--width $WIDTH"
[ $HEIGHT  ]&& HEIGHT="--height $HEIGHT"
[ $QUALITY ]&&QUALITY="--quality $QUALITY"||QUALITY="--quality 100"
[ $TIMEOUT ]&&TIMEOUT="--timeout $TIMEOUT"||TIMEOUT="--timeout 1"
[ $THUMB   ]&&  THUMB="--thumb $THUMB"    ||  THUMB="--thumb none"
[ $AWB     ]&&    AWB="-awb $AWB"         || AWB="-awb sun" #off,auto,sun,cloud,shade,tungsten,fluorescent,incandescent,flash,horizon
[ $ISO     ]&&    ISO="-ISO $ISO"         || ISO="-ISO 100" 
[ $SS      ]&&     SS="-ss "`echo "scale=6;1000000*($SS)" | bc | cut -d. -f1`
[ $SHARP   ]&&  SHARP="--sharpness $SHARP"
[ $CONTR   ]&&  CONTR="--contrast $CONTR"
[ $BRIGH   ]&&  BRIGH="--brightness $BRIGH"
[ $SAT     ]&&    SAT="--saturation $SAT"
[ $ROT     ]&&    ROT="--rotation $ROT"
[ $HFLIP   ]&&  HFLIP="--hflip"
[ $VFLIP   ]&&  VFLIP="--vflip"
[ $LAST    ]&&   LAST="--latest $LAST"    ||LAST="--latest /var/www/html/lapsus/last.jpg"
[ ! $ODIR  ]&&   ODIR="/var/www/html/lapsus/DCIM"
[ ! $OFILE ]&&  OFILE="lapsus_"`date +%H%M%S`
[ ! -d $ODIR ]&& mkdir $ODIR
function take {
    #Adjust()
    echo `date +%H.%M.%S.%N` $DEF_ARG $WIDTH $HEIGHT $QUALITY $TIMEOUT $THUMB $SHARP $CONTR $BRIGH $SAT $ISO $SS $AWB $ROT $HFLIP $VFLIP $LAST -o $ODIR/$OFILE`printf "_%06d.jpg" $N`
    raspistill $DEF_ARG\
        $WIDTH $HEIGHT $QUALITY $TIMEOUT $THUMB\
        $SHARP $CONTR $BRIGH $SAT\
        $ISO $SS $AWB $ROT $HFLIP $VFLIP $LAST\
        -o $ODIR/$OFILE`printf "_%06d.jpg" $N`
}
while [ $N -lt $COUNT  ] ; do
    take &
    sleep $SLP
    N=$[$N+1]
done

