<?php $pagetitle="Contact Me"?>
<?php $root = "../../"; include($root."images.php"); ?>
<?php include $root.'header.php'; ?>
<p>Use this form if you would like contact me, information typed into this form will be sent to me by email. Your information is confidential and will only be kept as long as I need it. Your name, email, and message are required. All other fields are optional. Use the Access Keys (ALT-SHIFT for Windows and CTRL-OPTION for Mac) to jump to a field</p> 
<form action="http://oregonstate.edu/tools/formmail.php" method="post" class="center-on-mobile">
    <input type="hidden" name="recipient" value="hoeftc@onid.oregonstate.edu" />
    <input type="hidden" name="required" value="realname, email, message" />
    <input type="hidden" name="subject" value="[Epic Photos]"/>
    <input type="hidden" name="redirect" value="<?php echo $sitepath ?>about/contact/reply.php" /> 
    <fieldset>
        <legend>If you wouldn't mind, please help me make my site better by providing some marketing data.</legend>
        <label for="referral">How did you find Epic Photos?</label>
        <select name="referral" id="referral" tabindex="1" autofocus >
            <option>Select an Option</option>
            <option value="Google">Google</option>
            <option value="Other Search">Other Search</option>
            <option value="Word of Mouth">Word of Mouth</option>
            <option value="Referral">Referral</option>
        </select>
        <label>Would you be Interested in any of the following desktop enhancements?</label>
        <div class="inline">
            <label for="icons">
            <input type="checkbox" name="icons" id="icons" value="Icons" tabindex="2" />
            Icons</label>
            <label for="fonts">
            <input type="checkbox" name="fonts" id="fonts" value="Fonts"  tabindex="3"/>
            Fonts</label>
            <label for="screensavers">
            <input type="checkbox" name="screensavers" id="screensavers"  value="Screen Savers"  tabindex="4" />
            Screen Savers</label>
        </div>
        <label>What is your favorite category?</label>
        <div class="inline">
            <label for="catnature">
            <input  id="catnature" name="category" type="radio" value="Nature"  tabindex="5"/>
            Nature</label>
            <label for="catmankind">
            <input  id="catmankind"  name="category" type="radio" value="Mankind"  tabindex="5" />
            Mankind</label>
            <label for="catcloseup">
            <input  id="catcloseup"    name="category" type="radio" value="Close Up"  tabindex="5"/>
            Close Up</label>
            <label for="catastronomy">
            <input  id="catastronomy"  name="category" type="radio" value="Astronomy"  tabindex="5" />
            Astronomy</label>
            <label for="catfireworks">
            <input  id="catfireworks"    name="category" type="radio" value="Fireworks"  tabindex="5"/>
            Fireworks</label>
        </div>
    </fieldset>
    <fieldset class="inline">
        <legend>Please Fill Out Contact Information so that I can respond to your message. Your name and a email are required, your email will be kept confidential.</legend>
        <label for="realname"><kbd>N</kbd>ame <span class="highlight">*</span></label>
        <input accesskey="n" name="realname" id="realname" placeholder="John Doe" type="text"  tabindex="6" required />
        <label for="email"><kbd>E</kbd>mail <span class="highlight">*</span></label>
        <input accesskey="e" name="email" id="email" type="email" placeholder="username@example.com"  tabindex="7" required />
        <label for="phone"><kbd>T</kbd>elephone</label>
        <input accesskey="t" name="phone" id="phone" placeholder="(555) 555-5555" type="tel"  tabindex="8"/>
        <label for="web"><kbd>A</kbd>ddress of your Website</label>
        <input accesskey="a" name="web" id="web" type="url" placeholder="http://people.oregonstate.edu/~hoeftc/epicphotos/" tabindex="9"/>
    </fieldset>
    <fieldset class="inline">
        <legend>What was <kbd>M</kbd>essage did you wanted to send me?</legend>
        <label for="message">Please do not use HTML or Markup. <span class="highlight">*</span></label>
        <textarea accesskey="m" id="message" name="message" rows="10" placeholder="Hi Cody," tabindex="10" required></textarea>
        <div class="inline">
            <input class="margin-tb" name="send" id="send" type="submit" value="Submit Form" tabindex="11" />
            <input class="margin-tb" name="reset" id="reset" type="reset" value="Restart" tabindex="12" />
        </div>
    </fieldset>
</form>
<?php include $root.'footer.php'; ?>
