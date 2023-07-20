<?php

namespace tests\unit\models;

use app\models\Product;

class ProductsTest extends \Codeception\Test\Unit
{

    public function test_name_product_required_field()
    {

        $model = new Product([
            'name_product' => 'Test',
        ]);
        
        verify($model->name_product)->notEmpty();
    }

    public function test_name_product_max_field()
    {

        $model = new Product([
            'name_product' => 'Test max',
        ]);

        $this->assertLessThanOrEqual(10, strlen($model->name_product));
    }

    public function test_reference_required_field()
    {

        $model = new Product([
            'reference' => 'Test',
        ]);
        
        verify($model->reference)->notEmpty();
    }

    public function test_reference_max_field()
    {

        $model = new Product([
            'reference' => 'Test max',
        ]);

        $this->assertLessThanOrEqual(10, strlen($model->reference));
    }

    public function test_price_required_field()
    {

        $model = new Product([
            'price' => 345,
        ]);
        
        verify($model->price)->notEmpty();
    }

    public function test_price_min_value()
    {

        $model = new Product([
            'price' => 1,
        ]);

        $this->assertGreaterThan(0, $model->price);
    }

    public function test_weight_required_field()
    {

        $model = new Product([
            'weight' => 345,
        ]);
        
        verify($model->weight)->notEmpty();
    }

    public function test_weight_min_value()
    {

        $model = new Product([
            'weight' => 1,
        ]);

        $this->assertGreaterThan(0, $model->weight);
    }

    public function test_category_required_field()
    {

        $model = new Product([
            'category' => 'category',
        ]);
        
        verify($model->category)->notEmpty();
    }

    public function test_stock_required_field()
    {

        $model = new Product([
            'stock' => 342,
        ]);
        
        verify($model->stock)->notEmpty();
    }

    public function test_stock_min_value()
    {

        $model = new Product([
            'stock' => 1,
        ]);

        $this->assertGreaterThan(0, $model->stock);
    }



}

?>