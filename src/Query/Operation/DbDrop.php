<?php
declare(strict_types = 1);

namespace TBolier\RethinkQL\Query\Operation;

use TBolier\RethinkQL\Message\MessageInterface;
use TBolier\RethinkQL\Query\AbstractQuery;
use TBolier\RethinkQL\RethinkInterface;
use TBolier\RethinkQL\Types\Term\TermType;

class DbDrop extends AbstractQuery
{
    /**
     * @var string
     */
    private $name;

    /**
     * @param RethinkInterface $rethink
     * @param string $name
     */
    public function __construct(RethinkInterface $rethink, string $name)
    {
        parent::__construct($rethink);

        $this->rethink = $rethink;
        
        $this->name = $name;
    }

    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        return [
            TermType::DB_DROP,
            [
                [
                    TermType::DATUM,
                    $this->name,
                ],
            ],
        ];
    }
}
