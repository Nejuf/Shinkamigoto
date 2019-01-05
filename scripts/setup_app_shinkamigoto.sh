#!/bin/bash
# setup_app_shinkamigoto.sh
# 
# Installs and sets up Shinkamigoto website application.
# Prerequisites: Apache and PHP installed (i.e. setup_lamp.sh)

fail(){
  ec=$?
  [ "${ec}" == "0" ] && ec=1
  echo "FAILED[code=$ec]: $@"
  exit $ec
}

echo "Installing and configuring Shinkamigoto website"

APP_DIR="/srv/www/shinkamigoto"

echo "Setting up website directory ($APP_DIR)"

sudo mkdir -p "$APP_DIR" || fail "Error making website directory"
sudo mkdir -p "$APP_DIR/html" || fail "Error making website html directory"
sudo mkdir -p "$APP_DIR/cgi-bin" || fail "Error making website cgi directory"

sudo chown -R apache:apache "$APP_DIR" || fail "Error setting ownership for website directory"
# Adds group write permissions and to set the group ID on future subdirectories
sudo chmod 2775 "$APP_DIR" && find "$APP_DIR" -type d -exec sudo chmod 2775 {} \;
# Add group write permissions for files
find "$APP_DIR" -type f -exec sudo chmod 0664 {} \;
# Now, any future members of the apache group can add, delete, and edit files in the Apache document root,
# enabling you to add content, such as a static website or a PHP application. 


echo "Configuring Apache to serve application"

sudo sed -i "s|/var/www|$APP_DIR|g" /etc/httpd/conf/httpd.conf || fail "Error changing Apache DocumentRoot"

sudo systemctl restart httpd || fail "Error restarting Apache"

echo "System is setup for Shinkamigoto application.  Copy webpage files into $APP_DIR/html."

echo "Finished installing and configuring Shinkamigoto website"

