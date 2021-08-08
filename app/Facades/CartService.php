<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class CartService extends Facade{
    protected static function getFacadeAccessor(){
        return 'cartCheck'; //Нужно вернуть имя ечейки из service container куда мы положили наш service
    }
}