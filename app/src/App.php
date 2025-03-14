<?php

final class App
{
    /**
     * Start the application
     */
    public static function start(): void
    {

        $layout = new Layout("views/layouts/frontend/layout.php");

        $layout->show();
    }
}
