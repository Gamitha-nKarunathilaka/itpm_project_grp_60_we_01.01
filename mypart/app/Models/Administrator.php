<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'administrators';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ProjectID', 'Problem', 'Solution', 'Risk'];

    
}
