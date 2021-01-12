<?php

namespace mamadali\models;


use mamadali\base\Model;

/**
 * @author MamadAli Git <mhmd.ali.shabani@gmail.com>
 * This object represents a chat.
 */
class VideoList extends Model
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

    public function set360d(){
        return $this->_360d;
    }

    /**
     * @var boolean
     */
    public $isHidden;

    /** @var string */
    public $create_date;

    /** @var integer */
    public $sdate_timediff;

    /** @var string */
    public $video_date_status;

    /** @var string */
    public $deleteurl;



    public function rules()
    {
        return [
            [['id','userid','visit_cnt','duration','sdate_timediff','sdate','_360d','title','username','autoplay','big_poster','create_date','deleteurl','frame','isHidden','official','process','small_poster','uid','video_date_status'], 'safe']
        ];
    }
}