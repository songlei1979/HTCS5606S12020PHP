<?php
/**
 * Class User
 * Author: Lei Song
 * Date: 2020-06-09
 * Version: 1
 */

class User
{
    public $id;
    public $username;
    private $password;
    public $name;

    /**
     * User constructor.
     * @param $id
     * @param $username
     * @param $password
     * @param $name
     */
    public function __construct($id, $username, $password, $name)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }


}
