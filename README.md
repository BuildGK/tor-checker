# tor-checker
A server-based (LAMP) solution that is able to determine whether or not a client visiting your website is on the Tor browser. This application may be useful if you are wanting to block Tor users from accessing the core of your website or web application. Tor ruins web analytics because the Tor network bounces users across the globe therfore making analytics less accurate because the end-user may not reside where they "appear" to be. Although this solution is not foolproof, it is a good addition to incoorporate into your website or web application. There are other "Tor-checking" applications, but this one allows your own server to stay updated with the list of Tor exit nodes as the list changes! No external third parties needed!

Note that at this time, Apache2 and PHP5 are the supported web server technologies and shell (sh) and Python are the supported local scripts. Others are invited to improve and extend this project.

- To put on your server, run the following on your Debian (or similar) web server:
  - `wget https://github.com/palmercluff/tor-checker/archive/master.zip`
  - `apt-get install unzip`
  - `unzip master.zip`
  - `cd tor-checker-master`
  - `sh unpack.sh`

- And you are good to go!

Paste this PHP code anywhere where you want to check if the user is using Tor.

```
<?php
       $is_tor_client = False;
       $client_ip=$_SERVER['REMOTE_ADDR'];
       echo 'Clients IP address: ' . $client_ip . '<br>';
       
       $myfile = fopen('ip_addresses', 'r') or die('Unable to open file!');
       while(!feof($myfile)) {
         $tor_ip = fgets($myfile);
         $tor_ip = trim($tor_ip);
         if ($client_ip == $tor_ip) {
           $is_tor_client = True;
         }
       }
       fclose($myfile);
       
       if ($is_tor_client) {
         // Do whatever you want here if they are on the Tor network
         echo 'You are on the Tor network';
       }
       else {
         // Do whatever you want here if they are not on the Tor network
         header('Location: index.html');
       }
?>
```
