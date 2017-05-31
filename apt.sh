#!/bin/bash
set -e

sudo apt-get update
sudo apt-get upgrade
sudo apt-get install nginx php5-fpm php-apc
