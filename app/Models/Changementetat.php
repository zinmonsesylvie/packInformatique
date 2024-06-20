<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $etat_id
 * @property integer $materiel_id
 * @property string $date_changement
 * @property string $created_at
 * @property string $updated_at
 * @property Materiel $materiel
 * @property Etat $etat
 */
class Changementetat extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['etat_id', 'materiel_id', 'date_changement', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materiel()
    {
        return $this->belongsTo('App\Models\Materiel');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etat()
    {
        return $this->belongsTo('App\Models\Etat');
    }
}
