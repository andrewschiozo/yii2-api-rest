<?php

namespace common\modules\api\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

class Produto extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%produtos}}';
    }

    /**
     * Adiciona o TimestampBehavior para gerenciar created_at e updated_at
     * automaticamente.
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'preco', 'estoque'], 'required'],
            [['descricao'], 'string'],
            [['preco'], 'number'],
            [['estoque', 'created_at', 'updated_at'], 'integer'],
            [['nome'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'descricao' => 'Descrição',
            'preco' => 'Preço',
            'estoque' => 'Estoque',
            'created_at' => 'Criado Em',
            'updated_at' => 'Atualizado Em',
        ];
    }
}