# 🌪🌪 WP Simple Spintax

![WP Simple Spintax](https://i.imgur.com/0J1ftOK.png)

A simple wordpress plugin to {spin} your articles!

## How to install it

Just download from the source or clone the repo with the following command:

``` bash
$ git clone git@gitlab.com:gorkamu/wp-simple-spintax.git
``` 

Then you have to upload it via FTP to your hosting and place it under *wp-content/plugins* folder from your Wordpress installation.

## How to use it

![WP Simple Spintax](https://i.imgur.com/KrRTidN.png)

Just write a spintax text on the original field and click on _Go spin_ button. The magic will be done.

It accepts 3d Spintax format too. 
More info -> [http://gorkamu.com/2018/10/como-spinear-un-texto/#Spintax_anidado_o_en_3_dimensiones](http://gorkamu.com/2018/10/como-spinear-un-texto/#Spintax_anidado_o_en_3_dimensiones)


## How to develop and contribute

If you want to develop new features or if you want to contribute fixing bugs you don't need install nothing except docker compose.

This plugin comes with a docker-compose file with all the needed configuration to download a copy of Wordpress and be used it as black-boxed.

The docker-compose file will download an image from PHP (where wordpress and the plugin will be) and another image for the database with MySQL installed.

To use it just launch the following command on the root folder.

``` bash
$ docker-compose up -d --build
```

That command will download the images, the Wordpress CMS and it will lift the containers.

Then you just go to *http://localhost:8080* and *voilá*

To add a new feature or a fixed bug you should use git and generate a new branch from master branch.

When the code is done send me a +Pull Request+ so i can review it and merge your branch.
