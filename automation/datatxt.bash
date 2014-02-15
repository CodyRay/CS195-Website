#!/usr/bin/env bash
FILES=../images/original/a*
DATA_DIR=../data
for f in $FILES
do
    echo "Processing $f file..."
    root=$(basename $f .jpg)
    data=$DATA_DIR/$root.txt
    if [ -f $data  ] 
    then
        echo "it is here"
    else
        touch $data
        echo "<?php" >> $data

        vim ./tmp.txt
        cat ./tmp.txt >> $data

    fi
done
