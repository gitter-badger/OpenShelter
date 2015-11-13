# OpenShelter

[![Join the chat at https://gitter.im/seanslater/OpenShelter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/seanslater/OpenShelter?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

##About

OpenShelter is a simple PHP/MySQL website software package designed to suit small to medium sized animal shelters, it gives them the ability to quickly update and manage their own websites in realtime without the complexity of other solutions.

The software is written in memory of Sue Whelan, co-founder of the Hahndorf Interim Animal Shelter Inc. Sue spent the last 23 years of her life dedicated to the shelter, helping re-home and board thousands of animals. Sue passed away in 2015. 

You can see OpenShelter in action generating the Hahndorf Interim Animal Shelter Inc. website, http://hahndorfshelter.com.au

##Installation

- Create a new database on your webhost (remember to take note of your username, password and database details!)
- Extract all of the files from the OpenShelter archive and upload them to your webhost using FTP
- Rename conf-example.php to conf.php
- Edit conf.php with your database details from the first step, personalise your shelter's name and tagline
- Secure your /admin directory using your webhosts provided tools
- Optionally, rename your /admin directory for greater security
- Open up your browser and go to /install, then follow the prompts
- Once complete, delete the /install directory
- You're good to go!

##License GNU General Public License, version 3 (GPL-3.0)

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License (http://opensource.org/licenses/GPL-3.0) for more details.