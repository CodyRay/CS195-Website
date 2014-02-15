<?php 
    $pagetitle="Proof of Concept";
    $root = "../"; 
    include($root."images.php");
    include($root."header.php");?>
    <p>Note that all of this images are missing important information like titles and alt tags</p>
<?php    
    foreach( $tags_array['nature'] as $image ) :
    getimage( $image, "column", $image_array ); 
    echo $image_array[$image]['caption'];
    endforeach; 
    include($root."footer.php");

?>
