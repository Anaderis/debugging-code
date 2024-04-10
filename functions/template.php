<?php

if (!defined('TEMPLATE_PATH')) {
    define('TEMPLATE_PATH', 'templates');
}

/**
 * Get template file
 *
 * Allows you to include the PHP file wich contain an HTML template file
 *
 * @param string file name to be included
 * @param array the data(s) to be passed (e.g page title, database etc.)
 *
 * @return template file, wich is included by  wpf_include function that stored on ./functions/includer.php. //Ruben : Class inconnue (template)
 */
function template(string $file_name, array $data = array('title' => 'PHPCrud')) {
    return get_file($file_name, TEMPLATE_PATH, $data);  //Ruben : la valeur retournée devrait être un type template
}
