<?php

declare(strict_types=1);

namespace Shopsys\LuigisBoxBundle\Model\Batch;

class LuigisBoxBatchLoadData
{
    /**
     * @param string $query
     * @param string $type
     * @param string $endpoint
     * @param int $page
     * @param int $limit
     * @param array $filter
     * @param string|null $orderingMode
     */
    public function __construct(
        protected readonly string $query,
        protected readonly string $type,
        protected readonly string $endpoint,
        protected readonly int $page,
        protected readonly int $limit,
        protected readonly array $filter,
        protected readonly ?string $orderingMode,
    ) {
    }

    /**
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @return array
     */
    public function getFilter(): array
    {
        return $this->filter;
    }

    /**
     * @return string|null
     */
    public function getOrderingMode(): ?string
    {
        return $this->orderingMode;
    }
}
