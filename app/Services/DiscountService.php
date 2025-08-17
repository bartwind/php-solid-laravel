<?php

namespace App\Services;


use App\Models\Product;
use App\Patterns\Discounts\Discountable;

/**
 * Class DiscountService
 *
 * @package App\Services
 */
class DiscountService
{

    /** @var */
    protected $product;
    protected Discountable $discountable;

    public function __construct(Discountable $discountable)
    {
        $this->discountable = $discountable;
    }

    public static function make(Discountable $discountable)
    {
        return new static($discountable);
    }

    /**
     * @param $product
     * @return $this
     */
    public function with($product)
    {
        $this->product = $product;

        return $this;
    }

    public function apply()
    {
        return $this->discountable->apply($this->product);
    }

    /**
     * @return string
     */
    public function applySpecialDiscount()
    {
        $discount = 0.20 * $this->product->price;
        return number_format($this->product->price - $discount,2);
    }
}
