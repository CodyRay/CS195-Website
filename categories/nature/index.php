<?php 
$category="Nature";
$pagetitle="Category: ".$category;
?>
<?php include '../../header.php'; ?>
<p>This is the awesome Nature pictures</p>
<figure>
    <ul class="gallery invisible-link">
        <li><?php getimage('bosquetk','column', $image_array); ?>
            <ul><li><?php getcaption('bosquetk', $image_array); ?></li></ul>
        </li>
        <li><?php getimage('rainbows4','column', $image_array); ?>
            <ul><li><?php getcaption('rainbows4', $image_array); ?></li></ul>
        </li>
        <li><?php getimage('jean-claudebaumert-morninglakelouisebanffnpalbertacanada5-22-2012-11606-pm','column', $image_array); ?>
            <ul><li><?php getcaption('jean-claudebaumert-morninglakelouisebanffnpalbertacanada5-22-2012-11606-pm', $image_array); ?></li></ul>
        </li>
    </ul>
</figure>

<?php include '../../footer.php'; ?>
