<?php
namespace AppBundle\Service;

use AppBundle\Entity\Message;
use Doctrine\ORM\EntityManager;
use Gos\Bundle\WebSocketBundle\Client\ClientManipulatorInterface;
use Gos\Bundle\WebSocketBundle\Topic\TopicInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Wamp\Topic;
use Gos\Bundle\WebSocketBundle\Router\WampRequest;
use Symfony\Component\Validator\Constraints\DateTime;


class ChatTopic implements TopicInterface {

    /**
     * @var ClientManipulatorInterface
     */
    protected $clientManipulator;

    /**
     * @var EntityManager
     */
    protected $em;

    public function __construct(ClientManipulatorInterface $clientManipulator, EntityManager $entityManager) {
        $this->em = $entityManager;
        $this->clientManipulator = $clientManipulator;
    }

    private function getUser(ConnectionInterface $connection) {
        $user = $this->clientManipulator->getClient($connection);
        if($user instanceof \AppBundle\Entity\User) {
            return ['Id' => $user->getId(), 'Name' => $user->getUsername()];
        }
        return ['Id' => $connection->resourceId, 'Name' => $user];
    }

    /**
     * @param ConnectionInterface $connection
     * @param Topic $topic
     * @param WampRequest $request
     * @return void
     */
    public function onSubscribe(ConnectionInterface $connection, Topic $topic, WampRequest $request)
    {
        $response = [
            "User" => $this->getUser($connection),
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
            "User" => $this->getUser($connection),
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
        $user = $this->clientManipulator->getClient($connection);
        $message = new Message();
        $message->setMessage($event);
        $message->setUserId(is_string($user) ? NULL : $user->getId());
        $message->setUpdated(time());
        $this->em->persist($message);
        $this->em->flush();

        $response = [
            "User" => $this->getUser($connection),
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