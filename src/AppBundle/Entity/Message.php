<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="message")
 */
class Message {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     */
    protected $message;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $updated;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Message
     */
    public function setMessage($message) {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserId() {
        return $this->user_id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Message
     */
    public function setUserId($userId) {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Set updated
     *
     * @param integer $updated
     *
     * @return Message
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return integer
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
