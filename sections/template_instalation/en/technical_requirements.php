<h3>Technical Requirements</h3>
<p>osCommerce Online Merchant can be installed on any PHP enabled web server that can connect to a MySQL database. This includes shared servers, dedicated servers, and local installations running on Linux, Unix, BSD, Mac OS X, and Microsoft Windows operating systems.</p>
<h4>Web Server</h4>
<p>The web server must support PHP either as a module or allow execution of CGI scripts. For performance reasons FastCGI is recommended over CGI.</p>
<h4>PHP</h4>
<p>The following PHP options are recommended to be set in the php.ini configuration file:</p>
<p>When you've completed the preparations steps you can proceed to the osCommerce installation.</p>
<table class="table table-bordered table-hover">
    <tbody>
    <tr>
        <td>register_globals</td>
        <td>Off</td>
    </tr>
    <tr>
        <td>magic_quotes_gpc</td>
        <td>Off</td>
    </tr>
    <tr>
        <td>file_uploads</td>
        <td>On</td>
    </tr>
    <tr>
        <td>session.auto_start</td>
        <td>Off</td>
    </tr>
    <tr>
        <td>session.use_trans_sid</td>
        <td>Off</td>
    </tr>
    </tbody>
</table>
<p>The following PHP extensions are mandatory:</p>
<table class="table table-bordered table-hover">
    <tbody>
    <tr>
        <td>MySQL</td>
        <td>Off</td>
    </tr>
    </tbody>
</table>
<p>The following PHP extensions are recommended:</p>
<table class="table table-hover table-bordered">
    <tbody>
    <tr>
        <td>GD</td>
        <td>Image processing module.</td>
    </tr>
    <tr>
        <td>cURL</td>
        <td>Network communication library.</td>
    </tr>
    <tr>
        <td>OpenSSL</td>
        <td>Encryption library.</td>
    </tr>
    </tbody>
</table>
<h4>MySQL Database Server</h4>
<p>The minimum MySQL version required is v3.23. It is recommended to use the latest MySQL 4 or MySQL 5 version on the database server. The following MySQL storage engines are supported:</p>
<table class="table table-bordered table-hover">
    <tbody>
    <tr>
        <td>MyISAM</td>
        <td>Default storage engine.</td>
    </tr>
    </tbody>
</table>