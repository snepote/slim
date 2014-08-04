#!/bin/sh
FILE_PATH=$(dirname $(readlink -f "$0"))
php $FILE_PATH/../vendor/bin/coveralls -v --config $FILE_PATH/../.coveralls.yml

