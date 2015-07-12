<?PHP

    require '../../../src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "SITE_ROOT" => SITE_ROOT,
            "title" => "Exploring The File System",
            "author" => "By Logan Rickert"
        )
    );
    $code = new Code("code_examples/exploring-file-system.txt");

?>
                <h3>Listing Files</h3>
                <p>In order to see what files are in a directory, type 'ls' and press enter.</p>
                <?PHP $code->printNextExample("Python"); ?>

                <h3>Links</h3>
                <ul>
                    <li><?PHP outLink("https://en.wikipedia.org/wiki/Linux", "Linux Wikipedia") ?>
                    <li><?PHP outLink("http://distrowatch.com/", "DistroWatch") ?></li>
                </ul>
<?PHP

    File::dumpFile(
        FOOTER_HTML,
        array(
            "previous" => "vmware-player-installing-linux",
            "next" => "viewing-files"
        )
    );

?>
