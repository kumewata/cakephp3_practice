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
    public function initialize()
    {
        $this->viewBuilder()->layout('Hello');
        $this->set('msg', 'Hello/index');
        $this->set('footer', 'Hello\footer2');
    }


    /**
     *
     */
    public function index(){

    }

    public function sendForm() {
        $str = $this->request->query['text1'];
        $result = "";
        if ($str != "") {
            $result = "you type: " . $str;
        } else {
            $result = "empty";
        }
        $this->set("result", $result);
    }
}