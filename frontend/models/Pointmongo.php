<?php

namespace frontend\models;

use Yii;
use yii\mongodb\Query;

/**
 * This is the model class for collection "pointmongo".
 *
 * @property \MongoId|string $_id
 * @property mixed $latitud
 * @property mixed $longitud
 * @property mixed $distrito
 * @property mixed $manzana
 * @property mixed $uv
 * @property mixed $barrio
 * @property mixed $direccion
 * @property mixed $telefono
 * @property mixed $numeropuerta
 * @property mixed $nombre
 * @property mixed $actividadeconomica
 */
class Pointmongo extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['datahub', 'pointmongo'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'latitud',
            'longitud',
            'distrito',
            'manzana',
            'uv',
            'barrio',
            'direccion',
            'telefono',
            'numeropuerta',
            'nombre',
            'actividadeconomica',
            'type'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['latitud', 'longitud', 'distrito', 'manzana', 'uv', 'barrio', 'direccion', 'telefono', 'numeropuerta', 'nombre', 'actividadeconomica','type'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'distrito' => 'Distrito',
            'manzana' => 'Manzana',
            'uv' => 'Uv',
            'barrio' => 'Barrio',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'numeropuerta' => 'Numeropuerta',
            'nombre' => 'Nombre',
            'actividadeconomica' => 'Actividadeconomica',
            'type'=>'Type'
        ];
    }
    public function getDistric($distrito){
        $query = new Query;
        // compose the query
        $query->from('pointmongo')->where(['distrito'=>$distrito])->limit(100);
        // execute the query
        $rows = $query->all();
        return json_decode($rows);
    }
}
