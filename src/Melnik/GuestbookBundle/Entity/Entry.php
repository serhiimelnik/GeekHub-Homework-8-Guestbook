<?php

namespace Melnik\GuestbookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Melnik\GuestbookBundle\Entity\Entry
 *
 * @ORM\Table(name="guestbook")
 * @ORM\Entity
 */
class Entry
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\Regex(
     *      pattern="/^[a-zA-Z]+$/",
     *      message="You can use letters only"
     * )
     */
    protected $name;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string")
     *
     * @Assert\NotBlank()
     * @Assert\Email(message = "Your E-mail incorrect")
     */
    protected  $email;

    /**
     * @var string $text
     *
     * @ORM\Column(name="text", type="text")
     *
     * @Assert\NotBlank()
     * @Assert\Length(min="100")
     */
    private $text;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Entry
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Entry
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Entry
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
