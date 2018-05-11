<?php
/*
 * ZeroTierCentralAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ZeroTierCentralAPILib;

use ZeroTierCentralAPILib\Controllers;

/**
 * ZeroTierCentralAPILib client class
 */
class ZeroTierCentralAPIClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $oAuthAccessToken = null
    ) {
        Configuration::$oAuthAccessToken = $oAuthAccessToken ? $oAuthAccessToken : Configuration::$oAuthAccessToken;
    }
 
    /**
     * Singleton access to GeneralQueries controller
     * @return Controllers\GeneralQueriesController The *Singleton* instance
     */
    public function getGeneralQueries()
    {
        return Controllers\GeneralQueriesController::getInstance();
    }
 
    /**
     * Singleton access to User controller
     * @return Controllers\UserController The *Singleton* instance
     */
    public function getUser()
    {
        return Controllers\UserController::getInstance();
    }
 
    /**
     * Singleton access to Network controller
     * @return Controllers\NetworkController The *Singleton* instance
     */
    public function getNetwork()
    {
        return Controllers\NetworkController::getInstance();
    }
 
    /**
     * Singleton access to Member controller
     * @return Controllers\MemberController The *Singleton* instance
     */
    public function getMember()
    {
        return Controllers\MemberController::getInstance();
    }
}
