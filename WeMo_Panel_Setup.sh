#!/bin/bash

sudo apt-get install apache2 -y

sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt -y

sudo service apache2 restart

echo "How many WeMo devices do you have? "

read devices

echo "I see you have $devices devices."

printf "$devices" >>  devicenumber.txt

for i in $(seq 1 $devices); do

        echo "Input an IP address: "
        
        read address
        
        echo "Light $i control script has been assigned $address."

        printf "<?php namespace wemo\models; require \"Device.php\"; require \"Outlet.php\"; \$device = new Outlet(\""$address"\"); \$device->setIsOn(true); header(\"Location: ../../\"); ?>" >> classes/models/light"$i"on.php

        printf "<?php namespace wemo\models; require \"Device.php\"; require \"Outlet.php\"; \$device = new Outlet(\""$address"\"); \$device->setIsOn(false); header(\"Location: ../../\"); ?>" >> classes/models/light"$i"off.php

done


