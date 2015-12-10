

<?php namespace Bluschool\Teacher\Model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teacher';

    protected $fillable = [
    	'teacherID',
        'teacherNo',
        'joiningDate',
        'teacherNameFirst',
        'techerNameMiddle',
        'teacherNameLast',
        'gender',
        'teacherDateOfBirth',
        'department',
        'position',
        'category',
        'grade',
        'jobTitle',
        'qualification',
        'experienceYear',
        'experienceMonth',
        'experienceDetails',
        'maritalStatus',
        'childrenCount',
        'teacherMother',
        'teacherSpouse',
        'bloodGroup',
        'nationality',
        'homeAddressLine1',
        'homeAddressLine2',
        'homeCity',
        'homeState',
        'homeCountry',
        'homePin',
        'officeAddressLine1',
        'officeAddressLine2',
        'officeCity',
        'officeState',
        'officeCountry',
        'officePin',
        'officePhone',
        'mobilePhone',
        'homePhone',
        'email',
        'fax',
		'photo'
    ];
?>

// relation with "leaves", "leave-type", "position", "cateogory", "leaves", "grades"