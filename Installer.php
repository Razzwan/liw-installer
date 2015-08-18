<?php
namespace liw\installer;

class Installer
{
    static public function postCreateProject()
    {
        mkdir(__DIR__ . '/newDir');
    }
}