<?php
/**
 * @package: chapi
 *
 * @author:  ppokatilo
 * @since:   2017-08-84
 */

namespace unit\Command;

use Chapi\Commands\ValidationCommand;

class ValidationCommandDummy extends ValidationCommand
{
    public static $containerDummy;

    protected function getContainer()
    {
        return self::$containerDummy;
    }

    protected function isAppRunable()
    {
        return true;
    }
}
