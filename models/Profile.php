<?php

namespace mamadali\models;


use mamadali\base\Model;

/**
 * @author MamadAli Git <mhmd.ali.shabani@gmail.com>
 * This object represents a chat.
 */
class Profile extends Model
{

    /**
     * آیدی کاربر
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $userid;

    /**
     * تعداد ویدیو
     * @var string
     */
    public $video_cnt;

    /**
     * آدرس سایت کاربر
     * @var url
     */
    public $url;

    /**
     * تعداد دنبال کننده های کاربر
     * @var integer
     */
    public $follower_cnt;

    /**
     * تعداد دنبال کرده های کاربر
     * @var integer
     */
    public $followed_cnt;

    /**
     * توضیحات کانال
     * @var string
     */
    public $descr;

    /**
     * صفحه رسمی هست یا نه
     * @var string
     */
    public $official;

    /**
     * آدرس صفحه سایت کلوب
     * @var url
     */
    public $cloob;

    /**
     * آدرس صفحه لنزور کانال
     * @var  url
     */
    public $lenzor;

    /**
     * آدرس صفحه فیسبوک
     * @var url
     */
    public $facebook;

    /**
     * آدرس صفحه توییتر
     * @var url
     */
    public $twitter;

    /**
     * لینک دنبال کردن یا نکردن صفحه
     * @var url
     */
    public $follow_link;

    /**
     * وضعیت دنبال کردن یا نکردن صفحه
     * @var string
     */
    public $follow_status;

    /**
     * آدرس کاور صفحه کانال
     * @var url
     */
    public $cover_src;

    /**
     * @var string
     */
    public $profile_videos;

    /**
     * @var string
     */
    public $has_live;

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