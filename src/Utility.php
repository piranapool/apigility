<?php
namespace PP\Apigility;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Utility
{
    public static function postUpdate(Event $event)
    {
        $collection             = realpath(__DIR__ . '/Collection.php');
        $rest_dir               = realpath(__DIR__ . '/Rest');
        $rpc_dir                = realpath(__DIR__ . '/Rpc');
        $view_dir               = realpath(__DIR__ . '/../view');
        $new_apigility_dir      = realpath(__DIR__ . '/../../../../module/Application/src/Apigility');
        $apigility_admin_dir    = realpath(__DIR__ . '/../../../zfcampus/zf-apigility-admin');

        if (!is_dir($new_apigility_dir)) {
            mkdir($new_apigility_dir, 0755);

            `mv $collection $new_apigility_dir`;
            `mv $rest_dir $new_apigility_dir`;
            `mv $rpc_dir $new_apigility_dir`;
            `mv $view $new_apigility_dir`;

            `mv $apigility_admin_dir/view $apigility_admin_dir/view.out`;
            `ln -s $new_apigility_dir/view $apigility_admin_dir/view`;
        }
    }
}
