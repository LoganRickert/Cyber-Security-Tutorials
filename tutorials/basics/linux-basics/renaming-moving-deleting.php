<?PHP

    require '../../../src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "SITE_ROOT" => SITE_ROOT,
            "title" => "Renaming, Moving, and Deleting Files",
            "author" => "By Logan Rickert"
        )
    );
    $code = new Code("code_examples/renaming-moving-deleting.txt");

?>
                <h3>Renaming and Moving Files</h3>
                <p>Renaming and moving files use the same command and it's pretty easy. 
                    we use the 'mv' command, which stands for move.</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <h3>Deleting Files</h3>
                <p>To delete a file, you use the 'rm' command.</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <p>To delete all files in a directory, we use a wildcard. A wildcard 
                    means anything inbetween it can be anything. For example:</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <?PHP $code->printNextExample("Bash"); ?>
                <p>If you want to delete the entire folder plus all of the contents, you have 
                    to include the '-r' flag.</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <p>Only using the '-r' flag will mean that you will be prompted if you wish to 
                    delete very file. To force bash to just delete al files, you can append 
                    the 'f' flag, so now it's 'rm -rf testFolder'.</p>
<?PHP

    File::dumpFile(
        FOOTER_HTML,
        array(
            "previous" => "editing-files",
            "next" => "file-permissions"
        )
    );

?>
