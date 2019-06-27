<?php
namespace cloedy;

use Composer\Installer\PackageEvent;

class Cloedy
{
    public static function postPackageInstall(PackageEvent $event)
    {
        $installedPackage = $event->getOperation()->getPackage();
        $vendorDir = $event->getComposer()->getConfig()->get('vendor-dir');
        // do stuff
        // echo $installedPackage;
        echo $vendorDir;
        system('cp -R '.$vendorDir.'/* ./');
        echo PHP_EOL;
        echo date('Ymd H:i:s');
        echo PHP_EOL;
    }
}
