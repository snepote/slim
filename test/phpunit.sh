#!/bin/sh
FILE_PATH=$(dirname $(readlink -f "$0"))
$FILE_PATH/../vendor/bin/phpunit --bootstrap $FILE_PATH/unit/bootstrap.php -c $FILE_PATH/unit/phpunit.xml $FILE_PATH/unit/src/Snepote