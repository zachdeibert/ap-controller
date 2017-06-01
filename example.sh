#!/bin/bash
set -e

cd "$(dirname "$0")"

sudo rm -rf /usr/share/ap-controller/controller/*
sudo cp example/* /usr/share/ap-controller/controller/
