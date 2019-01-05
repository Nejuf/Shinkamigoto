#/bin/bash
# deploy.sh
#
# Copies local source onto AWS server.

fail(){
  ec=$?
  [ "${ec}" == "0" ] && ec=1
  echo "FAILED[code=$ec]: $@"
  exit $ec
}
popdfail(){
  ec=$?
  popd
  $(exit $ec) #restore the exit code
  fail "$@"
}

echo "Syncing source to production"

ssh aws_shin "mkdir -p ~/shinkamigoto/html || exit 1" || fail "Error configuring remote server"

pushd $(dirname "$BASH_SOURCE") || fail
rsync -r --delete ../src/ aws_shin:~/shinkamigoto/html/ || popdfail "Error copying source to production"
popd

ssh aws_shin "sudo rsync -r --delete ~/shinkamigoto/html/ /srv/www/shinkamigoto/html || exit 1" || fail "Error configuring remote server"

echo "Finished syncing source to production"

