![OreoPi Logo](https://i.imgur.com/RL5VTuY.png)
# OreoPi


![Code Climate maintainability](https://img.shields.io/codeclimate/maintainability/PerhapsSomeone/OreoPi.svg)


OreoPi is a project to allow your Pi to be used as a media and weather station. 
It currently is under active development and sports multiple features.
A quick list:
* DB Migration support
* DB seeding
* Playing music through AUX or HDMI
* User authentication
* Automatic music file discovery
* Easy configuration using .env files
* Fully working API

## Requirements
* Any sort of Raspberry Pi with the Raspbian image installed.
* PHP 7.1 + extensions
* Composer
* Node
* npm
* MariaDB / MySQL
* git
* nano

## Setup

The setup is very simple!
You only need to access your MariaDB / MySQL using `sudo mysql` and type `CREATE DATABASE oreopi`.
Once the DB is created, exit MySQL by pressing CTRL + D.
Clone the repo by typing `git clone https://github.com/PerhapsSomeone/OreoPi` and executing it.
Wait for it to finish, then change into the directory using `cd OreoPi`.
Now you have to edit the .env file. Run the following command: `cp .env.example .env && nano .env`.
You will enter a text editor and the .env file will be loaded. You can ignore most of it, there are only four important values.
Change the DB fields according to your settings. If you didn't change them, the username should be root with an empty password. 
Close nano using CTRL + X and Y to confirm.
You're almost done! Run `npm install && composer install && npm run dev && php artisan migrate:fresh && php artisan db:seed` and you're done with the setup.

Congrats! You installed OreoPi.
To run it, simply execute `php artisan serve --port=80 --host=0.0.0.0` and you can access the interface by typing your Raspberry Pi's IP address into your browser.

###### IMPORTANT: Add a visudo rule to allow PHP to kill the omxplayer process. The executable path needed is /usr/bin/killall.
Sample: 
www-data ALL=(ALL) NOPASSWD: /usr/bin/killall
