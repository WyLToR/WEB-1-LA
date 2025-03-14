<?php

final class App
{
    /**
     * Start the application
     */
    public static function start(): void
    {
        DB::connect();
        $layout = new Layout("views/layouts/frontend/layout.php");

        $layout->show();
    }
}
