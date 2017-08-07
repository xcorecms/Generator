<?php

namespace Xcore\Generator\Tests\Data\AssertMapping\Luhn;

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

