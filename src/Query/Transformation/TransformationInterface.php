<?php
declare(strict_types = 1);

namespace TBolier\RethinkQL\Query\Transformation;

use TBolier\RethinkQL\Query\QueryInterface;
use TBolier\RethinkQL\Response\ResponseInterface;

interface TransformationInterface
{
    /**
     * @return QueryInterface
     */
    public function isEmpty(): QueryInterface;

    /**
     * @param int $n
     * @return TransformationCompoundInterface
     */
    public function limit($n): TransformationCompoundInterface;

    /**
     * @param int $n
     * @return TransformationCompoundInterface
     */
    public function skip($n): TransformationCompoundInterface;

    /**
     * @param mixed|QueryInterface $key
     * @return TransformationCompoundInterface
     */
    public function orderBy($key): TransformationCompoundInterface;

    /**
     * @return Iterable|ResponseInterface
     */
    public function run();
}
