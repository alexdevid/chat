<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ChatCommand extends ContainerAwareCommand {

    protected function configure() {
        $this->setName('chat:start');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        echo 'Create socket ... ';
        if (($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) < 0) {
            throw new Exception('socket_create() failed: '.socket_strerror(socket_last_error())."\n");
        } else {
            echo "OK\n";
        }

        $address = 'localhost';
        $port    = 10001;
        echo 'Bind socket ... ';
        if (($ret = socket_bind($sock, $address, $port)) < 0) {
            throw new Exception('socket_bind() failed: '.socket_strerror(socket_last_error())."\n");
        } else {
            echo "OK\n";
        }
    }
}