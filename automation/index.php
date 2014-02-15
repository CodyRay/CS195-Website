<?php 
    $pagetitle="Proof of Concept";
    $root = "../"; 
    include($root."images.php");
    include($root."header.php");?>
    <p>Note that all of this images are missing important information like titles and alt tags</p>
<?php    
    foreach( $unsorted as $image ) :
    getimage( $image, "column" ); 
    endforeach; 
    include($root."footer.php");

?>
