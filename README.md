# OpenShelter

##About

OpenShelter is a PHP/MySQL script created by @SeanSlater initially as an easy way for the Hahndorf Interim Animal Shelter to update their website listing of available cats and dogs.

The shelter currently uses Microsoft Frontpage to create their website which is a very manual process. Using a few lines of PHP I hope to automate this process for the shelter.

This software is written in memory of Sue Whelan, co-founder of the Hahndorf Shelter who gave 23 years of hard work dedicated to the shelter and helping the animals. Sue passed away in 2015. 

You can view a demonstration of the script in action at http://dev.hahndorfshelter.com.au

The shelters current website (generated using Frontpage), http://hahndorfshelter.com.au

##Installation

- Create a new database on your webhost (remember to take note of your username, password and database details!)
- Extract all of the files from the OpenShelter archive and upload them to your webhost using FTP
- Rename conf-example.php to conf.php
- Edit conf.php with your database details from the first step
- Secure your /admin directory using your webhosts provided tools
- Optionally, rename your /admin directory for greater security
- Open up your browser and go to /install, then follow the prompts
- Once complete, delete the /install directory
- You're good to go!

##License GNU General Public License, version 3 (GPL-3.0)

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License (http://opensource.org/licenses/GPL-3.0) for more details.
