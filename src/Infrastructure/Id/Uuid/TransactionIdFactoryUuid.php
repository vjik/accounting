<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Infrastructure\Id\Uuid;

use Bookkeeper\Accounting\Domain\Operation\OperationIdFactoryInterface;
use Bookkeeper\Accounting\Domain\Operation\OperationIdInterface;

final class TransactionIdFactoryUuid implements OperationIdFactoryInterface
{
    private UuidFactory $uuidFactory;

    public function __construct(UuidFactory $uuidFactory)
    {
        $this->uuidFactory = $uuidFactory;
    }

    public function create(?string $value = null): OperationIdInterface
    {
        return new TransactionIdUuid($this->uuidFactory->create($value));
    }
}
