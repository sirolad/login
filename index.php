<?php

require_once 'core/init.php';

//$user = DB::getInstance();
//$user->get('users', array('username', '=', 'bill'));
//$user->query("SELECT *FROM users");

// if (!$user->count()) {
//     echo 'No user';
// } else {
    // foreach ($user->results() as $user) {
    //     echo $user->username, '<br>';
//     // }
//     echo $user->first()->username;
// }
// $user->insert('users', array(
//     'username' =>'Dale',
//     'password' =>'password',
//     'salt'     =>'salt'
//     ));
// $userInsert = DB::getInstance()->insert('users', array(
//     'username' => 'Dele',
//     'password' => 'pading',
//     'salt'     => 'salt'
//     ));
// if ($userInsert) {
//     //success
// }
$userInsert = DB::getInstance()->update('users', 5, array(
    'password' => 'newpassword',
    'name'     => 'Dele Garret',
    'joined'   => '2015-02-31 02:10:10'
));
