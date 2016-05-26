<?php
namespace FW\SqlFormatter\Facade;
use Illuminate\Support\Facades\Facade;
class SqlFormatter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SqlFormatter';
    }
}
