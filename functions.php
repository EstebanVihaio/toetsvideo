<?php
/**
 * Deze functie gaat voor ons de noodzakelijke classes includen op een pagina
 * waar deze classes worden gebruikt.
 */

function load_model($class_name)
{
    $path_to_file = "../classes/" . $class_name . '.php';

    if (file_exists($path_to_file))
    {
          require($path_to_file);
    }
}

spl_autoload_register('load_model');