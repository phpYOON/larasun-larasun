<?php
$app = new \Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] = dirname(__DIR__)
);

$app->singleton(
    \Illuminate\Contracts\Http\Kernel::class,
    \Illuminate\Foundation\Http\Kernel::class
);

return $app;


