<?PHP

    require './src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "title" => "Python Sockets #1",
            "author" => "By Logan Rickert"
    ));
    $code = new Code(DOC_ROOT . "template-code.txt");

?>
                <h3>What Is A Socket?</h3>
                <p>A socket is a way to talk to other computers over the internet. It is a two way connection you can send and recieve information on. To create socket, you will need to know two things: The IP/hostname and the port. In this tutorial, we'll be using a special IP address: 127.0.0.1. This IP is special because instead of sending your packets out over the internet, your computer automatically reroutes them back into your computer.</p>
                <p>We'll start off by making a server in Python. It will wait for someone to connect. Once it does, it takes in any data the client sends. It then sends back the data it received. It then closes the connection.</p>
                <h3>Server</h3>
                <?PHP $code->printNextExample("python"); ?>
                <p>Now lets make a client to talk to our new server.</p>
                <h3>Client</h3>
                <?PHP $code->printNextExample("python"); ?>
                <p>Lets test out our new client and server! Start by first running the server script, then run the client script while the server script is still running. You should see this:</p>
                <h3>Output</h3>
                <?PHP $code->printNextExample("python"); ?>
<?PHP

    File::dumpFile(FOOTER_HTML);

?>