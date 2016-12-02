<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 30/11/2016
 * Time: 20:32
 */

namespace App\Presenters;

use Laracasts\Presenter\Presenter;

class ProductPresenter extends Presenter {

    public function showAvailability() {
        $class = ($this->availability) ? 'instock' : 'outofstock';
        $text = ($this->availability) ? 'In Stock' : 'Out of Stock';
        return sprintf('<span class="%s">%s</span>', $class, $text);
    }
}