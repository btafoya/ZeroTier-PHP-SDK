<?php
/*
 * ZeroTierCentralAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ZeroTierCentralAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class RandomToken implements JsonSerializable
{
    /**
     * Random string suitable for use as an API authentication token
     * @var string|null $token public property
     */
    public $token;

    /**
     * Current server-side system clock (ms since epoch)
     * @var double|null $clock public property
     */
    public $clock;

    /**
     * Raw random bytes in hex format
     * @var string|null $raw public property
     */
    public $raw;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $token Initialization value for $this->token
     * @param double $clock Initialization value for $this->clock
     * @param string $raw   Initialization value for $this->raw
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->token = func_get_arg(0);
            $this->clock = func_get_arg(1);
            $this->raw   = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['token'] = $this->token;
        $json['clock'] = $this->clock;
        $json['raw']   = $this->raw;

        return $json;
    }
}