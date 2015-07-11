<?PHP

    require '../../../src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "SITE_ROOT" => SITE_ROOT,
            "title" => "Linux Basics Introduction",
            "author" => "By Logan Rickert"
    ));

?>
                <h3>Introduction</h3>
                <p>This tutorial series is here to give someone a basic knowledge of how 
                	to use Linux.</p>
                <h3>Table of Contents</h3>
                <ol>
                	<li>Linux Flavors and Some History</li>
                	<li>VMware Player / Installing Linux</li>
                	<li>Exploring the File System</li>
                	<li>Quickly Viewing Files</li>
                	<li>Editing Files</li>
                	<li>Renaming, Moving, and Deleting Files</li>
                	<li>File Permissions and sudo</li>
                	<li>Processes</li>
                	<li>Environment Variables</li>
                	<li>Find, Grep, WC, and Piping</li>
                	<li>Installing Software</li>
                	<li>SSH</li>
                	<li>sftp</li>
                </ol>
<?PHP

    File::dumpFile(FOOTER_HTML);

?>