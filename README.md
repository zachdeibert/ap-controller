# Captive Wi-Fi AP Controller
This application will allow you to create an application in PHP to control the
device this is installed on from a captive AP portal.
For example, it can be used to program a robot using the Raspberry Pi's GPIO
ports and a phone.

## Installation
Install the Raspbian (lite) image onto a Raspberry Pi, then run the following
commands (as the `pi` user, whose password is probably `raspberry`):
```shell
sudo apt-get update
sudo apt-get install git
cd
git clone https://github.com/zachdeibert/ap-controller.git
cd ap-controller
./apt.sh
./config.sh
./install.sh
./example.sh
sudo reboot
```

## Updating
```shell
cd ~/ap-controller
git pull
./install.sh
./service.sh restart
```

If it is acting weird, you might try also running this:
```shell
cd ~/ap-controller
./apt.sh
sudo reboot
```

## Reconfiguring
```shell
./config.sh
./install.sh
./service.sh restart
```

## Controller
Then, put your code for the controller in `/usr/share/ap-controller/controller/`
(there is an example in there right after you run `example.sh`).
