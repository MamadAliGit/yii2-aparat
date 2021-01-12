<?php

namespace mamadali\models;


use mamadali\base\Model;

/**
 * @author MamadAli Git <mhmd.ali.shabani@gmail.com>
 * This object represents a chat.
 */
class Pagination extends Model
{

    /**
     * @var string
     */
    public $pagingForward;

    /**
     * @var string
     */
    public $pagingBack;
}