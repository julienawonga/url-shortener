<?php

namespace App\Models;

use \AshAllenDesign\ShortURL\Models\ShortURL;
class Shortener extends ShortURL
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_url')->withTimestamps();
    }

}
