#!/bin/bash
set -e

. "$(dirname "$0")/.config.sh"

sudo cp nginx.conf /etc/nginx/sites-enabled/default
sudo mkdir -p /usr/share/ap-controller/controller/
sudo cp www/* /usr/share/ap-controller/
sudo cp dhcpd.conf /etc/dhcp/dhcpd.conf
sudo cp dhcpd.sh /etc/default/isc-dhcp-server
sudo cp dhcpcd.conf /etc/dhcpcd.conf
sed -e "s|{{ *ssid *}}|$ssid|g" -e "s|{{ *psk *}}|$psk|g" hostapd.conf | sudo tee /etc/hostapd/hostapd.conf > /dev/null
sudo cp hostapd.sh /etc/default/hostapd
sudo sed -e "s|^DAEMON_CONF=$|DAEMON_CONF=/etc/hostapd/hostapd.conf|g" -i /etc/init.d/hostapd
