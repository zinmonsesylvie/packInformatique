<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $objet_de_maintenance
 * @property string $type_de_maintenance
 * @property string $date_de_maintenance
 * @property boolean $presence_materiel
 * @property string $created_at
 * @property string $updated_at
 */
class Maintenance extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['objet_de_maintenance', 'type_de_maintenance', 'date_de_maintenance', 'presence_materiel', 'created_at', 'updated_at'];
}
