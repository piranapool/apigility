<?php

namespace PP\Apigility;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Utility
{
    public static function postInstall(Event $event)
    {
        $collection                     = __DIR__ . '/Collection.php';
        $rest_dir                       = __DIR__ . '/Rest';
        $rpc_dir                        = __DIR__ . '/Rpc';
        $view_dir                       = __DIR__ . '/../view';

        $new_apigility_dir              = __DIR__ . '/../../../../module/Application/src/Apigility';
        $new_apigility_collection       = $new_apigility_dir . '/Collection.php';
        $new_apigility_rest_dir         = $new_apigility_dir . '/Rest';
        $new_apigility_rpc_dir          = $new_apigility_dir . '/Rpc';
        $new_apigility_view_dir         = $new_apigility_dir . '/view';

        $apigility_admin_dir            = __DIR__ . '/../../../zfcampus/zf-apigility-admin';
        $apigility_admin_view_dir       = $apigility_admin_dir . '/view';
        $apigility_admin_view_out_dir   = $apigility_admin_dir . '/view.out';

        if (!is_dir($new_apigility_dir)) {
            `mkdir $new_apigility_dir`;

            `cp $collection $new_apigility_collection`;
            `cp -r $rest_dir $new_apigility_rest_dir`;
            `cp -r $rpc_dir $new_apigility_rpc_dir`;
            `cp -r $view_dir $new_apigility_view_dir`;
        }

        if (!is_dir($apigility_admin_view_out_dir)) {
            `mv $apigility_admin_view_dir $apigility_admin_view_out_dir`;
            `ln -s $new_apigility_view_dir $apigility_admin_view_dir`;
        }
    }

    public static function postUpdate(Event $event)
    {
        return self::postInstall($event);
    }
}
