#!/bin/bash
# setup_lamp.sh
# 
# Installs and sets up basic LAMP web server for an Amazon Linux 2 AMI instance.
#    Based on the following instructions: https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-lamp-amazon-linux-2.html

fail(){
  ec=$?
  [ "${ec}" == "0" ] && ec=1
  echo "FAILED[code=$ec]: $@"
  exit $ec
}

echo "Installing and configuring LAMP"

sudo yum update -y || fail "Error updating system"

# Note: amazon-linux-extras is only available in Amazon Linux 2 AMI instances
sudo amazon-linux-extras install -y lamp-mariadb10.2-php7.2 php7.2 || fail "Error installing LAMP repositories"

sudo yum install -y httpd || fail "Error installing Apache"

sudo yum install -y mariadb-server || fail "Error installing MariaDB"

sudo systemctl start httpd || fail "Error starting Apache"

sudo systemctl enable httpd || fail "Error setting Apache to run at boot"

echo
echo "At this point you should be able to access the default Apache web pages on port 80 (if you have the port enabled for the instance)."
echo

echo "Finished installing and configuring LAMP"

