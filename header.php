<?php $pagetitle="Welcome to Epic Photographpy"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php 
            $sitename = "Epic Photography"; 
            $sitedescription = "High Resolution Photos for your Desktop";
            $sitepath = "http://people.oregonstate.edu/~hoeftc/epicphotos/";
        ?>
        <title>
            <?php print $pagetitle." | ".$sitename." | ".$sitedescription; ?>
        </title>
        <!--<meta name="Robots" content="noindex, nofollow, noarchive" />-->
        <meta name="description" content="<?php print $sitedescription;?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Cody Ray Freeman Hoeft" />
        <meta name="keywords" content="desktop wallpaper, desktop background, photo backgrounds, picture background, nature photos, close-up photos, background slideshow, wallpaper slideshow, cool desktop wallpaper, cool desktop background, computer backgrounds, computer wallpapers, desktop wallpaper hd, background screen, desktop background hd, wallpaper desktop download, background desktop download, nature wallpaper desktop, nature background desktop, pc desktop wallpaper, desktop wallpaper slideshow" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="author" type="text/plain" href="<?php echo $sitepath; ?>humans.txt" />
        <link rel="icon" type="image/gif" href="<?php echo $sitepath; ?>favicon.gif" />
        <link rel="icon" type="image/gif" href="<?php echo $sitepath; ?>favicon.ico" />
        <link rel="stylesheet" href="<?php echo $sitepath; ?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo $sitepath; ?>css/main.css">
        <script src="<?php echo $sitepath; ?>js/vendor/modernizr-2.6.2.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="container" class="boxshadows">
            <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <nav id="skip">
                <ul class="horizontal">
                    <li><a href="#content" title="Skip To Content">&darr;</a></li>
                    <li><a href="#" onclick="window.print(); return false;" title="Opens the print dialog box.">Print</a></li>
                </ul> 
            </nav>
            <header>
                <h1><a href="<?php echo $sitepath;?>"><?php echo $sitename; ?></a></h1>
                <p><?php echo $sitedescription; ?></p>
            </header>
            <nav id="main">
                <ul class="horizontal"> 
                    <li><a href="<?php echo $sitepath; ?>categories/nature">Nature</a> 
                    <ul> 
                        <li><a href="<?php echo $sitepath; ?>categories/nature/mountains.php">Mountains</a></li> 
                        <li><a href="<?php echo $sitepath; ?>categories/nature/trees.php">Trees</a></li> 
                        <li><a href="<?php echo $sitepath; ?>categories/nature/water.php">Water</a></li> 
                    </ul> 
                    <li><a href="<?php echo $sitepath; ?>categories/mankind.php">Mankind</a></li> 
                    <li><a href="<?php echo $sitepath; ?>categories/closeup.php">Close Up</a></li> 
                    <li><a href="<?php echo $sitepath; ?>categories/astronomy.php">Astronomy</a></li> 
                    <li><a href="<?php echo $sitepath; ?>categories/fireworks.php">Fireworks</a></li> 
                </ul>
            </nav>
            <h1><?php print $pagetitle;?></h1>
            <section id="rightcolumn" class="roundcorners boxshadows">
                <nav id="tools">
                    <ul class="vertical"> 
                        <li><a href="<?php echo $sitepath; ?>about">About Me</a> 
                        <ul>
                            <li><a href="<?php echo $sitepath; ?>about/contact.php">Contact Me</a></li> 
                            <li><a href="<?php echo $sitepath; ?>about/remove.php">Remove a Photo</a></li> 
                            <li><a href="<?php echo $sitepath; ?>about/share.php">Share This Site</a></li> 
                        </ul>
                        </li>
                        <li><a href="<?php echo $sitepath; ?>categories">List Photo Categories</a></li> 
                    </ul>
                </nav>
            </section>
            <section id="content">
