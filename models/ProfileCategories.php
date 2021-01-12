<?php

namespace mamadali\models;


use mamadali\base\Model;

/**
 * @author MamadAli Git <mhmd.ali.shabani@gmail.com>
 * This object represents a chat.
 */
class ProfileCategories extends Model
{

    public function rules()
    {
        return [
            [['id', 'name'], 'safe'],
        ];
    }

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

}