<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    protected $fillable = ['name', 'description', 'creator_id'];

    public function nameLink()
    {
        return link_to_route('terms.show', $this->name, [$this], [
            'title' => trans(
                'app.show_detail_title',
                ['name' => $this->name, 'type' => trans('terms.terms')]
            ),
        ]);
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }
}
