<?php

namespace mamadali\models;


use mamadali\base\Model;

/**
 * @author MamadAli Git <mhmd.ali.shabani@gmail.com>
 * This object represents a chat.
 */
class Form extends Model
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