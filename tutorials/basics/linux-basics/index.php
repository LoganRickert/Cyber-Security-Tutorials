<?PHP

    require '../../../src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "SITE_ROOT" => SITE_ROOT,
            "title" => "Linux Basics Introduction",
            "author" => "By Logan Rickert"
    	)
    );

?>
                <h3>Introduction</h3>
                <p>This tutorial series is here to give someone a basic knowledge of how 
                	to use Linux.</p>
                <h3>Table of Contents</h3>
                <ol>
                	<li><a href="linux-flavors-and-history.php">Linux Flavors and History</a></li>
                	<li><a href="vmware-player-installing-linux.php">VMware Player / Installing Linux</a></li>
                	<li><a href="exploring-file-system.php">Exploring the File System</a></li>
                	<li><a href="viewing-files.php">Quickly Viewing Files</a></li>
                	<li><a href="editing-files.php">Editing Files</a></li>
                	<li><a href="renaming-moving-deleting.php">Renaming, Moving, and Deleting Files</a></li>
                	<li><a href="file-permissions.php">File Permissions and sudo</a></li>
                	<li><a href="processes.php">Processes</a></li>
                	<li><a href="enviroment-variables.php">Environment Variables</a></li>
                	<li><a href="find-grep-wc-piping.php">Find, Grep, WC, and Piping</a></li>
                	<li><a href="installing-software.php">Installing Software</a></li>
                	<li><a href="ssh.php">SSH</a></li>
                	<li><a href="sftp.php">sftp</a></li>
                </ol>
<?PHP

    File::dumpFile(
    	FOOTER_HTML,
    	array(
    		"previous" => "",
    		"next" => "linux-flavors-and-history"
    	)
    );

?>