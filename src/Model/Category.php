<?php

namespace Hillel\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function posts()
{
    return $this->hasMany(post::class);
}


    public function delete()
{

    if ($this->id == 0) {
        echo "You can't delete this speshial category(Слющай ти самий умний, да ? нэлзя значыт НЭЛЗЯ!!!!)";
        return false;
    }
    \Hillel\Model\Post::where('category_id',$this->id)->update(['category_id' => 0]);


    return parent::delete(); // TODO: Change the autogenerated stub
}
}