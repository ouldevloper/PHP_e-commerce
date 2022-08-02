<?php

namespace Controllers;
use Vendor\Controller;  

class AuthController extends Controller{
    public function login(){
        return view("auth.login");
    }
}