<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InfoUser;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TrustsInfo extends Model
{
    use HasFactory;
    protected $table = 'trustsinformation';

    /**
     * Get the infoUser associated with the TrustsInfo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function infoUser(): BelongsTo
    {
        return $this->belongsTo(InfoUser::class,'userInfo_id');
    }

    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class,'id','employee_id');
    }
}
