<?php

require_once 'core/init.php';

if (Input::exists()) {
    $validate  = new Validate();
    $valiation = $validate->check($_POST, [
        'username' => [
            'required' => true,
            'min'      => 2,
            'max'      => 20,
            'unique'   => 'users'
        ],
        'password' => [
            'required' => true,
            'min'      => 5
        ],
        'password_again' => [
            'required' => true,
            'matches'  => 'password'
        ],
        'name'     => [
            'required' => true,
            'min'      => 2,
            'max'      => 50
        ]
    ]);
}
?>
<form action="" method="post">
    <div class="field">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="" autocomplete="off">
    </div>

    <div class="field">
        <label for="password">Choose a password</label>
        <input type="password" name="password" id="password">
    </div>

    <div class="field">
        <label for="password_again">Retype password</label>
        <input type="password" name="password_again" id="password_again">
    </div>

    <div class="field">
        <label for="username">Name</label>
        <input type="text" name="name" id="name" value="">
    </div>

    <input type="submit" value="Register">
</form>