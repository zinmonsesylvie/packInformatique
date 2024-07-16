<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $libellé
 * @property string $created_at
 * @property string $updated_at
 * @property Changementetat[] $changementetats
 * @property Materiel[] $materiels
 */
class Etat extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libellé', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function changementetats()
    {
        return $this->hasMany('App\Models\Changementetat');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
}
