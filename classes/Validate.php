<?php

class Validate
{
    private $_passed = false;
    private $_errors = [];
    private $_db     = null;

    public function __construct()
    {
        $this->_db = DB::getInstance();
    }

    public function check($source, $items = [])
    {
        foreach ($items as $item => $rules) {
            foreach ($rules as $rule => $rule_value) {
                echo "{$item} {$rule} must be {$rule_value}<br>";
            }
        }
    }
}
