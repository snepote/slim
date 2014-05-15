#!/bin/sh
# verbose output level: debug
# no interactive question
../vendor/bin/phpcpd ../src --log-pmd ./reports/phpcpd.xml --fuzzy --progress -vvv --no-interaction