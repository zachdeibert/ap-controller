#!/bin/bash
set -e

echo -n "SSID: "
read ssid
psk=
while [ $(echo -n "$psk" | wc -c) -lt 8 ] || [ $(echo -n "$psk" | wc -c) -gt 63 ]; do
    echo -n "PSK:  "
    read psk
done

rm -f .config.sh
cat <<EOF > .config.sh
ssid=$ssid
psk=$psk
EOF
