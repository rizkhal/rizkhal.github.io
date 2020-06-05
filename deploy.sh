#!/bin/bash

clear

msg="Rebuilding Site `date` :pushpin:"
if [ $# -eq 1 ]
  then msg="$1"
fi

echo -e "\033[0;32mBuild Production 🤖\033[0m"

npm run production

echo -e "\033[0;32mAdd Production 🤖\033[0m"

git add build_production && git commit -m "$msg"

echo -e "\033[0;32mDeploying Production 🤖\033[0m"

git push origin `git subtree split --prefix build_production master`:master --force

echo -e "\033[0;32mAdd Backup Contents 🤖\033[0m"

git add source/_posts && git commit -m "$msg"

echo -e "\033[0;32mDeploying Backup Contents 🤖\033[0m"

git push origin `git subtree split --prefix source/_posts master`:contents --force

echo -e "\033[0;32mComplete 🎉\033[0m"
