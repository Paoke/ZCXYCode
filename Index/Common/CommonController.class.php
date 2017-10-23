<?php

/**
 * 前台公共控制器
 */

namespace Index\Common;
use Think\Controller;

class CommonController extends Controller{
    
    function __construct() {
        parent::__construct();
        if(session('word')==null){
            $arrWord=D('word')->select();
            session('word',$arrWord);
        }else{

        }
    }
}

