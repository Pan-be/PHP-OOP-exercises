<?php

class User {

    public $name;
    public $userName;
    public $followerCount;

}

$garyObj = new User();
$garyObj->name = 'Gary Clarke';
$garyObj->userName = '@garyclarketech';
$garyObj->followerCount = 50;

print_r($garyObj);

$konradObj = new User();
$konradObj->name = 'Gary Clarke';
$konradObj->userName = '@garyclarketech';
$konradObj->followerCount = 50;

print_r($konradObj);