<?php

namespace mamadali\types;


use mamadali\base\Type;

/**
 * @author MamadAli Git <mhmd.ali.shabani@gmail.com>
 * This object represents a chat.
 */
class Video extends Type
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
     * نام فرستنده ویدیو
     * @var string
     */
    public $sender_name;

    /**
     * لینک پوستر ویدیو سایز بزرگ
     * @var url
     */
    public $big_poster;

    /**
     * لینک پوستر ویدیو سایز کوچک
     * @var url
     */
    public $small_poster;

    /**
     * لینک عکس فرستنده ویدیو
     * @var url
     */
    public $profilePhoto;

    /**
     * مدت زمان ویدیو به ثانیه
     * @var integer
     */
    public $duration;

    /**
     * تاریخ ارسال ویدیو
     * @var string
     */
    public $sdate;

    /**
     * لینک frame ویدیو
     * @var url
     */
    public $frame;

    /**
     * رسمی یا نبودن کانال
     * @var string
     */
    public $official;

    /**
     * لیستی از تگ ها
     * @var list
     */
    public $tags;

    /**
     * توضیحات ویدیو
     * @var string
     */
    public $description;

    /**
     * آیدی طبقه بندی سایت ویدیو
     * @var integer
     */
    public $cat_id;

    /**
     * نام طبقه بندی ویدیو
     * @var string
     */
    public $cat_name;

    /**
     * اتوپلی ویدیو هست یا نه
     * @var boolean
     */
    public $autoplay;

    /**
     * ویدیو 360 درجه هست یا نه
     * @var boolean
     */
    public $_360d;

    /**
     * امکان نظر گذاشتن ویدیو
     * @var string
     */
    public $has_comment;

    /**
     * متن گذاشتن نظر برای ویدیو
     * @var
     */
    public $has_comment_txt;

    /**
     * حجم ویدیو
     * @var integer
     */
    public $size;

    /**
     * دارای دو فیلد می باشد که type وضعیت فیلم را نشان می دهد که اگر watch باشد امکان دیدن ویدیو را دارید
     * @var
     */
    public $watch_action;

    /**
     * @var array
     */
    public $cost_type;

    /**
     * امکان دانلود ویدیو وجود دارد یا خیر
     * @var boolean
     */
    public $can_download;

    /**
     * تعداد افرادی که این ویدیو رو پسندید
     * @var
     */
    public $like_cnt;
}