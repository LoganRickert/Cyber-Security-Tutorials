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
                <p>In order to see what files are in a directory, type 'ls' and press enter. You can 
                    also type 'l' on some distros.</p>
                <?PHP $code->printNextExample("Bash"); ?>

                <h3>Changing Directorys</h3>
                <p>If you want to go into a directory, you can use 'cd'. 'cd' takes an argument, which 
                    is the name of the directory. For example: 'cd Desktop'. If you want to go back 
                    up a directory, you can use '..'. For example: 'cd ..'. If you type 'cd' with no 
                    arguments, it goes back to your home directory, which is marked by a tilday, '~'.</p>
                <?PHP $code->printNextExample("Bash"); ?>

                <h3>Paths</h3>
                <p>In Windows, the root directory is C:\. In Linux, the root directory is just /. If you 
                    type pwd, you can see the directory of where you are at.
                <?PHP $code->printNextExample("Bash"); ?>
                <p>In Windows, your desktop is here: 'C:\Users\Logan\Desktop'. In Linux, your desktop is 
                    here: '/home/logan/Desktop'. A relative path is a path that doesn't start with a / 
                    or a ~ (~ is shorthand for /home/logan) while an absolute path does. A relative path is relative to where you are in your 
                    file system, while an absoulte path always starts at the top and goes down.</p>
                <?PHP $code->printNextExample("Bash"); ?>
<?PHP

    File::dumpFile(
        FOOTER_HTML,
        array(
            "previous" => "vmware-player-installing-linux",
            "next" => "creating-viewing-files"
        )
    );

?>
