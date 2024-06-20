<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $materiel_id
 * @property integer $agent_id
 * @property string $date_attribution
 * @property string $created_at
 * @property string $updated_at
 * @property Materiel $materiel
 * @property Agent $agent
 */
class Attributionmateriel extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['materiel_id', 'agent_id', 'date_attribution', 'created_at', 'updated_at'];

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
    public function agent()
    {
        return $this->belongsTo('App\Models\Agent');
    }
}
