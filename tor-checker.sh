# This file should be ran by crontab
sh /var/www/html/get_exit_addresses.sh
python /var/www/html/set_exit_addresses.py
