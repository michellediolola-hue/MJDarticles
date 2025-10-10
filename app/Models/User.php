<?php

...

class User extends Model
{
    ...

    public function articles()
    {
        return $this->hasMany(Article::class, 'author_id');
    }

    ...
}