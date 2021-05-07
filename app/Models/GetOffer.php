<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class GetOffer extends Model
{
    use HasFactory;

    protected $table = 'getoffer';

    /**
     * Get the user associated with the GetOffer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class, 'id', 'id_employee');
    }
}
