#!/usr/bin/env bash
mkdir square-thumb/
mkdir wide/
mkdir wide/highres/
mkdir wide/column/
mkdir shrunk/
mkdir shrunk/thumb/
mkdir shrunk/column/
mkdir shrunk/large/
mkdir original/
mv *-1920x1080.jpg wide/highres/
mv *-400x225.jpg wide/column/
mv *-200x200.jpg square-thumb/
mv *-200x???.jpg shrunk/thumb/
mv *-400x???.jpg shrunk/column/
mv *-1024x???.jpg shrunk/large/
mv *.jpg original/

