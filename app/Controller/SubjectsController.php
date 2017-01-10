<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SubjectsController
 *
 * @author juantorres
 */
class SubjectsController extends AppController{
    public $helpers=array('Html','Form');
    //Action1 addition de matiere
    public function addsubject(){
        $this->loadModel('Student');
        //envoie de toutes les tableaux 
        $valeurs=$this->Student->find('all');
        $this->set('valeurs',$valeurs);
        //envoie des Ids des étudiantes  réels 
        for($i=0;$i<count($valeurs);$i++){
            $ids[$i]=$valeurs[$i]['Student']['id'];
        }
        $this->set('ids',$ids);
        //notes 0-20
        for($j=1;$j<21;$j++){
        $notes[$j]=$j;
        }
        $this->set('notes',$notes);
        if($this->request->is('post')){//méthode CakeRequest::is()
            $this->Subject->create('Subject');
            if($this->Subject->save($this->request->data)){
                $this->Flash->success(_('Matiere enregistré'));
                return $this->redirect(array('controller'=>'students','action'=>'index'));
                }
                $this->Flash->error(_('Enregistrement d\'matiére échoué'));
            }
        
        }
}
