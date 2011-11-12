# RFIT El project

This rep is rather empty right now. But don't worry. We'll get there. But beer first. Cheers.

Requirements:  
- PHP5x  
- MySQL or equivalent  
- Apache/webserver w/ htaccess and mod_rewrite support  
- a kick-ass webbrowser! (you know which)  
- phpMyAdmin or equivalent can be useful

Built on [CakePHP2](http://cakephp.org)
Hosted by [RFIT](http://rfit.dk)

## Quick start

1. git clone git@github.com:rfit/el.git
2. mysqladmin -u root -p create roskilde-el
3. cp app/config/database.php.default app/config/database.php
4. EDIT AND UPDATE database.php
5. cake/console/cake schema create -s NUMBER (e.g. 4)

## Get started from scratch (detailed)

1. make a local dir 'roskilde-el' for the project (apache/webserver needs access to here)
2. git clone the project to your local project dir ('git clone git@github.com:rfit/el.git')
3. create an empty MySQL DB called 'roskilde-el' (no tables, just the DB)
4. copy app/config/database.php.default to app/config/database.php
5. edit database.php with your own local DB info
6. from your project dir, run 'cake/console/cake schema create -s NUMBER' (replace with number of the newest schema_NUMBER.php file, e.g. 4), select y & y when asked
7. now you have a DB with all the tables needed including a little data
8. kick up your browser and you're baking baby!

mysqladmin path in MAMP (OSX):  
/Applications/MAMP/Library/bin/mysqladmin

add this to database for MAMP (OSX) to work:  
'port' => '/Applications/MAMP/tmp/mysql/mysql.sock',

default login:  
user: admin  
pass: admin