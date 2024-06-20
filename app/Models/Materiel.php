<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $etat_id
 * @property string $designation
 * @property integer $annee_de_service
 * @property string $date_max_acquisition
 * @property string $fabriquant
 * @property string $model
 * @property string $processeur
 * @property string $memoire_ram
 * @property string $capacite_disque_dur
 * @property string $type_disque_dur
 * @property integer $duree_de_Vie
 * @property integer $age_desuet
 * @property integer $temps_max_acquisition
 * @property string $created_at
 * @property string $updated_at
 * @property Attributionmateriel[] $attributionmateriels
 * @property Changementetat[] $changementetats
 * @property User $user
 * @property Etat $etat
 */
class Materiel extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'etat_id', 'designation', 'annee_de_service', 'date_max_acquisition', 'fabriquant', 'model', 'processeur', 'memoire_ram', 'capacite_disque_dur', 'type_disque_dur', 'duree_de_Vie', 'age_desuet', 'temps_max_acquisition', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attributionmateriels()
    {
        return $this->hasMany('App\Models\Attributionmateriel');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function changementetats()
    {
        return $this->hasMany('App\Models\Changementetat');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etat()
    {
        return $this->belongsTo('App\Models\Etat');
    }
}
