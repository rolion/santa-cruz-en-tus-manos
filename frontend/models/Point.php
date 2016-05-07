<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "point".
 *
 * @property double $id
 * @property double $latitud
 * @property double $longitud
 * @property string $manzana
 * @property string $uv
 * @property string $barrio
 * @property string $direccion
 * @property string $telefono
 * @property string $numeropuerta
 * @property string $nombre
 * @property string $actividadeconomica
 * @property string $tipo
 */
class Point extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'point';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['latitud', 'longitud'], 'number'],
            [['manzana', 'uv', 'barrio', 'direccion', 'telefono', 'numeropuerta', 'nombre', 'actividadeconomica', 'tipo'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'manzana' => 'Manzana',
            'uv' => 'Uv',
            'barrio' => 'Barrio',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'numeropuerta' => 'Numeropuerta',
            'nombre' => 'Nombre',
            'actividadeconomica' => 'Actividadeconomica',
            'tipo' => 'Tipo',
        ];
    }
}
