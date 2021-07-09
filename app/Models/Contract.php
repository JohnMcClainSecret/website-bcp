<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Contract extends Model
{
    use HasFactory;

    protected $table = 'contract';

    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class, 'id', 'id_employee');
    }
}
