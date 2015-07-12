<?PHP

    require '../../../src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "SITE_ROOT" => SITE_ROOT,
            "title" => "Linux Flavors and History",
            "author" => "By Logan Rickert"
        )
    );

?>
                <h3>History</h3>
                <p>Linux was first released in 1991 by <?PHP Wiki::link("Linus Torvalds") ?>. 
                    It was meant to be an open source version of the, then popular, 
                    <?PHP Wiki::link("Unix") ?> operating system. Linux was created to 
                    be free and open-source software.</p>
                <h3>Flavors</h3>
                <p>A 'flavor' (or distribution) of Linux is where someone took the source code of Linux and 
                    modify it to fit their needs. This can mean a variety of things, but most 
                    times, it's not one person, but a collection of others work put together 
                    into a single operating system. There are many popular distros such as:</p>
                <ul>
                    <li><?PHP outLink("https://www.debian.org/", "Debian") ?></li>
                    <li><?PHP outLink("http://www.ubuntu.com/", "Ubuntu") ?></li>
                    <li><?PHP outLink("https://www.centos.org/", "CentOS") ?></li>
                    <li><?PHP outLink("http://www.linuxmint.com/", "Mint") ?></li>
                    <li><?PHP outLink("https://getfedora.org/", "Fedora") ?></li>
                    <li><?PHP outLink("https://www.opensuse.org/", "openSUSE") ?></li>
                    <li><?PHP outLink("https://www.archlinux.org/", "Arch Linux") ?></li>
                    <li><?PHP outLink("http://puppylinux.org/main/Overview%20and%20Getting%20Started.htm", "Puppy Linux") ?></li>
                </ul>

                <p>Each flavor and variant all have their own purposes and there is a 
                    different distro for just about every purpose.</p>

                <h3>Links</h3>
                <ul>
                    <li><?PHP outLink("https://en.wikipedia.org/wiki/Linux", "Linux Wikipedia") ?>
                    <li><?PHP outLink("http://distrowatch.com/", "DistroWatch") ?></li>
                </ul>

<?PHP

    File::dumpFile(
        FOOTER_HTML,
        array(
            "previous" => "index",
            "next" => "vmware-player-installing-linux"
        )
    );

?>
