<?PHP

    require '../../../src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "SITE_ROOT" => SITE_ROOT,
            "title" => "Processes",
            "author" => "By Logan Rickert"
        )
    );
    $code = new Code("code_examples/processes.txt");

?>
                <h3>Processes</h3>
                <p>You'll notice very quickly that in Linux, there is no task manager. Instead, Linux uses
                    what is called 'top'. You can take a look by running the command, top. To quit out, press 'q'.</p>
                <?PHP $code->printNextExample("Bash"); ?>
                <p>You can use the up and down arrow keys to scroll through the list of processes that are currently running.
                    The PID number is going to be very important. PID is the process ID number and it's a unique number to each
                    process currently running.</p>
                <p>To stop a process that is running, find the PID number and exit top. Then run the command, 'kill &lt;PID&gt;'.
                <?PHP $code->printNextExample("Bash"); ?>

<?PHP

    File::dumpFile(
        FOOTER_HTML,
        array(
            "previous" => "file-permissions",
            "next" => "environment-variables"
        )
    );

?>
