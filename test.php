<?php 
    $root = ""; //Not implemented yet
    $featured_array = array(); //actuallly put values here and move to pages
    $file_array = array_diff( scandir( $root."images/"), array( '..', '.'));
    //print_r( $file_array );
    $category_array = array();
    $tags_array = array();
    $image_array = array();
    $unassigned = array();
    foreach( $file_array as $file)
    {   
        $file_data = $root."data/".preg_replace("/\\.[^.\\s]{3,4}$/", "", $file).".txt";
        if(!file_exists($file_data)) $unsorted[] = $file;
        else
        {
            include( $file_data );
            $image_array[$file] = array(
                'title' => $title,
                'category' => $category,
                'author' => $author,
                'tags' => $tags
                );
            //print_r( $image_array );
            $category_array[ $category ][] = $file;
            foreach( $tags as $tag ) $tags_array[ $tag ][] = $file;
        }
        $title = '';
        $category = '';
        $author = '';
        $tags = array();
    }
    foreach( $category_array as &$category_item) shuffle( $category_item );
    unset($category_item);
    print_r( $category_array );
?>
