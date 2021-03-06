<?php

namespace Herkod\Core\Order\Facade;

use Illuminate\Support\Facades\Facade;

class OrderFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Order\Order';
    }
}
