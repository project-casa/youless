<?php declare(strict_types=1);

namespace Casa\YouLess\Boot;

use Casa\YouLess\Device\DeviceFactory;
use Stellar\Common\StaticClass;

final class Boot extends StaticClass
{
    /**
     * Boot the application by reading the config and database.
     */
    public static function execute() : void
    {
        $config = Config::instance();

        DeviceFactory::instance()
            ->init($config->devices);
    }
}