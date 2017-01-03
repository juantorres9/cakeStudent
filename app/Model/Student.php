<?php

class Student extends AppModel {
    public $validate=array(
        'nom'=>array('rule'=>'notBlank'),
        'prenom'=>array('rule'=>'notBlank')
    );
        
}