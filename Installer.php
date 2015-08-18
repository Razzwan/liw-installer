<?php
namespace liw\installer;

class Installer
{
    static public function postCreateProject()
    {
        mkdir(LIW_CORE . 'newDir');
    }
}