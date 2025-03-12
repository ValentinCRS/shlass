<?php

require "user.php";


class userController{
    public function showUser(){
    $elUser = new User();
    $bolls = $elUser-> getAllUser();
    require "userView.phtml";
    }
}