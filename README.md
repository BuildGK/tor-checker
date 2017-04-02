# tor-checker
A server-based program that is able to determine whether or not a client visiting your website is on the Tor browser. This application may be useful if you are wanting to block Tor users from accessing the core of your website or web application. Tor ruins web analytics because the Tor network bounces users across the globe therfore making analytics less acurate. Although this solution is not foolproof, it is a good addition to incoorporate into your website or web application.

- To put on your server, run the following on your Debian (or similar) web server:
  - `wget https://github.com/palmercluff/tor-checker/archive/master.zip`
  - `apt-get install unzip`
  - `unzip master.zip`
  - `cd tor-checker-master`
  - `sh unpack.sh`

- Now go to your `/var/www/html/` directory, and run the following:
  - `sh tor-checker.sh`

- Then in your web browser, navigate to <your-website>/tor_checker.php