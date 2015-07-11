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
                <p>Linux was first released in 1991 by <?PHP Wiki::link("Linus Torvalds") ?>. 
                    It was meant to be an open source version of the, then popular, 
                    <?PHP Wiki::link("Unix") ?> operating system.</p>
<?PHP

    File::dumpFile(
        FOOTER_HTML,
        array(
            "previous" => "index",
            "next" => "vmware-player-installing-linux"
        )
    );

?>