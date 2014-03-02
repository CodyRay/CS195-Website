            </section>
            <?php if(0): ?>
                <section id="leftcolumn">
                    <p>HELLO WORLD</p>
                </section>
            <?php endif; ?>
            </div>
            <footer class="margin-sides pad-tb">
                <nav id="legal">
                    <ul class="horizontal">
                        <li><?php echo 'Updated ' . date('F j, Y',filemtime($_SERVER['SCRIPT_FILENAME'])) ?></li>
                        <li><a href="<?php echo $sitepath; ?>about/contact/index.php">Contact Me</a></li>
                        <li>Epic Photography &copy; <?php print date('Y') ?> Cody Ray Freeman Hoeft.</li>
                        <li>Images are Property of their Respective Owners.</li>
                        <li class="invisible-link">
                        <a href="http://subtlepatterns.com/" target="_blank"><img src="<?php echo $sitepath ; ?>img/sp-logo.png" title="This Site Proudly Uses Subtle Patterns" alt="Subtle Patterns Logo"/></a>
                        <a href="https://github.com/haroldhues/CS-161-Website" target="_blank"><img src="<?php echo $sitepath ; ?>img/github.png" title="Checkout the Source Code on GitHub" alt="OctoCat"/></a>
                        <a href="http://html5boilerplate.com/" target="_blank"><img src="<?php echo $sitepath ; ?>img/boilerplate.png" title="This Site Built on HTML5 Boilerplate" alt="Boilerplate Logo"/></a>
                        </li>
                    </ul>
                </nav>
            </footer>

            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="<?php echo $sitepath; ?>js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
            <!--<script src="<?php echo $sitepath; ?>js/jquery.fittext.js"></script>
            <script>
              jQuery(".pagetitle").fitText(1, { minFontSize: '12px', maxFontSize: '50px' });
            </script>-->
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
