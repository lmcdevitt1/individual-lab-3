<?php

namespace Tests\Models;

use App\Models\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    private Item $item;

    public function setUp(): void
    {
        $this->item = new Item([
            'name' => 'Laptop',
            'manufacturer' => 'Dell',
            'make' => 'Inspiron',
            'model' => '15 3000',
            'price' => '100.00',
            'price_range' => '100.00 - 110.00/mo',
        ]);
    }

    public function testToString()
    {

    }
}
