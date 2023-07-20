<?php

namespace tests\unit\controllers;

use app\controllers\ProductController;
use app\models\Product;

class ProductsControllersTest extends \Codeception\Test\Unit
{
    

    public function test_create_action()
    {

        $model = new Product();

        $model->attributes = [
            'id' => 342,
            'name_product' => 'Tester',
            'reference' => 'Tester ref',
            'price' => 324,
            'weight' => 3,
            'category' => 'testme',
            'stock' => 32
        ];
        
        $this->assertTrue($model->save());
    }

    public function test_findOne_action()
    {

        $model = new Product();
        
        $newmodel = Product::find()->where(['id' => 2])->one(); 
        $this->assertTrue($newmodel->name_product === 'Carne');
    }

    public function test_delete_action()
    {

        $model = new Product();
        
        $newmodel = $model->delete(2); 
        $newmodel = Product::find()->where(['id' => 5])->one(); 
        $this->assertNull($newmodel);
    }

}

?>