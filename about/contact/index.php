<?php $pagetitle="Contact Me"?>
<?php $root = "../../"; include($root."images.php"); ?>
<?php include $root.'header.php'; ?>
<aside class="aside center-on-mobile leftcolumn background boxshadows pad-tb pad-sides">
    <h3>Quick Contact Info</h3>
    <figure>
        <img class="image boxshadows" src="<?php echo $sitepath; ?>img/grad-picture.jpg" alt="Portrait of Cody Ray Hoeft" title="&copy; Cody Ray Hoeft 2013" />
    </figure>
    <ul class="invisible-link small-font fit-content pad-tb">
        <li><i class="fa fa-phone"></i> (541) 720-4317 </li>
        <li><i class="fa fa-envelope"></i><a href="mailto:hoeftc@onid.oregonstate.edu" title="Email Me"> hoeftc@onid.oregonstate.edu</a></li>
        <li><i class="fa fa-facebook"></i><a href="https://www.facebook.com/codyray.hoeft" title="Find Me on Facebook" target="_blank"> Facebook</a></li>
    </ul>
</aside>
<p>Use this form to contact me about stuff.</p>

<form action="http://oregonstate.edu/tools/formmail.php" method="post">
    <input type="hidden" name="recipient" value="hoeftc@onid.oregonstate.edu" />
    <input type="hidden" name="required" value="realname, email, message" />
    <input type="hidden" name="subject" value="[Epic Photos]"/>
    <input type="hidden" name="redirect" value="<?php echo $sitepath ?>about/contact/reply.php" /> 
    <fieldset>
        <legend>Please Fill Out Contact Information so that I can respond to your message. Your Name and a Unique Identifier (Name, IRC Handler, or a cool Nick-name all Ok). Your email will be kept so confidential, I won't even know I have it.</legend>
        <label for="realname">Name</label>
        <input name="realname" id="realname" placeholder="John Doe" type="text" required autofocus />
        <label for="email">Email</label>
        <input name="email" id="email" type="email" placeholder="username@example.com" required />
        <label for="phone">Telephone</label>
        <input name="phone" id="phone" placeholder="(555) 555-5555" type="tel" />
        <label for="web">Address of your Website</label>
        <input name="web" id="web" type="url" placeholder="http://people.oregonstate.edu/~hoeftc/epicphotos/"/>
    </fieldset>
    <fieldset>
        <legend>What was it you wanted to talk to me about?</legend>
        <label for="message"></label>
        <textarea id="message" name="message" rows="5" placeholder="Hi Cody," required></textarea>
    </fieldset>
    <fieldset>
        <legend></legend>
        <label for="facebook">
        <input type="checkbox" name="facebook" id="facebook" value="Facebook" />
        Facebook</label>
        <label for="youtube">
        <input type="checkbox" name="youtube" id="youtube" value="YouTube" />
        YouTube</label>
        <label for="other">
        <input type="checkbox" name="other" id="other"  value="Other"  />
        Other</label>
    </fieldset>
    <fieldset>
        <legend>Prompt...</legend>
        <label for="send"></label>
        <input name="send" id="send" type="submit" value="Submit Form" />
        <label for="reset"></label>
        <input name="reset" id="reset" type="reset" value="Restart" />
    </fieldset>
</form>

<p>Epic Photography provides a large collection of High Resolution Photos that look great in a desktop background slideshow. My site will provide images that have superior quality compared to others The Photos on this site have been handpicked by me for their beauty over the past five years. I only select natural images: scenic pictures, macro close up images, and Astronomy Pictures. But other people should have an epic background slideshow, this website will allow anyone to download the images and use them on their own machine</p>
<?php include $root.'footer.php'; ?>
