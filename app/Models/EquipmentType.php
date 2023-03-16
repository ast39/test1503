<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class EquipmentType extends Model {

    use HasFactory, Filterable, SoftDeletes;


    protected $table         = 'equipment_types';

    protected $primaryKey    = 'type_id';

    protected $keyType       = 'int';


    public    $incrementing  = true;

    public    $timestamps    = true;


    # Все оборудование этого типа
    public function equipments(): HasMany
    {
        return $this->hasMany(Equipment::class, 'type_id', 'type_id');
    }


    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
        'deleted_at' => 'timestamp',
    ];

    protected $fillable = [
        'type_id', 'name', 'mask', 'created_at', 'updated_at',
    ];

    protected $hidden = [
        'deleted_at'
    ];

}
