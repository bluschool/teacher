

<?php

class Position extends Model
{
    protected $table = 'position';

    protected $fillable = [
        'id',
        'teacher_id',
        'teacher_leave_type_id',
        'leave_count',
        'leave_taken',
        'reset_date',
        'created_at',
        'updated_at'
    ];
?>