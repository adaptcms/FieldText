<?php

namespace Adaptcms\FieldText\Facades;

use Illuminate\Support\Facades\Facade;

class FieldText extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'FieldText';
    }
}
