<?php

namespace mamadali\types;


use mamadali\base\Type;

/**
 * @author MamadAli Git <mhmd.ali.shabani@gmail.com>
 * This object represents a chat.
 */
class Form extends Type
{

    /**
     * اطلاعاتی که میخواهید از طریق POST ارسال نمایید به این آدرس بفرستید
     * @var url
     */
    public $formAction;

    /**
     * آیدی فرم
     * @var integer
     */
    public $frm_id;
}