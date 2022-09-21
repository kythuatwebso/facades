<?php

namespace Websovn\Facades;

use Illuminate\Support\Facades\File as BaseFilde;

class File extends BaseFilde
{
    protected static function resolveFacadeInstance($name)
    {
        $class = \Illuminate\Filesystem\Filesystem::class;
        static::swap(new $class());

        return parent::resolveFacadeInstance($name);
    }
}
