<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Subject
 *
 * @author juantorres
 */
class Subject extends AppModel{
    public $belongsTo=array(
       'Student'=>array(
       'className'=>'Student',
       'foreignKey'=>'student_id'
           )
    );
    public $validate=array(
        'matiere'=>array('rule'=>'notBlank'),
        'note'=>array('rule'=>'notBlank')
    );
}
