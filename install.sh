#!/bin/bash
set -e

sudo cp nginx.conf /etc/nginx/sides-enabled/default
sudo mkdir -p /usr/share/ap-controller/controller/
sudo cp www/* /usr/share/ap-controller/
