<?php
namespace AppBundle\Service;

use Ratchet\ConnectionInterface;
use Gos\Bundle\WebSocketBundle\RPC\RpcInterface;
use Gos\Bundle\WebSocketBundle\Router\WampRequest;

class ChatService implements RpcInterface
{
    /**
     * @param ConnectionInterface $connection
     * @param WampRequest $request
     * @param array $params
     * @return int
     */
    public function getMessage(ConnectionInterface $connection, WampRequest $request, $params)
    {
        $connection->send($params['message']);
        return array("message" => $params['message'], "request" => $connection);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme.rpc';
    }
}