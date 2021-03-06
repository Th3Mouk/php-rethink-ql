<?php
declare(strict_types = 1);

namespace TBolier\RethinkQL\Query\Aggregation;

use TBolier\RethinkQL\Message\MessageInterface;
use TBolier\RethinkQL\Query\QueryInterface;
use TBolier\RethinkQL\Query\Transformation\AbstractTransformationCompound;
use TBolier\RethinkQL\RethinkInterface;
use TBolier\RethinkQL\Types\Term\TermType;

class Max extends AbstractTransformationCompound
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var QueryInterface
     */
    private $query;

    /**
     * @param RethinkInterface $rethink
     * @param QueryInterface $query
     * @param string $key
     */
    public function __construct(
        RethinkInterface $rethink,
        QueryInterface $query,
        string $key
    ) {
        parent::__construct($rethink);

        $this->query = $query;
        $this->key = $key;
        $this->rethink = $rethink;
    }

    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        return [
            TermType::MAX,
            [
                $this->query->toArray(),
                $this->key
            ],
        ];
    }
}
