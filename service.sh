#!/bin/bash
set -e

sudo service nginx $1
sudo service php5-fpm $1
