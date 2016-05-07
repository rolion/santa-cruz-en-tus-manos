<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for collection "inmuheble".
 *
 * @property \MongoId|string $_id
 * @property mixed $nombre
 * @property mixed $latitud
 * @property mixed $longitud
 * @property mixed $servicio
 * @property mixed $tipo
 * @property mixed $distrito
 * @property mixed $uv
 */
class Inmuheble extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['datahub', 'inmuheble'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'nombre',
            'latitud',
            'longitud',
            'servicio',
            'tipo',
            'distrito',
            'uv',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'latitud', 'longitud', 'servicio', 'tipo', 'distrito', 'uv'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'nombre' => 'Nombre',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'servicio' => 'Servicio',
            'tipo' => 'Tipo',
            'distrito' => 'Distrito',
            'uv' => 'Uv',
        ];
    }
}
