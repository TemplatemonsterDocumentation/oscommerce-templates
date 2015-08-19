<h2 class="item4">Addendum</h2>
<p>We did our best to make this documentation as clear as possible. However, if you have any difficulties with
    osCommerce template or any suggestions on improving the template or documentation, feel free to contact our support
    team through the:</p>
<ul class="marked-list">
    <li><a target="_blank" href="http://chat.template-help.com/">Live Chat</a></li>
    <li><a target="_blank" href="http://support.template-help.com/index.php?/Tickets/Submit">Online Help Desk</a></li>
</ul>
<h4>Additional Links</h4>
<ul class="marked-list">
    <li><a href="http://www.oscommerce.info/confluence/dashboard.action" target="_blank">Official documentation</a></li>
    <li><a href="http://www.oscommerce.com/" target="_blank">Support site</a></li>
    <li><a href="/help/ecommerce/oscommerce-tutorials/" target="_blank">osCommerce tutorials</a></li>
</ul>
<h4>Loading data from Google servers</h4>
<p>Some countries have issues connecting to Google servers. This can cause issues loading Google Fonts and Java Script
    libraries from Google CDN. To resolve these issues please do the following: </p>
<h4>Can't load Google Fonts: </h4>
<ol class="index-list">
    <li>Open \includes\template_top.php file</li>
    <li><p>Locate the line:</p>
        <code>href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'</code>
    </li>
    <li><p>Replace it with the following:</p>
        <code>href='//fonts.useso.com/css?family=Open+Sans' rel='stylesheet' type='text/css'</code>
    </li>
</ol>
<h4>W3C validation</h4>
<p class="alert alert-info">Both HTML markup and CSS styles used in our templates are semantically correct and valid. However some W3C errors
    still can take place. Making code 100% W3C valid eliminates the usage of modern website technologies as CSS3
    features and HTML5 markup. Our goal is to deliver rich user experience with high quality templates and sometimes we
    have to break some rules.</p>