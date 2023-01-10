<?php

require 'config.php';

use Sources\Classes\Database\Crud;

//WILL PRINT ALL USERS
Crud::Read('users');
var_dump('<pre>',Crud::getResult(),'</pre>');

//WILL PRINT ALL USERS WHERE FIST_NAME = Gabriel
Crud::Read('users',['first_name'=>'Gabriel']);
var_dump('<pre>',Crud::getResult(),'</pre>');

//WILL PRINT ALL USERS WHERE FIST_NAME START WITH G
Crud::Read('users',['first_name'=>'G%'],['Condition'=> 'WHERE first_name LIKE :first_name']);
var_dump('<pre>',Crud::getResult(),'</pre>');

//CREATE USER
Crud::Create('users',['first_name'=>'Gabriel','login'=>'admin','pass'=>'123']);
var_dump('<pre>',Crud::getResult(),'</pre>');

//UPDATE USER
Crud::Update('users',['first_name'=>'Bruno'],['id'=>'1']);
var_dump('<pre>',Crud::getResult(),'</pre>');