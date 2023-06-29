<?php
namespace tests\model;

use think\Model;

/**
 * Class User
 */
class User extends Model
{
    /**
     * @return static
     */
    protected function getHaaAttr()
    {
        return $this;
    }

    public function children()
    {
        return $this->belongsTo('User');
    }

    public function children2()
    {
        return $this->hasMany(self::class)->where('id',1);
    }
}