# tor-checker
A server-based program that is able to determine whether or not a client visiting your website is on the Tor browser.

# To put on your server, run the following on your Debian (or similar) web server:
- `wget https://github.com/palmercluff/tor-checker/archive/master.zip`
- `apt-get install unzip`
- `unzip master.zip`
- `cd master.zip`
- `sh unpack.sh`

# Now go to your `/var/www/html/` directory, and run the following:
- `sh get_exit_addresses.sh`
- `python set_exit_addresses.py`

Then in your web browser, navigate to <your-website>/tor_checker.php