<?php

namespace mamadali\models;


use mamadali\base\Model;

/**
 * @author MamadAli Git <mhmd.ali.shabani@gmail.com>
 * This object represents a chat.
 */
class Login extends Model
{

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
}