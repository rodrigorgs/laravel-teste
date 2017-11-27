#!/bin/bash

sshpass -p "$RSYNC_PASSWORD" rsync -e "ssh -p 3389 -o StrictHostKeyChecking=no" -r --delete-after --quiet $TRAVIS_BUILD_DIR lacmng@lac.ufba.br:./laravel-teste