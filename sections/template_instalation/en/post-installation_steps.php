<h3>Post-Installation Steps</h3>
<p>Upon successful installation of osCommerce Online Merchant, the following steps need to be performed to secure the
    installation of the online store.</p>
<h4>Remove Installation Files</h4>
<p>The
    <i>catalog/install</i>
    directory must be removed from the web server otherwise a user could use the installation procedure and reconfigure
    the online store to use another database server.
</p>
<h4>Reset File and Directory Permissions</h4>
<h5>Configuration Files</h5>
<p>The file permissions on catalog/includes/configure.php and catalog/admin/includes/configure.php must be set to deny
    write access by the web server service. This is commonly performed by setting the permission flag to a read only
    value of 644 or 444 depending on your server.</p>
<h5>Writable Directories</h5>
<p>The following directories must be set to allow the web server service to write to for the Administration Tool to
    function properly. This is commonly performed by setting the permission flags to a world-writable value of 777.</p>
<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Directories</th>
        <th>Web Server Writable</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>catalog/images</td>
        <td>
            <i class="material-design-check52"></i>
        </td>
    </tr>
    <tr>
        <td>catalog/cache (create this folder)</td>
        <td>
            <i class="material-design-check52"></i>
        </td>
    </tr>
    <tr>
        <td>catalog/admin/backups</td>
        <td>
            <i class="material-design-check52"></i>
        </td>
    </tr>
    <tr>
        <td>catalog/admin/images/graphs</td>
        <td>
            <i class="material-design-check52"></i>
        </td>
    </tr>
    </tbody>
</table>
<h4>Extra Protection for the Administration Tool</h4>
<p>The Administration Tool is secured by its own login routine but is still publicly accessible. It is recommended to
    further protect the Administration Tool by setting a htaccess password on the catalog/admin directory.</p>
<p class="alert alert-danger">If no extra protection is set for the Administration Tool, it is recommended to move the
    catalog/admin/backups directory outside the public html directory otherwise public access to the backup files would
    be possible. The location of the backup directory must be correctly defined in catalog/includes/configure.php.</p>
<p>Feel free to check out the following tutorial on how to <a href="/help/secure-your-oscommerce-store.html"
                                                              target="_blank">secure your osCommerce store</a>.
</p>