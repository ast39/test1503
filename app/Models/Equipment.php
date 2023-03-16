<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;


class Equipment extends Model {

    use HasFactory, Filterable, SoftDeletes;


    protected $table         = 'equipments';

    protected $primaryKey    = 'eq_id';

    protected $keyType       = 'int';


    public    $incrementing  = true;

    public    $timestamps    = true;


    # Тип оборудования
    public function equipment_type(): HasOne
    {
        return $this->hasOne(EquipmentType::class, 'type_id', 'type_id');
    }


    protected $with = [
        'equipment_type',
    ];

    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
        'deleted_at' => 'timestamp',
    ];

    protected $fillable = [
        'eq_id', 'type_id', 'serial_number', 'description', 'created_at', 'updated_at',
    ];

    protected $hidden = [
        'deleted_at'
    ];

}
