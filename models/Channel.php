<?php

namespace mamadali\models;


use mamadali\base\Model;

/**
 * @author MamadAli Git <mhmd.ali.shabani@gmail.com>
 * This object represents a chat.
 */
class Channel extends Model
{

    /**
     * آدرس عکس اندازه کوچک
     * @var url
     */
    public $pic_s;

    /**
     * آدرس عکس اندازه متوسط
     * @var url
     */
    public $pic_m;

    /**
     * آدرس عکس اندازه بزرگ
     * @var url
     */
    public $pic_b;

    /**
     * نام کاربری کاربر
     * @var string
     */
    public $username;

    /**
     * نام کاربر
     * @var string
     */
    public $name;

    /**
     * تعداد ویدیو های کاربر
     * @var integer
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

}