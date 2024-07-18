<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $libelle
 * @property string $sigle
 * @property string $adresse
 * @property string $created_at
 * @property string $updated_at
 */
class Structure extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libelle', 'sigle', 'adresse', 'created_at', 'updated_at'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
