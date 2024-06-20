<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $raison_social
 * @property string $contacte
 * @property string $created_at
 * @property string $updated_at
 */
class Intervenant extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['raison_social', 'intervenant', 'created_at', 'updated_at'];
}
