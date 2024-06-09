<?php

class UserController
{
    public function index()
    {
        echo "Usercontroller Index";
    }

    public function show($id)
    {
        echo "Usercontroller Show".$id[0];
    }
}