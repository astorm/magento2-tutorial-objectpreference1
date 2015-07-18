<?php
namespace Pulsestorm\TutorialObjectPreference\Model;
class Messenger
{
    protected $message_holder;
    public function __construct(MessageHolderInterface $mhi)
    {
        $this->message_holder = $mhi;
    }
    
    public function getMessage()
    {
        return $this->message_holder->getHelloMessage();
    }
}