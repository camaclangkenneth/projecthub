<?php

namespace App\Modules\Project\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Task\Models\Task;
use App\User;
use App\Modules\Client\Models\Client;

class Project extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    protected $hidden = [
        'manager_id',
        'client_id',
    ];

    protected $table = 'projects';

    public function tasks(){
        return $this->hasMany(Task::class);
    }
    public function manager(){
        return $this->belongsTo(User::class, 'manager_id', 'id')
        ->select(
            array(
                'id',
                'fname',
                'mname',
                'lname',
                'position',
                'description'
            )
        );
    }
    public function client(){
        return $this->belongsTo(Client::class)
        ->select(
            array(
                'id',
                'fname',
                'mname',
                'lname',
                'position',
                'description'
            )
        );
    }
}
