<?PHP

    require '../../../src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "SITE_ROOT" => SITE_ROOT,
            "title" => "Creating and Viewing Files",
            "author" => "By Logan Rickert"
        )
    );
    $code = new Code("code_examples/creating-viewing-files.txt");

?>
                <h3>Creating A File</h3>
                <p>Creating a file in Linux is really easy. To do so, you enter 'touch &lt;filename&gt;'. 
                    For this, we are going to create a file called test.</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <p>If you touch a file that already exists, all it does it update when the file was 
                    last edited. We can check this out by first doing 'll' or 'ls -la'.</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <p>Check out the time stamp for test. Mine says 06:20. Now wait a minute and 
                    touch the file again, then do 'll' or 'ls -la'.</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <h3>Echoing Content</h3>
                <p>Blank files are nice, but lets put some content into our file, but first, lets learn 
                    a new command real fast called 'echo'. It's really simple, just do 'echo bla' and it 
                    will echo your bla to the screen.
                <?PHP $code->printNextExample("Bash"); ?>
                <p>We can use the 'echo' command in combination with a '>' sign. In the terminal, a > 
                    sign has a special meaning, it means take all of what the command before outputs 
                    and send it to a file. '>' will replace the contents of the file, '>>' will append 
                    to the bottom of the file.</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <p>Now that we've done that, lets see what's in there. We can do this by using the 'cat' 
                    command.</p>
                <?PHP $code->printNextExample("Bash"); ?>
<?PHP

    File::dumpFile(
        FOOTER_HTML,
        array(
            "previous" => "exploring-file-system",
            "next" => "editing-files"
        )
    );

?>
