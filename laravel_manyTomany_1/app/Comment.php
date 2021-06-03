<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// dato che i model sono tutti nella stessa cartella
// alla stessa altezza non abbiamo bisogno di importarli.

// qualora non si trovassero nella stessa cartella alla 
// stessa altezza sarebbe necessario importarli.

class Comment extends Model
{
    protected $fillable = [
        'text', 'post_id',
    ];

    public function post(){

        return $this -> belongsTo(Post::class);
    }
}
