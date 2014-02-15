<?php $pagetitle="Welcome to Epic Photographpy"; ?>
<?php 
    $root = "";
    include($root."images.php");
    include 'header.php'; ?>
<p>See the Proof of Concept <a href="http://people.oregonstate.edu/~hoeftc/epicphotos/automation/">Here</a></p>
<p><a href="#">Epic Photography</a> provides a large collection of High Resolution Photos that look great in a desktop background slideshow. My site will provide images that have superior quality compared to others The Photos on this site have been handpicked by me for their beauty over the past five years. I only select natural images: scenic pictures, macro close up images, and Astronomy Pictures. But other people should have an epic background slideshow, this website will allow anyone to download the images and use them on their own machine</p>
<iframe src="//www.youtube.com/embed/CnWsC4kIHn8?rel=0" frameborder="0" allowfullscreen></iframe>
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
<p><cite></cite></p>
<?php include 'footer.php'; ?>
