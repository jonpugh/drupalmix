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

Moving to Git
-------------

Bluemix works on `cf push`.  It pushes whatever code is in the directory up to your app.

If you want to use IBM's git host for your application you can do the following:

1. Visit the bluemix dashboard: https://ace.ng.bluemix.net/
2. Visit your apps page.
3. Click "Add Git".
4. In the window that pops up called "Create Git Repository", click "continue". Wait for it to complete, then click "close".
5. On your app's page, you will now see "GIT URL".  Click the link to visit your Repo.  
6. hub.jazz.net is similar to github.  Click "Git URL" to see the URL for your Repo.  
7. Clone your repo: `git clone https://hub.jazz.net/git/jonpugh/dkan`.
8. Copy your drupal code to this repo, add and commit and push it.
9. Click "BUILD & DEPLOY" from your git repo's page to see that your push is pending deployment.

After testing, it seems that pushing new code breaks your drupal site with the following error:

> PDOException: SQLSTATE[HY000] [1129] Host '23.246.207.44' is blocked because of many connection errors; unblock with 'mysqladmin flush-hosts' in lock_may_be_available() (line 167 of /home/vcap/app/htdocs/includes/lock.inc).

You can fix it with a call to cf:

  `cf restage drupalmix` 

Rreplace drupalmix with your app's name.
