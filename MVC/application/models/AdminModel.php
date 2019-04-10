<?php

class AdminModel
{
    /*
     * Property LOGIN and PASSWORD
     */
    private $login    = 'admin';
    private $password = 'admin';

    public function checkLogin($_login, $_password)
    {
        if ($_login == $this->login && $_password == $this->password)
        {
            $this->login();
            return true;
        }

        return false;
    }

    private function login()
    {
        $_SESSION['user'] = true;
    }

    public function logout()
    {
        unset($_SESSION['user']);
    }

    public function isLogged()
    {
        if (isset($_SESSION['user']))
            return true;

        return false;
    }

}