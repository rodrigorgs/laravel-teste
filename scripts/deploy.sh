#!/bin/bash

rsync -r --delete-after --quiet $TRAVIS_BUILD_DIR lacmng@lac.ufba.br:./laravel-teste