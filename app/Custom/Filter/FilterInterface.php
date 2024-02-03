<?php

namespace App\Custom\Filter;

use Illuminate\Database\Eloquent\Builder;

interface FilterInterface
{
	public function apply(Builder $builder);
}