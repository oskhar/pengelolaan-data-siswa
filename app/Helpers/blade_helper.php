<?php

use Jenssegers\Blade\Blade;
function blade_view($template, $data = []) {
    $blade = new Blade(APPPATH . 'Views', APPPATH . 'Views/cache');
    echo $blade->make($template, $data)->render();
}