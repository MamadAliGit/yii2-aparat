<?php

namespace mamadali\types;


use http\Url;
use mamadali\base\Type;

/**
 * @author MamadAli Git <mhmd.ali.shabani@gmail.com>
 * This object represents a chat.
 */
class VideoList extends Type
{
    /**
     * آیدی ویدیو
     * @var integer
     */
    public $id;

    /**
     * عنوان ویدیو
     * @var string
     */
    public $title;

    /**
     * نام کاربری فرستنده ویدیو
     * @var string
     */
    public $username;

    /**
     * آیدی فرستنده ویدیو
     * @var integer
     */
    public $userid;

    /**
     * تعداد بازدیدهای ویدیو
     * @var integer
     */
    public $visit_cnt;

    /**
     * uid یکتای ویدیو
     * @var string
     */
    public $uid;

    /**
     * وضعیت ویدیو
     * @var string
     */
    public $process;

    /**
     * آدرس پوستر سایز بزرگ ویدیو
     * @var url
     */
    public $big_poster;

    /**
     * آدرس پوستر سایز کوچک ویدیو
     * @var url
     */
    public $small_poster;

    /**
     * مدت زمان ویدیو با ثانیه
     * @var integer
     */
    public $duration;

    /**
     * تاریخ ارسال ویدیو
     * @var string
     */
    public $sdate;

    /**
     * frame ویدیو
     * @var url
     */
    public $frame;

    /**
     * رسمی بودن یا نبودن
     * @var string
     */
    public $official;

    /**
     * اتو پلی بودن ویدیو
     * @var boolean
     */
    public $autoplay;

    /**
     * ویدیو 360 درجه بودن
     * @var boolean
     */
    public $_360d;
}