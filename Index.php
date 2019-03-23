<?php
namespace app\admin\controller;
use app\admin\controller\Common;
class Index extends Common
{
    public function index()
    {
        // return 'admin';
        // return view();
        return $this->fetch();
    }
}
