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
                	<li>List a</li>
                </ol>
<?PHP

    File::dumpFile(FOOTER_HTML);

?>