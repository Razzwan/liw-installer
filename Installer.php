<?php
namespace liw\installer;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Installer
{
    static public function postCreateProject(Event $event)
    {
        $installedPackage = $event->getOperation()->getPackage();
        mkdir(LIW_CORE . 'newDir');
    }
}