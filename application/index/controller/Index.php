<?php
/**
 * Created by PhpStorm.
 * User: NickBai
 * Email: 876337011@qq.com
 * Date: 2019/6/22
 * Time: 8:18 AM
 */
namespace app\index\controller;

class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }
}
