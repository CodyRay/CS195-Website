<?php $pagetitle="LESS Pre-Proccessor"; ?>
<?php 
    $root = "";
    include($root."images.php");
    include $root.'header.php'; ?>
<h1>Uses for Less</h1>
<p>LESS is a type of CSS that adds extra features to the CSS Language like variables and class inheritance. The way LESS works is you code all of your CSS in the .less file, before you publish it you convert it to a .css file</p>
<h2>Define Color Variables</h2>
<figure>
<pre><span style="color: #008800; font-weight: bold">@nice-blue</span><span style="color: #333333">:</span> <span style="color: #0066BB; font-weight: bold">#5B83AD</span>;
<span style="color: #008800; font-weight: bold">@light-blue</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">@nice-blue</span> <span style="color: #333333">+</span> <span style="color: #0066BB; font-weight: bold">#111</span>;

<span style="color: #0066BB; font-weight: bold">#header</span> {
      <span style="color: #007700">color</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">@light-blue</span>;
}
</pre>
<figcaption>Example code from <a href="http://lesscss.org/features/" title="LESS CSS features">lesscss.org</a></figcaption>
</figure>
<h2>More Features</h2>
<p>For more features of LESS visit the <a href="http://lesscss.org/features/" title="Less Features Page">LESS Feature Page</a></p>
<h1>Production</h1>
<p>In a final version of a site it is best practice to convert the <code>.less</code> to <code>.css</code> using <a href="http://less2css.org/">the less2css online IDE</a> or similar service.</p>
<h1>Development</h1>
<p>When we are working on our site we don't want to constantly have to update our file every time we make a change. We will use the <code>less.js</code> file to help us do this.</p>
<h2>Setup</h2>
<h3>Download and Upload the less.js</h3>
<p>Download <a href="<?php echo $root; ?>js/less.js" download="less.js" title="less.js file">here</a> or go to the <a href="http://lesscss.org/#client-side-usage" title="lesscss.org">lesscss.org</a> website and download it.</p>
<p>Now upload the file to your <code>js/</code> directory of your site. Use ShiftEdit, FTP, or use this linux-fu incantation on your linux or mac boxes</p>
<pre>rsync ~/Downloads/less.js &lt;your username&gt;@shell.onid.oregonstate.edu:~/public_html/&lt;your site&gt;/js/</pre>
<h3>Add new stylesheet to head</h3>
<p>Add these lines to your <code>header.php</code> file in the <code>&lt;head&gt;</code> section.</p>
<pre><span style="color: #007700">&lt;link</span> <span style="color: #0000CC">rel=</span><span style="background-color: #fff0f0">&quot;stylesheet/less&quot;</span> <span style="color: #0000CC">type=</span><span style="background-color: #fff0f0">&quot;text/css&quot;</span> <span style="color: #0000CC">href=</span><span style="background-color: #fff0f0">&quot;css/style.less&quot;</span> <span style="color: #007700">/&gt;</span>
<span style="color: #007700">&lt;script </span><span style="color: #0000CC">src=</span><span style="background-color: #fff0f0">&quot;js/less.js&quot;</span> <span style="color: #0000CC">type=</span><span style="background-color: #fff0f0">&quot;text/javascript&quot;</span><span style="color: #007700">&gt;&lt;/script&gt;</span></pre>
<h3>Create the file</h3>
<p>In ShiftEdit create a new <code>LESS</code> file.</p>
<img src="<?php echo $sitepath ; ?>img/create_less_shiftedit.png" title="&copy; ShiftEdit 2014" alt="Select the LESS option in ShiftEdit">
<p>Save the file in the css directory as <code>style.less</code></p>
<?php include $root.'footer.php'; ?>
