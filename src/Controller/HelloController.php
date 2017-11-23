<?php
/**
 * Created by PhpStorm.
 * User: kumew
 * Date: 2017/11/19
 * Time: 15:08
 */

namespace App\Controller;


class HelloController extends AppController
{
    public $name = 'Hello';
    public $autoRender = true;

    /**
     *
     */
    public function index(){
//        $this->setAction("other"); // フォワード
//        $this->redirect("/hello/other"); // リダイレクト
//        $this->viewBuilder()->autoLayout(false);
    }

//    public function other(){
//        echo "これはindex以外のページです";
//    }
}