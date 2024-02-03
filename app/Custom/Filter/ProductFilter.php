<?php

namespace App\Custom\Filter;

use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter implements FilterInterface
{
	const CATEGORIES = 'categories';
	const PRICE = 'price';
	const COLORS = 'colors';
	const TAGS = 'tags';

	protected function getCallbacks(): array
	{
		return [
			self::CATEGORIES => [$this, 'categories'],
			self::PRICE => [$this, 'price'],
			self::COLORS => [$this, 'colors'],
			self::TAGS => [$this, 'tags'],
		];
	}

	protected function categories(Builder $builder, $value)
	{
		$builder->whereIn('category_id', $value);
	}

	protected function price(Builder $builder, $value)
	{
		$builder->whereBetween('price', $value);
	}

	protected function colors(Builder $builder, $value)
	{
		$builder->whereHas('colors', function ($b) use ($value) {
			$b->whereIn('color_id', $value);
		});
	}

	protected function tags(Builder $builder, $value)
	{
		$builder->whereHas('tags', function ($b) use ($value)
		{
			$b->whereIn('tag_id', $value);
		});
	}
}