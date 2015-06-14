# DevriX WordPress Multisite config files

## WordPress Multisite Installation
Usually our GitHub repository contains the whole WordPress directory, so you need to do a few steps to install the project at you local environment. Simply follow those steps:

1. Clone the project from GitHub repository to your webserver directory, e.g:
```
/var/www/html/ 
```
2. Create a local database and DB user and password, if needed
3. Open your local project URL, e.g.:
```
http://localhost/multisite/
```
or
```
http://127.0.0.1/multisite/
```
Where `multisite` is the name of your project.

Now you need to see this:
```
Error establishing a database connection
```
4. Now it's time to install WordPress
  1. Copy wp-config-local-sample.php to wp-config-local.php
  2. Open wp-config-local.php and add your local Database detais there.
  3. Refresh the page. Not you need to see the WordPress installation screen. Follow the instructions from the screen.
  4. Once you have installed WordPress, login to the backend, go to Settings => Permalinks, select "Post name" and save changes.
  5. Now you have a new WordPress installation with files from the repository.

5. Install WordPress Multisite.
  1. Open wp-config-local.php and remove the comment from `WP_ALLOW_MULTISITE`. Save the file.
  2. Under Tools Dashboard menu you should have a new menu item - Network Setup.
  3. Open the page and follow the instructions.
  4. WordPress will suggest you to edit wp-config.php. Open wp-config-local.php instead and edit the file with suggested details. Refresh the page, login again and if everything went well, you'll have your local development environment.

## Start work on your tasks :)
