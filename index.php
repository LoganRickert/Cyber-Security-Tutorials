<?PHP

    require './src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "title" => "Wright State Cyber Security Tutorials",
            "author" => ""
    ));
    $code = new Code(DOC_ROOT . "template-code.txt");

?>
                <h3>Introduction</h3>
                <p>Welcome to the Cyber Security Tutorials. These tutorials were all 
                    written by members of the Wright State Cyber Security club. We hope 
                    you find them useful! If a topic that you wanted to learn about isn't 
                    covered or a topic you think should be covered, try making a tutorial 
                    for it. We would love the help.</p>

                <h3>Tutorials</h3>
                <ul>
                    <li>List Header
                        <ul>
                            <li>List item</li>
                        </ul>
                    </li>
                </ul>

                <h3>How To Write A Tutorial</h3>
                <p>Writing your own tutorial is very easy. Pull down template.php and 
                    template-code.txt as a boiler plate. The &#60;p&#62;</pre> tag means 
                    paragraph and seperates each set by a new line. &#60;h3&#62; means heading.
                    Heading text is larger and has an underline.</p>
                <p>To display a code example, open the template-code.txt and just paste your 
                    code in in order of how you wish to display it. Each example should have 
                    start with EXAMPLE then the code on a new line. Everything else you need 
                    to know, you should be able to figure it. It's really not that hard. If you 
                    still have questions after reading this, feel free to ask someone and they will 
                    gladly help you out.</p>
<?PHP

    File::dumpFile(FOOTER_HTML);

?>