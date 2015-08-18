<?php
namespace liw\installer;

class Installer
{
    static public function postCreateProject(Event $event)
    {
        mkdir(LIW_CORE . 'newDir');
    }
}