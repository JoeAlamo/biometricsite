<?php
/**
 * Created by PhpStorm.
 * User: Joe Alamo
 * Date: 09/02/2016
 * Time: 16:28
 */

namespace BiometricSite\Service;


interface LoginAuthServiceInterface {
    public function authenticateUser($username, $password);
} 