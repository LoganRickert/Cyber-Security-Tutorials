<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="css/default.min.css">
        <script src="js/highlight.min.js"></script>
         <script>hljs.initHighlightingOnLoad();</script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/styles.css">
        <title></title>
        <meta name="description" content="">
    </head>
    <body>
        <header>
            <h1>Python Sockets #1</h1>
            <h2>By Logan Rickert</h2>
        </header>
        
        <div class="wrapper">
            <section>
                <h3>What Is A Socket?</h3>
                <p>A socket is a way to talk to other computers over the internet. It is a two way connection you can send and recieve information on. To create socket, you will need to know two things: The IP/hostname and the port. In this tutorial, we'll be using a special IP address: 127.0.0.1. This IP is special because instead of sending your packets out over the internet, your computer automatically reroutes them back into your computer.</p>
                <p>We'll start off by making a server in Python. It will wait for someone to connect. Once it does, it takes in any data the client sends. It then sends back the data it received. It then closes the connection.</p>
                <h3>Server</h3>
<pre><code class="python"># Echo server program
import socket

HOST = '127.0.0.1'        # Symbolic name meaning all available interfaces
PORT = 50007              # Arbitrary non-privileged port

# Setting up the socket
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.bind((HOST, PORT))
s.listen(1)

# Waiting for a client to connect
conn, addr = s.accept()
print 'Connected by', addr

while 1:
    # Wait for the client to send data. Take 1024 bytes of the data
    data = conn.recv(1024)

    print 'received', data

    # If the data is empty, break;
    if not data: break

    # Send back the 1024 bytes to the client.
    conn.sendall(data)

conn.close()</code></pre>
                <p>Now lets make a client to talk to our new server.</p>
                <h3>Client</h3>
<pre><code class="python"># Echo client program
import socket

HOST = '127.0.0.1'    # The remote host
PORT = 50007              # The same port as used by the server

# Setting up the socket
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

# Connect to the socket
s.connect((HOST, PORT))
s.sendall('Hello, world')

# Wait until the server sends back data. Take the first 1024 bytes.
data = s.recv(1024)
s.close()

print 'Received', repr(data)</code></pre>
                <p>Lets test out our new client and server! Start by first running the server script, then run the client script while the server script is still running. You should see this:</p>
                <h3>Output</h3>
<pre><code class="python">(Server:)
Connected by ('127.0.0.1', 51443)
received Hello, world
received 

(Client:)
Received 'Hello, world'</code></pre>
            </section>
        </div>
        
        <footer>
            <p>&copy; 2015 Logan Rickert</p>
        </footer>

        <script>
            (function() {
                var pre = document.getElementsByTagName('pre'),
                    pl = pre.length;
                for (var i = 0; i < pl; i++) {
                    pre[i].innerHTML = '<span class="line-number"></span>' + pre[i].innerHTML + '<span class="cl"></span>';
                    var num = pre[i].innerHTML.split(/\n/).length;
                    for (var j = 0; j < num; j++) {
                        var line_num = pre[i].getElementsByTagName('span')[0];
                        line_num.innerHTML += '<span>' + (j + 1) + '</span>';
                    }
                }
            })();
        </script>
        
    </body>
</html>