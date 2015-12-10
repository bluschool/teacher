
<?php

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'id',
        'name',
        'code',
        'status',
        'max_leave_count'
    ];
?>