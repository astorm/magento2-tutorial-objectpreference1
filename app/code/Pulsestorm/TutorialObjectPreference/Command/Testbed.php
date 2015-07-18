<?php
namespace Pulsestorm\TutorialObjectPreference\Command;

use Magento\Framework\ObjectManagerInterface;
use Pulsestorm\TutorialObjectPreference\Model\Messenger;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Testbed extends Command
{
    protected $object_manager;
    protected $messenger;
    
    public function __construct(Messenger $messenger, ObjectManagerInterface $om)
    {
        $this->object_manager = $om;
        $this->messenger      = $messenger;
        
        return parent::__construct();
    }
    
    protected function configure()
    {
        $this->setName("ps:tutorial-object-preference");
        $this->setDescription("A command the programmer was too lazy to enter a description for.");
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(
            $this->messenger->getMessage()
        );  
    }
} 