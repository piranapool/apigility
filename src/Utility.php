<?php
namespace PP\Apigility;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Utility
{
    private $collection             = realpath(__DIR__ . '/Collection.php');
    private $rest_dir               = realpath(__DIR__ . '/Rest');
    private $rpc_dir                = realpath(__DIR__ . '/Rpc');
    private $view_dir               = realpath(__DIR__ . '/../view');
    private $new_apigility_dir      = realpath(__DIR__ . '/../../../../module/Application/src/Apigility');
    private $apigility_admin_dir    = realpath(__DIR__ . '/../../../zfcampus/zf-apigility-admin');

    public static function postUpdate(Event $event)
    {
        if (!is_dir($this->apgility_dir)) {
            mkdir($this->apigility_dir, 0755);

            `mv $this->collection $this->new_apigility_dir`;
            `mv $this->rest_dir $this->new_apigility_dir`;
            `mv $this->rpc_dir $this->new_apigility_dir`;
            `mv $this->view $this->new_apigility_dir`;

            `mv $this->apigility_admin_dir/view $this->apigility_admin_dir/view.out`;
            `ln -s $this->new_apigility_dir/view $this->apigility_admin_dir/view`;
        }
    }
}
