<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SectionController extends BaseController
{
    private $studmod;
    private $sec;
    public function __construct()
    {
        helper('url');
        $this->studmod = new \App\Models\StudModel();
        $this->sec = new \App\Models\SectionModel();
    }
}
