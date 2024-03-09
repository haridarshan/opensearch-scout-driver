<?php declare(strict_types=1);

namespace OpenSearch\ScoutDriver\Factories;

use OpenSearch\Adapter\Search\SearchParameters;
use Laravel\Scout\Builder;

interface SearchParametersFactoryInterface
{
    public function makeFromBuilder(Builder $builder, array $options = []): SearchParameters;
}
