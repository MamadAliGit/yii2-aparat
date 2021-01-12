<?php

namespace mamadali\types;


use mamadali\base\Type;

/**
 * @author MamadAli Git <mhmd.ali.shabani@gmail.com>
 * This object represents a chat.
 */
class Profile extends Type
{

    /**
     * آیدی کاربر
     * @var integer
     */
    public $id;

    /**
     * username کاربر
     * @var string
     */
    public $username;

    /**
     * نام کاربر
     * @var string
     */
    public $name;

    /**
     * عکس پروفایل داره یا خیر
     * @var string
     */
    public $pic;

    /**
     * توکن برای کارهایی که نیاز به لاگین دارد مثل آپلود ویدیو و ...
     * @var string
     */
    public $ltoken;

    /**
     * کاربر مسدود شده یا نه که با yes یا no مشخص میشود
     * @var string
     */
    public $banned;

    /**
     * ایمیل کاربر
     * @var string
     */
    public $email;

    /**
     * شماره موبایل کاربر
     * @var string
     */
    public $mobile_number;

    /**
     * شماره موبایلی که توسط کاربر تأیید شده است
     * @var url
     */
    public $mobile_valid;

    /**
     * لینک عکس پروفایل سایز کوچک
     * @var url
     */
    public $pic_s;

    /**
     * لینک عکس پروفایل سایز متوسط
     * @var url
     */
    public $pic_m;

    /**
     * لینک عکس پروفایل سایزبزرگ
     * @var url
     */
    public $pic_b;
}