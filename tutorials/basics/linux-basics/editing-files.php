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

                <h3>Vim</h3>
                <p>Vim is another terminal editor. It is a lot more complex and harder to use. 
                    We won't do too much in Vim for now, but just know Vim is super powerful 
                    and has a lot of features. If you are using Ubuntu, chances are it came installed 
                    with Vim tiny, not Vim. To fix the problem, run the following command 'sudo apt-get 
                    install vim'. When you do so, it will ask for your password. Enter it and wait 
                    until it asks for you to continue. Press 'y' and press enter, then wait.</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <p>Once it's done, we can fire up Vim by running the command: 'vi test'.</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <p><?PHP outImg("editing-files-2.jpg", "Vim window") ?></p>
                <p>To edit the file, press the 'i' key. You should see '-- INSERT --' appear in 
                    the bottom. Go down to the third line, over to the end and press enter. Now 
                    type a new reply, such as 'That's great to hear'. Now, press the esc key and 
                    you will exit insert mode. Now press 'shift + ;'. In the bottom left, you 
                    should see a colon (:). Type wq and press enter. w stands for write and q 
                    stands for quit. If you want to exit without saving your changes, you can 
                    type 'q!'. Vim takes a lot of practice to get use to. Just remember the golden 
                    rule: When in doubt: bang on the esc key. We can check to make sure everything 
                    worked by catting the file.</p>
                <?PHP $code->printNextExample("Bash"); ?>

                <h3>Sublime</h3>
                <p>The last editor we'll look at is a GUI editor. GUI means Graphical User Interface 
                    and not terminal based. To install it, we will use the command line of course! 
                    We want to run the following three commands. If you're lazy, you can copy it. 
                    To copy/paste something into the terminal, you must also hold shift. For example, 
                    to paste, do 'control + shift + v'.</p>
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
