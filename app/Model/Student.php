<?php

class Student extends AppModel {
    //Addition de foreign key
    public $hasMany=array(
        'Subject'=>array(
            'className'=>'Subject',
            'foreignKey'=>'student_id',
            'limit'=>'10'
           // 'conditions'=>array('Student.id'=>'Subject.student_id'),
        )
        );
    public $validate=array(
        'nom'=>array('rule'=>'notBlank'),
        'prenom'=>array('rule'=>'notBlank')
    );
        
}