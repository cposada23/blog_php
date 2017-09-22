<?php

namespace App\controllers\Admin;

class IndexController {
    public function getIndex()
    {
        return render('../views/admin/index.php');
    }
}