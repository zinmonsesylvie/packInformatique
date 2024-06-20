<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $libelle
 * @property string $licence
 * @property string $version
 * @property string $editeur
 * @property string $date_achat_licence
 * @property string $date_expiration
 * @property string $created_at
 * @property string $updated_at
 */
class Logiciel extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libelle', 'licence', 'version', 'editeur', 'date_achat_licence', 'date_expiration', 'created_at', 'updated_at'];
}
