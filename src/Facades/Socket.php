<?php namespace Santran\Socket\Facades;

use Illuminate\Support\Facades\Facade;

class Socket extends Facade {

    /**
     * Facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'santran.socket';
    }

}
