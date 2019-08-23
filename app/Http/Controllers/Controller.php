<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $page_name;

    protected $url;

    protected $views;

    public function pageName()
    {
        return $this->page_name;
    }

    public function pageUrl()
    {
        return $this->url;
    }

    public function index()
    {
        return view($this->views);
    }
}
