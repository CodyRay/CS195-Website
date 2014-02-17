<?php 
$root="../../";
include $root.'images.php';
$category="Nature";
$pagetitle="Category: ".$category;
?>
<?php include '../../header.php'; ?>
<p>Here are some awesome nature pictures</p>
<figure class="transition">
    <ul class="gallery invisible-link">
<?php foreach($tags_array['nature'] as $image) : ?>
        <li><?php getimage($image,'column', $image_array); ?>
            <ul><li><?php getcaption($image, $image_array); ?></li></ul>
        </li>
<?php endforeach; ?>
    </ul>
</figure>
<?php include '../../footer.php'; ?>
