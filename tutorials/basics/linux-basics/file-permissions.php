<?PHP

    require '../../../src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "SITE_ROOT" => SITE_ROOT,
            "title" => "File Permissions and Groups",
            "author" => "By Logan Rickert"
        )
    );
    $code = new Code("code_examples/file-permissions.txt");

?>
                <h3>File Permissions</h3>
                <p>File permissions in Linux are an important thing. To view the permissions of a file, type `ll`</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <p>The important part is the first segment of the listings</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <p>You'll notice that there is a d, then rwx repeated three times. The d stands for directory. r stands
                    for read access, w stands for write access, and x stands for executable access. The first set of three
                    denote how you can access the file. test1 has rw-, which means I can read and write, but not execute the file.
                    The next three rwx is who in your group can access the file. We'll worry about what that means later. The 
                    last three rwx is what everyone with access to the system has access to. In this case, it's r--, which 
                    means that anyone can read the file, but they can't write or execute it.</p>
                <p>Lets say that test1 is actually a script, and I want to be able to execute it. Right now I can't because I don't
                    have permission. To fix this, you have to change the permissions on the file. The file permissions are written 
                    in binary, so:</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <p>In this case, we want to change it to 764. We can do this by using the chmod command.</p>
                <?PHP $code->printNextExample("Bash"); ?>

<?PHP

    File::dumpFile(
        FOOTER_HTML,
        array(
            "previous" => "renaming-moving-deleting",
            "next" => "processes"
        )
    );

?>
