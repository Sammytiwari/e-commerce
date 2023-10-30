<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registation extends Model
{
    use HasFactory;
    protected $table ='registation';
        protected $fillable = [
            'name', 'email', 'password',
        ];
    
        // Add any additional methods or relationships here
    
    
}
