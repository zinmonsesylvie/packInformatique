<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer $id
 * @property integer $service_id
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $fonction
 * @property string $created_at
 * @property string $updated_at
 * @property Service $service
 * @property Attributionmateriel[] $attributionmateriels
 */
class Agent extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['service_id', 'nom', 'prenom', 'email', 'fonction', 'created_at', 'updated_at'];

    /**
     * @return BelongsTo
     */
    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }

    /**
     * @return HasMany
     */
    public function attributionmateriels()
    {
        return $this->hasMany('App\Models\Attributionmateriel');
    }

    public function materiels()
    {
        return $this->hasMany('App\Models\Materiel');
    }
}
