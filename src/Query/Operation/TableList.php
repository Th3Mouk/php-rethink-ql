<?php
declare(strict_types = 1);

namespace TBolier\RethinkQL\Query\Operation;

use TBolier\RethinkQL\Message\MessageInterface;
use TBolier\RethinkQL\Query\AbstractQuery;
use TBolier\RethinkQL\RethinkInterface;
use TBolier\RethinkQL\Types\Term\TermType;

class TableList extends AbstractQuery
{
    /**
     * @param RethinkInterface $rethink
     */
    public function __construct(RethinkInterface $rethink)
    {
        parent::__construct($rethink);

        $this->rethink = $rethink;
    }

    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        return [
            TermType::TABLE_LIST,
        ];
    }
}
