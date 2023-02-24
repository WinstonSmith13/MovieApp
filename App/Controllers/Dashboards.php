<?php

namespace WINSTON\movieAppNuxt\Controllers;

class Dashboards extends Controller{
    public function display(): array|string {
        return $this->render('layouts.default', 'templates.dashboard');
    }
}
