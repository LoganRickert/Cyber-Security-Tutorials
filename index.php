<?PHP

    require './src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "SITE_ROOT" => SITE_ROOT,
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

                <h3>Entry Level</h3>
                <ul>
                    <li>Basics
                        <ul>
                            <li>Linux Basics</li>
                            <li>Git</li>
                            <li>HTML && CSS</li>
                            <li>Javascript</li>
                        </ul>
                    </li>
                    <li>TL;DR 1
                        <ul>
                            <li>1180 - Programming Basics</li>
                        </ul>
                    </li>
                    <li>Scripting
                        <ul>
                            <li>Python Basics</li>
                            <li>Bash Basics</li>
                            <li>PHP Basics</li>
                        </ul>
                    </li>
                    <li>TL;DR 2
                        <ul>
                            <li>1181 - Advanced Programming Concepts</li>
                        </ul>
                    </li>
                    <li>Sockets
                        <ul>
                            <li>Basic Echo Server</li>
                            <li>Chat Server</li>
                            <li>Remote Terminal</li>
                            <li>Proxy Server</li>
                            <li>Bot Net</li>
                            <li>Web Server</li>
                            <li>Twitch IRC Bot</li>
                        </ul>
                    </li>
                </ul>
                <h3>Picking Up The Pace</h3>
                <ul>
                    <li>TL;DR 3
                        <ul>
                            <li>3310 - Assembly and The Stack</li>
                        </ul>
                    </li>
                    <li>The Stack
                        <ul>
                            <li>Stack Frames</li>
                            <li>Buffer Overflows</li>
                            <li>Protecting Against Buffer Overflows</li>
                            <li>The Heartbleed Bug</li>
                        </ul>
                    </li>
                    <li>Reverse Engineering C#
                        <ul>
                            <li>Decompiling</li>
                            <li>CIL Assembly and DLL Injection</li>
                            <li>Reflection in C#</li>
                        </ul>
                    <li>Reverse Engineering C++
                        <ul>
                            <li>Debugging and Decompiling</li>
                        </ul>
                    </li>
                    <li>Preventing Reverse Engineering
                        <ul>
                            <li>Obfuscation</li>
                        </ul>
                    </li>
                </ul>
                
                <h3>Misc.</h3>
                <h4>Ethics</h4>
                <ul>
                    <li>yo-dont-do-this-in-realz-life-cuz-we-would-like-the-club-to-stay-open</li>
                </ul>

                <h4>Metasploitable</h4>
                <ul>
                    <li>Yep.</li>
                </ul>

                <h4>Networking</h4>
                <ul>
                    <li>Sockets in C</li>
                    <li>Port Scanning</li>
                    <li>Traffic Sniffing</li>
                    <li>Packet Injection</li>
                    <li>Packet Crafting</li>
                    <li>DDOS</li>
                    <li>APR Poisoning</li>
                    <li>TCP-Hijacking</li>
                </ul>

                <h4>Web Security</h4>
                <ul>
                    <li>XSS</li>
                    <li>Sql Injection</li>
                    <li>SQLMap</li>
                </ul>

                <h4>Malware</h4>
                <ul>
                    <li>Trojans</li>
                </ul>

                <h4>A History of Hacking and Cyber Criminaling</h4>
                <ul>
                    <li>Yep.</li>
                </ul>

                <h4>Web Technology</h4>
                <ul>
                    <li>Apache</li>
                    <li>Flask</li>
                    <li>PHP</li>
                    <li>SQL</li>
                    <li>DNS</li>
                </ul>
                
                <h4>Hardware</h4>
                <ul>
                    <li>APU</li>
                    <li>CPU</li>
                    <li>Hard drives</li>
                    <li>Motherboards</li>
                    <li>RAM</li>
                    <li>Routers / Switches</li>
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