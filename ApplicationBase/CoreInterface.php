<?php


namespace Spirling\Interfaces\ApplicationBase;


interface CoreInterface
{

    public function boot();

    public function reboot();

    public function shutdown();

    public function getEnvironment();

    public function getBaseDir();

    public function getContainer();

}