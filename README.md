# tor-checker
A server-based (LAMP) solution that is able to determine whether or not a client visiting your website is on the Tor browser. This application may be useful if you are wanting to block Tor users from accessing the core of your website or web application. Tor ruins web analytics because the Tor network bounces users across the globe therfore making analytics less accurate because the end-user may not reside where they "appear" to be. Although this solution is not foolproof, it is a good addition to incoorporate into your website or web application. There are other "Tor-checking" applications, but this one allows your own server to stay updated with the list of Tor exit nodes as the list changes! No external third parties needed!

Note that at this time, Apache2 and PHP5 are the supported web server technologies and shell (sh) and Python are the supported local scripts. Others are invited to improve and extend this project.

- To put on your server, run the following on your Debian (or similar) web server:
  - `wget https://github.com/palmercluff/tor-checker/archive/master.zip`
  - `apt-get install unzip`
  - `unzip master.zip`
  - `cd tor-checker-master`
  - `sh unpack.sh`

- Now go to your `/var/www/html/` directory, and run the following:
  - `sh tor-checker.sh`

- Then in your web browser, navigate to <your-website>/tor_checker.php