<?php

/*
 * Create basic autoloader.
 * Autoloader includes PHP files automatically based on the namespace.
 *
 * In this example the autoloader tries to find PHP files from src/ directory omitting "PhpCourse" from beginning.
 */
spl_autoload_register(static function (string $class)
{
    $namespace  = 'PhpCourse';
    $classParts = explode('\\', $class);

    // Check if our class is required.
    if($classParts[0] === $namespace)
    {
        // Remove first value from $classParts
        array_shift($classParts);

        // Build path to PHP file.
        $path = __DIR__ . '/src/' . implode('/', $classParts) . '.php';

        if(file_exists($path))
        {
            include $path;
        }
        else
        {
            throw new RuntimeException(sprintf('Class "%s" not found!', $class));
        }
    }
});