<?php

$url = 'https://randomuser.me/api/?format=csv';

$users = file_get_contents($url);

file_put_contents('users.csv', $users, FILE_APPEND );






