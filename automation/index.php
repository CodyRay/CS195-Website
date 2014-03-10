<?php 
    $pagetitle="Proof of Concept";
    $root = "../"; 
    include($root."images.php");
    include($root."header.php");?>
    <p>Note that all of these images are missing important information like titles and alt tags</p>
<figure class="transition">
    <ul class="gallery invisible-link">
<?php foreach($unsorted as $image) : ?>
        <li><?php getimage($image,'column', $image_array); ?>
            <ul><li><?php getcaption($image, $image_array); ?></li></ul>
        </li>
<?php endforeach; ?>
    </ul>
</figure>
<?php    
    include($root."footer.php");

?>
