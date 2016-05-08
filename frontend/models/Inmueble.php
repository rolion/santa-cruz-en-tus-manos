<?php

namespace frontend\models;

use Yii;
use yii\mongodb\Query;
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
class Inmueble extends \yii\mongodb\ActiveRecord
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
    public function buscarInmueble( $servicio, $tipo){
        $query = new Query;
        if(empty($servicio) && empty($tipo)){
                return array();
        }
        $query->from('inmuheble');
        if(!empty($servicio)){
            foreach ($servicio as $key => $value) {
            $query->orWhere(["servicio"=>$value]);
            }    
        }
        if(!empty($tipo)){
            foreach ($tipo as $key => $value) {
                $query->orWhere(["tipo"=>$value]);
            }    
        }
        $rows = $query->all();
        return $rows;     
    }
}
