<?php declare(strict_types=1);

namespace Casa\YouLess\Commands;

use Casa\YouLess\Request\Request;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DeviceMacCommand extends Command
{
    protected static $defaultName = 'device:mac';

    protected function configure()
    {
        $this->setDescription('Display YouLess device mac address');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(Request::deviceInfo()->response()->mac);
    }
}