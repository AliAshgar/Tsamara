<?php

namespace App\Models;

use CodeIgniter\Model;

class CssJsModel extends Model
{
    public function getCss()
    {
        return  array(
            "plugins/fontawesome-free/css/all.min.css",
            "plugins/overlayScrollbars/css/OverlayScrollbars.min.css",
            "dist/css/adminlte.min.css"
        );
    }
    public function getJs()
    {
        return  array(
            "plugins/jquery/jquery.min.js",
            "plugins/bootstrap/js/bootstrap.bundle.min.js",
            "plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
            "dist/js/adminlte.js",
            "plugins/jquery-mousewheel/jquery.mousewheel.js",
            "plugins/raphael/raphael.min.js",
            "plugins/jquery-mapael/jquery.mapael.min.js",
            "plugins/jquery-mapael/maps/usa_states.min.js",
            "plugins/chart.js/Chart.min.js",
            "dist/js/demo.js",
            "dist/js/pages/dashboard2.js"
        );
    }
}
