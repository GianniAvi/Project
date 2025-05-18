<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 *
 * @property $id_course
 * @property $name
 * @property $description
 * @property $recommendedlevel
 * @property $durationdays
 * @property $price
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Course extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $primaryKey = 'id_course';

    protected $fillable = ['id_course', 'name', 'description', 'recommendedlevel', 'durationdays', 'price'];


}
