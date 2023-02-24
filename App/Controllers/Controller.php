<?php

namespace WINSTON\movieAppNuxt\Controllers;

class Controller{
    const VIEWPATH = __DIR__ . '/../../Views/';
    const EXT = '.tmpl.php';
    const PAGETITLE = 'WeatherApp';

    public function render($layout, $view, $data=null): array|string{
        $layout_ar = explode('.', $layout);
        ob_start();
    }
}
