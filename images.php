<?php 
    $featured_array = array(); //actuallly put values here and move to pages
    $file_array = array_diff( scandir( $root."images/original/"), array( '..', '.'));
    //print_r( $file_array );
    $category_array = array();
    $tags_array = array();
    $image_array = array();
    $unassigned = array();
    foreach( $file_array as $file)
    {   
        $file_data = $root."data/".preg_replace("/\\.[^.\\s]{3,4}$/", "", $file).".txt";
        $title = '';
        $author = '';
        $caption = '';
        $tags = array();
        $image_root = preg_replace("/\\.[^.\\s]{3,4}$/", "", $file);
        if(!file_exists($file_data)) $unsorted[] = $image_root;
        else
        {
            include( $file_data );
            $image_array[$image_root] = array(
                'title' => $title,
                'author' => $author,
                'caption' => $caption,
                'tags' => $tags
                );
            //print_r( $image_array );
            foreach( $tags as $tag ) $tags_array[ $tag ][] = $image_root;
        }
    }
    foreach( $category_array as &$category_item) shuffle( $category_item );
    unset($category_item);
    shuffle( $unsorted );
    function getimage($image, $size, $image_array) { ?>
        <a href="http://people.oregonstate.edu/~hoeftc/images/original/<?php echo $image; ?>.jpg"><img src="http://people.oregonstate.edu/~hoeftc/images/wide/column/<?php echo $image; ?>-400x225.jpg" alt="<?php echo $image_array[$image]['title'];?>" title="&copy; <?php echo $image_array[$image]['author']; ?> 2014"/></a>
        <?php 
    }
function getcaption($image, $image_array){ echo $image_array[$image]['caption']; }
?>
