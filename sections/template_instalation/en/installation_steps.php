<h3>Pre-Installation Steps</h3>
<p>osCommerce Online Merchant is a web based solution that needs its relevant files to exist on the web server. The
    files can be copied to the web server by extracting the download package on your computer and uploading its contents
    to the web server via FTP, or by copying the download package to the web server directly and extracting its contents
    there.</p>
<h4>Copying the Files to the Web Server</h4>
<p>The contents of the download package need to be copied to the public HTML directory the web server is serving
    from.</p>
<ul class="marked-list">
    <li> /home/shinyredapples/public_html/</li>
    <li> /srv/www/htdocs/</li>
    <li> /usr/local/htdocs/</li>
    <li> /var/www/vhosts/yourwebsite.com/httpdocs/</li>
</ul>
<p>The contents of the download package once extracted is:</p>
<ul class="marked-list">
    <li> catalog (directory)</li>
    <li> CHANGELOG</li>
    <li> community_docs.pdf</li>
    <li> documentation.pdf</li>
    <li> extras (directory)</li>
    <li> LICENSE</li>
    <li> STANDARD</li>
    <li> upgrade.html</li>
</ul>
<p><strong>Using FTP to Copy the Download Package Contents to the Web Server</strong></p>
<p>The download package of osCommerce Online Merchant should be saved and extracted on your computer to reveal its
    contents. The catalog directory must be copied to the public HTML directory on the web server.</p>
<p>This can be achieved on most FTP clients by dragging the catalog directory from your local file browser panel to the
    remote panel listing the files on the web server.</p>
<p>Feel free to check out the following tutorial on how to upload files to a server.</p>
<p class="alert alert-warning">All PHP files must be uploaded in ASCII mode (not in Binary mode).</p>
<h4>File Permissions</h4>
<p>The following files need to be writable by the web server.</p>
<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Files</th>
        <th>Web Server Writable</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>catalog/includes/configure.php</td>
        <td>
            <i class="material-design-check52"></i>
        </td>
    </tr>
    <tr>
        <td>catalog/admin/includes/configure.php</td>
        <td>
            <i class="material-design-check52"></i>
        </td>
    </tr>
    </tbody>
</table>
<p>Feel free to check out <a href="/help/uploading-files-and-changing-permissions.html" target="_blank">osCommerce.
        Uploading files and changing permissions</a> tutorial.</p>
<p class="alert alert-info">The catalog/includes/configure.php and catalog/admin/includes/configure.php files must have
    their web server writable permission removed after the installation procedure has completed successfully. This is
    described in the Post-Installation Steps chapter.</p>
<p>Please consult with your hosting provider for the correct permission flag to allow the web server to write to those
    files. This is commonly defined with a permission flag of 755.</p>
<p class="alert alert-danger">In some cases a world write permission flag of 777 can be used but may lead to an insecure
    installation of osCommerce Online Merchant.</p>
<p>Changing the file permissions can be performed by most FTP clients or directly on the web server.</p>
<p><strong>Using FTP/cPanel file manager to Change File Permissions</strong></p>
<p>Most FTP clients are capable of changing file permissions on the web server. This is commonly performed by
    right-clicking on the file and selecting "Properties" or "Attributes" on the context menu.</p>
<p>The file permissions can be changed by allowing all users to read, write, and execute the file, or by manually
    entering the world readable and world writable flag of 777.</p>
<p>Feel free to check out the following tutorial on <a
        href="/help/how-to-manage-filesfolders-permissions-with-total-commander-filezilla-and-cpanel-webhost-manager-whm.html"
        target="_blank">how to manage file/folders permissions using FTP manager or cPanel filemanager.</a></p>
<h4>Database</h4>
<p>A MySQL database on the web server or database server is required for the installation procedure to successfully
    import the database table structure and required data settings.</p>
<p>Feel free to check out the following tutorials on <a href="/help/how-create-database.html" target="_blank">creating a
        database using cPanel</a> and <a href="/help/how-to-create-mysql-database-with-godaddy.html" target="_blank">creating
        a database with GoDaddy.</a></p>
<h4>Web Server and Database Server Details</h4>
<p>The following web server and database server details are required during the installation procedure. Please consult
    your hosting provider if these details are not known.</p>
<p><strong>Web Server Details</strong></p>
<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Setting</th>
        <th>Description</th>
        <th>Possible Value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Server Address</td>
        <td>The web address to the online store.</td>
        <td>http://www.yourwebsite.com/catalog/</td>
    </tr>
    <tr>
        <td>Root Directory</td>
        <td>The directory where the online store is installed on the web server.</td>
        <td>/home/yourwebsite/public_html/catalog/</td>
    </tr>
    </tbody>
</table>
<p><strong>Database Server Details</strong></p>
<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Setting</th>
        <th>Description</th>
        <th>Possible Value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Server Address</td>
        <td>The address of the database server in the form of a hostname or IP address.</td>
        <td>localhost</td>
    </tr>
    <tr>
        <td>Username</td>
        <td>The username used to connect to the database server.</td>
        <td>oscommerce_user</td>
    </tr>
    <tr>
        <td>Password</td>
        <td>The password that is used together with the username to connect to the database server.</td>
        <td>securepassword</td>
    </tr>
    <tr>
        <td>Database Name</td>
        <td>The name of the database to hold the data in.</td>
        <td>oscommerce</td>
    </tr>
    </tbody>
</table>
<p class="alert alert-warning">Please review the Pre-Installation Steps chapter before continuing with the installation
    procedure.</p>