#!/bin/bash
set -e

sudo service nginx $1
sudo service php5-fpm $1
sudo service dhcpcd $1
sudo service hostapd $1
sudo service isc-dhcp-server $1
