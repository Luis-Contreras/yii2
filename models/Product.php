<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name_product
 * @property string $reference
 * @property int $price
 * @property int $weight
 * @property string $category
 * @property int $stock
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_product', 'reference', 'price', 'weight', 'category', 'stock'], 'required'],
            [['price', 'weight', 'stock'], 'integer'],
            [['name_product', 'reference', 'category'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_product' => 'Name Product',
            'reference' => 'Reference',
            'price' => 'Price',
            'weight' => 'Weight',
            'category' => 'Category',
            'stock' => 'Stock'
        ];
    }
}
