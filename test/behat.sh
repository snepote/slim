#!/bin/sh
PROFILE=cli

show_help() {
    echo "Usage: $0 [-h] [-p PROFILE] "
    echo "\t-p PROFILE Set behat profile (cli/ci/report. Default \""$PROFILE"\")."
    echo "\t-h Show this help."
}

acceptance_test() {
    FILE_PATH=$(dirname $(readlink -f "$0"))
    php $FILE_PATH/../vendor/bin/behat --config $FILE_PATH/acceptance/config/behat.yml --profile $PROFILE
}


while getopts p:h option
do
    case "${option}"
    in
        p)
            PROFILE=${OPTARG}
            ;;
        h)
            show_help
            exit
            ;;
        esac
done

echo "Executing acceptance tests (behat):"
echo "-->profile($PROFILE)"
echo ""

acceptance_test