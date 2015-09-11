<?PHP

    require '../../../src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "SITE_ROOT" => SITE_ROOT,
            "title" => "Environment Variables",
            "author" => "By Logan Rickert"
        )
    );
    $code = new Code("code_examples/environment-variables.txt");

?>
                <h3>Environment Variables</h3>
                <p>Environment variables are variables you can set that are relative to your shell. They can 
                    help reduce long file paths to very short variable names. You can access a variable by doing
                    $&lt;name&gt;. An important note is that you can't have any spaces. If you need to use spaces, you
                    have to enclose the string in double quotes.</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <p>You can also alias a word to a string of commands</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <p>Every time you close your terminal, you lose the environment variables you set. If you want a set
                    of enviroment variables to be set each time you open a new terminal session, you can edit
                    your .rcbash. This can be found in your home directory. If you have a look at it, you'll see there is
                    actually quite a lot in it, but here is a small snipet of it.</p>
                <?PHP $code->printNextExample("Bash"); ?>

<?PHP

    File::dumpFile(
        FOOTER_HTML,
        array(
            "previous" => "file-permissions",
            "next" => "environment-variables"
        )
    );

?>
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