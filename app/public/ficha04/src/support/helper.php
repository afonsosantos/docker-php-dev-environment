<?php
// Helper functions will be included automatically on all other php files

function view($viewName, $vars)
{
    // Declares a local variable for each pair inside $vars
    foreach ($vars as $name => $value) {
        $$name = $value;
    }

    include __DIR__ . "/../views/" . str_replace('.', '/', $viewName) . ".view.php";
}

function partialView($viewName, $vars)
{
    foreach ($vars as $name => $value) {
        $$name = $value;
    }

    include __DIR__ . "/../views/" . str_replace('.', '/', $viewName) . ".view.php";
}
