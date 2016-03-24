<?php
namespace AppBundle\Service;
use Gos\Bundle\WebSocketBundle\Topic\TopicInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Wamp\Topic;
use Gos\Bundle\WebSocketBundle\Router\WampRequest;


class ChatTopic implements TopicInterface {

    /**
     * @param ConnectionInterface $connection
     * @param Topic $topic
     * @param WampRequest $request
     * @return void
     */
    public function onSubscribe(ConnectionInterface $connection, Topic $topic, WampRequest $request)
    {

        $response = [
            "User" => ['Id' => $connection->resourceId, 'Name' => $connection->resourceId],
            "Message" => "has joined channel",
            "Time" => date("Y-m-d H:i:s", time()),
            "Online" => count($topic)
        ];
        $topic->broadcast($response);
    }

    /**
     * @param ConnectionInterface $connection
     * @param Topic $topic
     * @param WampRequest $request
     * @return voids
     */
    public function onUnSubscribe(ConnectionInterface $connection, Topic $topic, WampRequest $request)
    {
        $response = [
            "User" => ['Id' => $connection->resourceId, 'Name' => $connection->resourceId],
            "Message" => "has left channel",
            "Time" => date("Y-m-d H:i:s", time()),
            "Online" => count($topic) - 1
        ];
        $topic->broadcast($response);
    }

    /**
     * @param ConnectionInterface $connection
     * @param Topic $topic
     * @param WampRequest $request
     * @param $event
     * @param array $exclude
     * @param array $eligible
     */
    public function onPublish(ConnectionInterface $connection, Topic $topic, WampRequest $request, $event, array $exclude, array $eligible)
    {
        $response = [
            "User" => ['Id' => $connection->resourceId, 'Name' => $connection->resourceId],
            "Message" => $event,
            "Time" => date("Y-m-d H:i:s", time()),
            "Online" => count($topic)
        ];
        $topic->broadcast($response);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme.topic';
    }
}