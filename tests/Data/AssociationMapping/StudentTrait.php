<?php
declare(strict_types=1);

/**
 * WARNING
 * This file has been generated automatically by Xcore Generator.
 * Manual changes to this file will not be maintained.
 */

namespace Xcore\Generator\Tests\Data\AssociationMapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * StudentTrait
 *
 */
trait StudentTrait
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \Xcore\Generator\Tests\Data\AssociationMapping\Student
     *
     * @ORM\OneToOne(targetEntity="Xcore\Generator\Tests\Data\AssociationMapping\Student")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mentor_id", referencedColumnName="id", unique=true)
     * })
     */
    private $mentor;


    /**
     * Get id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set mentor
     *
     * @param \Xcore\Generator\Tests\Data\AssociationMapping\Student $mentor
     *
     * @return StudentTrait
     */
    public function setMentor(\Xcore\Generator\Tests\Data\AssociationMapping\Student  $mentor = null): StudentTrait
    {
        $this->mentor = $mentor;

        return $this;
    }

    /**
     * Get mentor
     *
     * @return \Xcore\Generator\Tests\Data\AssociationMapping\Student
     */
    public function getMentor(): \Xcore\Generator\Tests\Data\AssociationMapping\Student
    {
        return $this->mentor;
    }
}

