#!/bin/bash
set -e

echo -n "SSID: "
read ssid
echo -n "PSK:  "
read psk

rm -f .config.sh
cat <<EOF > .config.sh
ssid=$ssid
psk=$psk
EOF
