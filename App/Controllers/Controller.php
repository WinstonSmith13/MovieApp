<?php

namespace WINSTON\movieAppNuxt\Controllers;

class Controller{
    const VIEWPATH = __DIR__ . '/../../Views/';
    const EXT = '.tmpl.php';
    const PAGETITLE = 'WeatherApp';

    public function render($layout, $view, $data=null): array|string{
        $layout_ar = explode('.', $layout);
        ob_start();
        require_once (self::VIEWPATH . ucfirst($layout_ar[0]) . '/' . $layout_ar[1] . self::EXT);
        $layout_content = ob_get_contents();
        ob_end_clean();
        $layout = str_replace('{pageTitle}', self::PAGETITLE, $layout_content);

        $view_ar = explode('.', $view);
        ob_start();
        require_once (self::VIEWPATH . ucfirst($view_ar[0]) . '/' . $view_ar[1] . self::EXT);
        $view_content = ob_get_contents();
        ob_end_clean();
        return  str_replace('{pageContent}', $view_content, $layout);
    }
}
