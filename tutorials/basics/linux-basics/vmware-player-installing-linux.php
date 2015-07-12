<?PHP

    require '../../../src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "SITE_ROOT" => SITE_ROOT,
            "title" => "VMware Player and Installing Linux",
            "author" => "By Logan Rickert"
        )
    );

?>
                <h3>VMware</h3>
                <p>If you have never installed or used Linux, it's a very good idea to use what is called 
                    a VM, or Virtual Machine. Basically it's you running an operating system on your 
                    operating system. If you have ever played a ROM, it's the same idea.</p>
                <p>For this part of the tutorial, I am going to use a VM called VMware Player. It's 100% free. 
                    You can also use VirtualBox, but a few of the steps may be different. If you don't already 
                    have your favorite Linux disto downloaded, or don't know which to pick, I would suggest Ubuntu Gnome.</p>
                <p><?PHP 
                        outLink(
                            "https://my.vmware.com/web/vmware/free#desktop_end_user_computing/vmware_player/7_0",
                            "Download VMware Player here"
                        )
                    ?></p>
                <p><?PHP 
                        outLink(
                            "https://wiki.ubuntu.com/UbuntuGNOME/GetUbuntuGNOME/Non-LTS",
                            "Linux Ubuntu Gnome"
                        )
                    ?></p>
                <h3>Installing</h3>
                <p>Once you have installed VMware Player, open it and you should see something like this:</p>
                <p><?PHP outImg("vmware-1.jpg", "vmware-player window") ?></p>
                <p>We want to click 'Create a New Virtual Machine'. Click Installer disc image file (iso) > browse 
                    and select the iso file you downloaded, then click next. Enter in a name, user name, and password 
                    (I would suggest using a very secure password, such as "asdf" or "root"). Just keep clicking next > finished.</p>

                <p>Once it's done, it should start up a new window.</p>
                <p><?PHP outImg("vmware-2.jpg", "vmware-player window") ?></p>

                <p>It will take a while, but soon you should see this:</p>
                <p><?PHP outImg("vmware-3.jpg", "vmware-player window") ?></p>

                <p>Click your name and enter your password. Once you're logged in, press control + alt + t and the 'terminal' should appear:</p>
                <p><?PHP outImg("vmware-4.jpg", "vmware-player window") ?></p>

                <p>And there you go! You have installed Linux, logged on, and opened the terminal. Time to do some 
                    super sweet stuff.</p>

                <h3>Links</h3>
                <ul>
                    <li><?PHP outLink("https://www.virtualbox.org/wiki/Downloads", "VirtualBox") ?>
                </ul>

<?PHP

    File::dumpFile(
        FOOTER_HTML,
        array(
            "previous" => "linux-flavors-and-history",
            "next" => "exploring-file-system"
        )
    );

?>