#!/usr/bin/env bash
FILES=../images/original/*
DATA_DIR=../data
for f in $FILES
do
    echo "Processing $f file..."
    root=$(basename $f .jpg)
    data=$DATA_DIR/$root.txt
    if [ -f $data  ] 
    then
        echo "it is here"
        cat $data
    else
        touch $data
        echo "<?php /*" >> $data
        exiftool --exiftoolversion --filename --directory --filesize --filemodifydate --filepermissions --filetype --mimetype --jfifversion --resolutionunit --xresolution --yresolution --imagewidth --imageheight --encodingprocess --bitspersample --colorcomponents --ycbcrsubsampling --imagesize $f >> $data
        echo "*/" >> $data
        echo -n "\$title = \"" >> $data
        exiftool -title $f -b >> $data
        echo "\";">> $data
        echo -n "\$author= \"" >> $data
        exiftool -copyright $f -b >> $data
        echo "\";">> $data
        echo -n "\$caption= \"" >> $data
        exiftool -title $f -b >> $data
        echo "\";">> $data
        echo -n "\$tags=array(" >> $data
        eog $f &
        vim ./tmp.txt
        cat ./tmp.txt >> $data &&
        rm ./tmp.txt
        echo " );">> $data
        echo "?>" >> $data
        less $data
        echo "Do You Want to Delete the file?"
        select yn in "Yes" "No" "Edit"; do
            case $yn in
                Yes ) rm $data; break;;
                No ) break;;
                Edit ) vim $data; break;;
            esac
        done
        read -p "Press [Enter] to continue or CTRL-C to stop here"
    fi

done
