# Tutorials

This repo is the Wright State Cyber Security Tutorials repo.

## Setup

In order to view the tutorials on your local machine, you need to host the 
files on a local webserver. This is because the files run off PHP.

### Installing a web server

If you don't have a webs server installed, run the following commands to install
apache2 and PHP.

```
sudo apt-get update
sudo apt-get install apache2
sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt
```

### Downloading the files

To download the files, cd to your web server directory (/var/www/html) and run:

```
sudo git clone https://github.com/LoganRickert/Cyber-Security-Tutorials tutorials
```

This will create a folder called tutorials and download the files to there.

To access the tutorials, go to your favorite web browser (Chrome) and visit the
following URL:

```
localhost/tutorials
```

If you did not put the files in /var/www/html, please change the first two lines
on /src/starter.php to reflect the correct information.

## Creating A Tutorial

I am going to do this section using 'linux-basics' tutorial as an example.

To create a new tutorial, go to the directory that best fits it, in this case, ```/basics```.

Create a new folder with the name of your tutorial, in this case ```linux-basics```.

Create a directory called ```code_examples``` and ```img```.

The first file you will want to created is the ```index.php```. This will be the default page
people will see when they visit your tutorial. Every page will have the same header and footer:

```
<?PHP
    require '../../../src/starter.php';                <-- This loads a bunch of default PHP you need.
    File::dumpFile(
        HEADER_HTML,
        array(
            "SITE_ROOT" => SITE_ROOT,               
            "title" => "Linux Basics Introduction",    <-- The title of your page
            "author" => "By Logan Rickert"             <-- The author of the page
    	)
    );

    // $code = new Code("code_examples/exploring-file-system.txt"); <-- If you have code to display, use this line
?>


                // Your code goes here!!!!!!!!!!!!!!   <-- This is where you write your tutorial


<?PHP
    File::dumpFile(
    	FOOTER_HTML,
    	array(
    		"previous" => "",                          <-- The location of the page before, 'blah.html'
    		"next" => "linux-flavors-and-history"      <-- The location of the page after, 'linux-flavors-and-history.html'
    	)
    );
?>
```

Here is the index for the linux-basics tutorial:

```
<?PHP
    require '../../../src/starter.php';
    File::dumpFile(
        HEADER_HTML,
        array(
            "SITE_ROOT" => SITE_ROOT,
            "title" => "Linux Basics Introduction",
            "author" => "By Logan Rickert"
    	)
    );
?>
                <h3>Introduction</h3>
                <p>This tutorial series is here to give someone a basic knowledge of how 
                	to use Linux.</p>
                <h3>Table of Contents</h3>
                <ol>
                	<li><a href="linux-flavors-and-history.php">Linux Flavors and History</a></li>
                	<li><a href="vmware-player-installing-linux.php">VMware Player / Installing Linux</a></li>
                	<li><a href="exploring-file-system.php">Exploring the File System</a></li>
                	<li><a href="creating-viewing-files.php">Creating and Viewing Files</a></li>
                	<li><a href="editing-files.php">Editing Files</a></li>
                	<li><a href="renaming-moving-deleting.php">Renaming, Moving, and Deleting Files</a></li>
                	<li><a href="file-permissions.php">File Permissions and sudo</a></li>
                	<li><a href="processes.php">Processes</a></li>
                	<li><a href="enviroment-variables.php">Environment Variables</a></li>
                	<li><a href="find-grep-wc-piping.php">Find, Grep, WC, and Piping</a></li>
                	<li><a href="installing-software.php">Installing Software</a></li>
                	<li><a href="ssh.php">SSH</a></li>
                	<li><a href="sftp.php">sftp</a></li>
                </ol>
<?PHP
    File::dumpFile(
    	FOOTER_HTML,
    	array(
    		"previous" => "",
    		"next" => "linux-flavors-and-history"
    	)
    );
?>
```

Displaying code is easy, but a little complex looking at first. Here is an example code_example file:

```
EXAMPLE
logan@ubuntu:~$ nano test
EXAMPLE
logan@ubuntu:~$ cat test
Hi, how are you?
Good, you?
I'm doing great.
```

The above has two examples. EXAMPLE marks the start of an example. In the actual code, just call
the following line where you want the first example to be called.

```
<?PHP $code->printNextExample("Bash"); ?>
```

This would write 'logan@ubuntu:~$ nano test'.

The string passed in is what you want the output to be colored as. The output colorer supports most coding
languages.

Here is an example in a tutorial:

```
<h3>Nano</h3>
<p>To use Nano, all you need to do is run the command 'nano filename'.</p>
<?PHP $code->printNextExample("Bash"); ?>
<p>Use the arrow keys to move up, down, left and right. You can also 
```

You can also output an image the same way. First, put the image in the img directory, then call the following line:

```
<p><?PHP outImg("editing-files-1.jpg", "Nano window") ?></p>
```

The first string is the actual name of the image, and the second string is the title of the image.
