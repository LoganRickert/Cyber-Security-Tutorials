<?PHP

    require '../../../src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "SITE_ROOT" => SITE_ROOT,
            "title" => "Editing Files",
            "author" => "By Logan Rickert"
        )
    );
    $code = new Code("code_examples/editing-files.txt");

?>
                <h3>Introduction</h3>
                <p>When editing a file, you're going to need a file editor. 
                    I'm going to briefly go through three editors here and you 
                    can pick which ever one you like best. Nano is what most people 
                    use as it's simple. A lot of people like Vim because it has 
                    a lot of power, but takes 5,000 years to learn how 
                    to properly use.</p>
                <h3>Nano</h3>
                <p>To use Nano, all you need to do is run the command 'nano filename'.</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <p><?PHP outImg("editing-files-1.jpg", "Nano window") ?></p>
                <p>Use the arrow keys to move up, down, left and right. You can also 
                    type just like normal. Move to the third line and type 'I'm doing great' 
                    or something to that effect. You can see shortcut keys at the bottom. 
                    Because we are done editing and want to save and quit, what we will do 
                    is press 'control + x' then press 'y' for yes then press 'enter'. 
                    We can cat the file to make sure our changes were kept.</p>
                <?PHP $code->printNextExample("Bash"); ?>
<?PHP

    File::dumpFile(
        FOOTER_HTML,
        array(
            "previous" => "creating-viewing-files",
            "next" => "renaming-moving-deleting"
        )
    );

?>
