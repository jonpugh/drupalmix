drupalmix
=========

Drupal on Bluemix

Inspired by https://developer.ibm.com/bluemix/2014/02/17/deploy-drupal-application-ibm-bluemix/

See https://github.com/ibmjstart/bluemix-php-frameworks/tree/master/drupal

Usage
-----

1. Get a bluemix account: http://bluemix.net
2. Get `cf` executable (and connect to the API): https://www.ng.bluemix.net/docs/#starters/BuildingWeb.html#building_web
3. Clone this repo: `git clone git@github.com:jonpugh/drupalmix.git`
4. Edit the `./manifest.yml` file to give your instance it's own name and host. *You must change the application name to be unique within bluemix.*
5. Create a mysql service: `cf create-service mysql 100 mysql-db` where "100" is your "plan". *You can find your plan by visiting the bluemix dashboard, click "Add a Service", then choose "mysql".  You will see a list of your plans on that page.*
5. Call `cf push` to push these files into a new app on bluemix.
6. Visit your site's Install.php URL: http://drupalmix.mybluemix.net/install.php
7. Install drupal!

That's basically it.
