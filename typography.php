<?php $pagetitle="Typography Test Page"; ?>
<?php 
    $root = "";
    include($root."images.php");
    include $root.'header.php'; ?>

<h1>Headline 1</h1>
<p><cite>Varius curae</cite></p>
<p>Lorem ipsum dolor sit amet, <em>emphasis</em> mofestie <strong>strong</strong> auctor fusce ut, duis nisl eu massa odio, vestibulum lorem aliquam ut. Urna placerat provident. Felis neque maecenas, ornare orci nam dolor egestas nulla, congue pellentesque pellentesque. </p>
<h2>Headline 2</h2>
<p>Ac luctus placerat laoreet erat.</p>
<ol>
  <li>Facilisi metus vitae et </li>
  <li>consequat purus, consequat purus, superscript<sup>®</sup> purus, consequat purus, </li>
  <li>justo rutrum vestibulum diam ante aenean. Subscript<sub>2</sub> rutrum vestibulum diam ante aenean. justo rutrum vestibulum diam ante aenean. </li>
  <li>Ut vestibulum.</li>
</ol>
<h3>Headline 3</h3>
<p><span class="dropcap">N</span>on sit vitae metus ut, <dfn title="DFN stands for Definition.">DFN</dfn> stands for definition. Use it to hide the definition of a word in the title attribute. Justo lorem eget velit libero elit amet, ac in lorem dui feugiat lectus cursus. Placerat porta tempor morbi leo libero, sit odio in scelerisque eu nonummy tellus, neque quam semper posuere ante consectetuer id. Congue donec volutpat integer a tempus, etiam nulla vestibulum, </p>
<p>Abbreviation of <abbr title="portable document format">PDF</abbr> stands for Portable Document Format.</p>
<p>Office hours marked in the Address element: </p>
<address>1105 Kelly Engineering Center</address>
<ul>
  <li>et purus vel, v</li>
  <li>elit massa, </li>
  <li>vitae et quam. vitae et quam. vitae et quam. vitae et quam. vitae et quam. vitae et quam. vitae et quam. vitae et quam. vitae et quam. </li>
  <li>Nisl quam orci volutpat.</li>
</ul>
<h4>Headline 4</h4>
<p>Amet ipsum vel eu, aliquam erat ac, fusce massa quam vivamus sit massa, euismod quis. Donec suspendisse fermentum amet, nisl magna non suspendisse, consectetuer malesuada integer cras convallis consequat. Varius curae vivamus congue lacinia, turpis mauris, consectetuer vehicula. </p>
<dl>
  <dt><a href="">Turpis tortor non</a> </dt>
  <dd>Mauris quis urna pellentesque aliquet justo, </dd>
  <dt><a href="">Hac augue hendrerit neque mi</a> </dt>
  <dd>in tristique semper vulputate parturient aliquam porttitor, </dd>
</dl>
<p>Vitae tellus placerat in torquent vel, magna fusce eget maxime etiam sit nunc. In rhoncus, libero arcu sociosqu quis diam, mattis orci lacus, gravida aliquam sed placerat, ridiculus scelerisque cras erat velit.</p>
<blockquote>
  <p>Scelerisque maecenas diam, elit lacus pellentesque rhoncus sit natus in. Leo mauris, quis amet nec. Rutrum pellentesque dui consectetuer, lorem urna sem, eget sociis curabitur ante vestibulum, wisi porta. Aliquam elementum congue. Voluptate tortor neque mauris tellus morbi ornare, lacinia a dignissim vestibulum fringilla lobortis.</p>
  <cite>M. Valiuse Citation</cite>
</blockquote>

<h5>Headline 5</h5>
<table>
  <caption> This is a table caption </caption>
  <thead>
      <tr>
        <th scope="col">Header cell</th>
        <th scope="col">Header cell</th>
        <th scope="col">Header cell</th>
      </tr>
  </thead>
  <tbody>
      <tr>
        <th scope="row">Header cell</th>
        <td>Data Cell</td>
        <td>Data Cell</td>
      </tr>
      <tr>
        <th scope="row">Header cell</th>
        <td>Data Cell</td>
        <td>Data Cell</td>
      </tr>
      <tr>
        <th scope="row">Header cell</th>
        <td>Data Cell</td>
        <td>Data Cell</td>
      </tr>
      <tr>
        <th scope="row">Header cell</th>
        <td>Data Cell</td>
        <td>Data Cell</td>
      </tr>
    </tbody>
</table>

<h6>Headline 6</h6>
<figure>
<p>Figure Placeholder</p>
<img src="img/placeholder.gif" alt="" title="" width="320" height="200" />
<figcaption>Figure caption: Diam barls &copy; diam ante </figcaption>
</figure>

<p>An day at the beach ASCII art and the preformmated element, by JGS:</p>
<pre>
          |
         \ _ /
       -= (_) =-
         /   \         _\/_
           |           //o\  _\/_
    _____ _ __ __ ____ _ | __/o\\ _
  =-=-_-__=_-= _=_=-=_,-'|"'""-|-,_
   =- _=-=- -_=-=_,-"          |
 jgs =- =- -=.--"

</pre>
<h2>Programming Markup</h2>
<p>The code tag: <code>&lt;element&gt;</code></p>
<p><kbd>Keyboard input</kbd></p>
<p><samp>Sample output from computer program.</samp></p>
<p>Remember to purchase <mark>apples</mark> and <mark>oranges</mark> today.</p>

<?php include $root.'footer.php'; ?>
