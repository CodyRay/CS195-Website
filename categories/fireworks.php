<?php 
$root="../";
include $root.'images.php';
$category="Fireworks";
$pagetitle="Category: ".$category;
?>
<?php include $root.'header.php'; ?>
<figure class="transition">
    <ul class="gallery invisible-link">
<?php foreach($tags_array['fireworks'] as $image) : ?>
        <li><?php getimage($image,'column', $image_array); ?>
            <ul><li><?php getcaption($image, $image_array); ?></li></ul>
        </li>
<?php endforeach; ?>
    </ul>
</figure>
<?php include $root.'footer.php'; ?>
