<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer $id
 * @property integer $structure_id
 * @property string $libelle
 * @property string $created_at
 * @property string $updated_at
 * @property Agent[] $agents
 * @property Structure $structure
 * @property User[] $users
 */
class Service extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['structure_id', 'libelle', 'created_at', 'updated_at'];

    /**
     * @return HasMany
     */
    public function agents()
    {
        return $this->hasMany('App\Models\Agent');
    }

    /**
     * @return BelongsTo
     */
    public function structure()
    {
        return $this->belongsTo('App\Models\Structure');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
