<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 5/12/2016
 * Time: 21:43
 */

namespace App\Presenters;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {
    public function  fullName(){
        return $this->firstname. ' ' .$this->lastname;
    }
}