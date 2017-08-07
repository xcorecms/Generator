<?php

namespace Xcore\Generator\Tests\Data\AssertMapping\Iban;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Transaction
{
    use TransactionTrait;

}

