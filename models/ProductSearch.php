<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductSearch represents the model behind the search form of `app\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'price', 'weight', 'stock', 'isDelete'], 'integer'],
            [['name_product', 'reference', 'category', 'createAt', 'updateAt', 'deleteAt'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Product::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'price' => $this->price,
            'weight' => $this->weight,
            'stock' => $this->stock,
            'isDelete' => $this->isDelete,
            'createAt' => $this->createAt,
            'updateAt' => $this->updateAt,
            'deleteAt' => $this->deleteAt,
        ]);

        $query->andFilterWhere(['like', 'name_product', $this->name_product])
            ->andFilterWhere(['like', 'reference', $this->reference])
            ->andFilterWhere(['like', 'category', $this->category]);

        return $dataProvider;
    }
}
