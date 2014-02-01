            </section>
            <?php if(0): ?>
                <section id="leftcolumn">
                    <p>HELLO WORLD</p>
                </section>
            <?php endif; ?>
            </div>
            <footer>
                <nav id="legal">
                    <ul class="horizontal">
                        <li><?php echo 'Updated ' . date('F j, Y',filemtime($_SERVER['SCRIPT_FILENAME'])) ?></li>
                        <li><a href="<?php echo $sitepath; ?>about/contact.php">Contact Me</a></li>
                        <li>Epic Photography &copy; <?php print date('Y') ?> Cody Ray Freeman Hoeft.</li>
                        <li>Images are Property of their Respective Owners.</li>
                    </ul>
                </nav>
            </footer>

            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="<?php echo $sitepath; ?>js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
            <script src="<?php echo $sitepath; ?>js/plugins.js"></script>
            <script src="<?php echo $sitepath; ?>js/main.js"></script>

            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
            <script>
                (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                e.src='//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                ga('create', 'UA-47369412-1', 'oregonstate.edu');ga('send','pageview');
            </script>
        </div>
    </body>
</html>
