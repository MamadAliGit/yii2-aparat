<?php

namespace mamadali\models;


use mamadali\base\Model;

/**
 * @author MamadAli Git <mhmd.ali.shabani@gmail.com>
 * This object represents a chat.
 */
class ChannelPage extends Model
{
    /**
     * آیدی طبقه بندی
     * @var integer
     */
    public $cat_id;

    /**
     * نام طبقه بندی
     * @var string
     */
    public $cat_name;

    /**
     * تعداد ویدیوهای این طبقه بندی
     * @var integer
     */
    public $cat_cnt;

    /**
     * آدرس این طبقه بندی
     * @var url
     */
    public $link;

    /**
     * آرایه ای از ویدیو ها می باشد که هر سطرش مثل داده‌های لیست ویدیو است
     * @var array
     */
    private $_data;

    public function getData()
    {
        return $this->_data;
    }

    public function setData($value)
    {
        $this->_chat = new VideoList($value);
    }
}