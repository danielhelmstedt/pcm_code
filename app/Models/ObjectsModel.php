<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjectsModel extends Model
{
    use HasFactory;
		protected $table = 'object';
    protected $casts = [
      'parent_partition_address' => 'array',
      'parent_enclosure_address' => 'array',
    ];
}
