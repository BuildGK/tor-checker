cp get_exit_addresses.sh /var/www/html/
cp set_exit_addresses.py /var/www/html/
cp tor_checker.php /var/www/html/
cp tor-checker.sh /var/www/html/
sh /var/www/html/tor-checker.sh

# The 2>/dev/null is important so that you don't get the no crontab for username message that some *nixes produce if there are currently no crontab entries.
(crontab -l 2>/dev/null; echo "*/5 * * * * sh /var/www/html/"tor-checker.sh) | crontab -
