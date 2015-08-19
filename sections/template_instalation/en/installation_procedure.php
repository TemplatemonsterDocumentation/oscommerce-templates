<h3>Installation Procedure</h3>
<p>The web based installation procedure configures the online store and imports the configuration data into th5e
    database. This is necessary to create a fully functional online store and to create an administrator that
    administrates the online store through the Administration Tool.</p>
<p>The configuration values provided by default are safe to use but may need to be changed depending on the environment
    of the web server.</p>
<ol class="index-list">
    <li> Installing a New Online Store</li>
    <li> Welcome Page</li>
    <li> Database Server</li>
    <li> Web Server</li>
    <li> Online Store Settings</li>
    <li> Finished!</li>
</ol>
<h4>Installing a New Online Store</h4>

<p>The web based installation procedure is automatically started when accessing the online store through a web
    browser. This can be achieved by entering the WWW address of osCommerce Online Merchant installation in your
    browser.</p>

<p>For example:</p>

<p><code>http://www.yourwebsite.com/catalog/</code></p>

<p>osCommerce Online Merchant automatically detects if the installation has already been completed and redirects to
    the installation procedure if it has not yet been performed.</p>

<p>Feel free to check out <a href="/help/final-steps-installation.html" target="_blank">the tutorial on final steps
        of installation</a>.</p>

<h5>Welcome Page</h5>

<p>The first step is the welcome page which displays the current recommended configuration settings for PHP:</p>

<figure class="img-polaroid">
    <img src="img/osc-engine-installation-initital.jpg" alt="Welcome Page"/>
</figure>
<p>It is recommended to update a PHP configuration value, or to install and activate a PHP extension, if it is
    marked against the recommended setting.</p>

<p class="alert alert-info">When making PHP configuration changes or when installing and activating a PHP extension,
    the web server service needs to be restarted for the changes to take effect. Once restarted, refreshing the
    welcome installation page and viewing the Server Capabilities listing can confirm if the PHP configuration
    changes have taken place and if it meets the recommended settings.</p>

<h5>Database Server</h5>

<p>The second step sets the database connection parameters to successfully connect to the database server, to import
    the database table structure, and to import required data:</p>

<figure class="img-polaroid">
    <img src="img/osc-engine-installation-step2.jpg" alt="Database Server"/>
</figure>
<p>The installation procedure verifies the values entered before proceeding to the next step. If there is a problem
    connecting to the database server, an error message is shown similar to the message shown in the screenshot
    below:</p>

<figure class="img-polaroid">
    <img src="img/osc-engine-installation-step2b.jpg" alt="Database Server"/>
</figure>
<p class="alert alert-warning">Make sure the correct username, password, and database name are listed.</p>

<h5>Web Server</h5>

<p>The third step sets the web server parameters to successfully serve the online store to users:</p>

<figure class="img-polaroid">
    <img src="img/osc-engine-installation-step3.jpg" alt="Web Server"/>
</figure>
<h5>Online Store Settings</h5>

<p>The fourth step sets the store owner and administrator settings for the online store:</p>

<p>It is important to keep note of the administrator username and password as these are used to login and to access
    the Administration Tool.</p>
<figure class="img-polaroid">
    <img src="img/osc-engine-installation-step4.jpg" alt="Online Store Settings"/>
</figure>

<p class="alert alert-info">Additional administrators can be created in the Administration Tool after the
    installation procedure has been successfully completed.</p>

<h5>Finished!</h5>

<p>The last step in the installation procedure stores the database server and web server parameters to the
    configuration file on the web server. On successfully saving the configuration file, the installation procedure
    is finalized and the online store is ready to be used.</p>

<p>It is important to keep note of the administrator username and password as these are used to login and to access
    the Administration Tool.</p>

<figure class="img-polaroid">
    <img src="img/osc-engine-installation-step5.jpg" alt="Finished"/>
</figure>