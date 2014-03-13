<?php
/**
 * Application bootstrap
 *
 * @author Sebastian Nepote <snepote@gmail.com>
 */

require __DIR__ . '/../vendor/autoload.php';
function customAutoload($className)
{
    if (class_exists($className) || interface_exists($className)) {
        return true;
    }

    if ((version_compare(PHP_VERSION, '5.4.0') >= 0) && trait_exists($className)) {
        return true;
    }

    $filename = __DIR__ . DIRECTORY_SEPARATOR . str_replace("\\", DIRECTORY_SEPARATOR, $className) . '.php';
    if (is_readable($filename)) {
        require($filename);
        return true;
    } else {
        return false;
    }
}
spl_autoload_register('customAutoload');