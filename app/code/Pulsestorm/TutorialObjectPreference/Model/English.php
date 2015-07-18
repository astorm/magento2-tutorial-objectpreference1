<?php
namespace Pulsestorm\TutorialObjectPreference\Model;
class English implements MessageHolderInterface
{
    public function getHelloMessage()
    {
        return 'Hello!';
    }
}
