<?php

Class StudentsController extends AppController {
    public $helpers= array('Html','Form');
//Action1
    public function index(){
        $this->set('students',$this->Student->find('all'));
        //$this->set('subjects',$this->Student->Subject->find());
    }
 //Action2 :ajouter un étudiant
    public function add(){
            if($this->request->is('post')){//méthode CakeRequest::is()
                $this->Student->create();
                if($this->Student->save($this->request->data)){
                    $this->Flash->success(_('Etudiant enregistré'));
                    return $this->redirect(array('action'=>'index'));
                }
                $this->Flash->error(_('Enregistrement d\'étudiant échoué'));
            }
    }
    //Action3: édition des données de  l'étudiante
    public function edit($id=null){
        //verifier si l'id existe
        if(!$id){
            throw new NotFoundException(_('Etudiant Invalide'));
        }else{
        $student=$this->Student->findById($id);
        }
        //verifier si l'etudiant existe 
        if(!$student){
            throw new  NotFoundException(_('Etudiant Invalide'));
        }
        if($this->request->is(array('student','put'))){
            $this->Student->id=$id;
            //stockage d'information de la request dans la base de données 
            if($this->Student->save($this->request->data)){
                $this->Flash->success(_('Votre etudiante a été mis à jour'));
                //redirection
                return $this->redirect(array('action'=>'index'));
            }else{
                $this->Flash->error(_('Pas possible de modifier l\'étudiante'));
            }
        }else{
            if(!$this->request->data){
            $this->request->data=$student;}
        }
    }
    
    //Action4: supression d'étudiantes
    public function delete($id){
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }elseif($this->Student->delete($id)){
            
            $this->Flash->success(__('L\' étudiant avec l\'id=%s à été suprimé', h($id)));
        }else{
            $this->Flash->error(__('L\'étudiant avec l\'id=%s n \'a pas été suprimé',h($id)));
        }
        //instruction de redirection
        return $this->redirect(array('action'=> 'index' ));
    }
    
    
    //Action5 :affichage de matieres
        //Action4: supression d'étudiantes
    public function show_matiere($id){
        if (!$id) {
            throw new NotFoundException(__('etudiant invalid ID'));
        }
        $student = $this->Student->findById($id);
        if (!$student) {
         throw new NotFoundException(__('Pas de matieres'));
        }
        $this->set('student', $student);
        //affichage  de matieres
       $subject=$this->Student->findById($id);
       // $subjects=$this->Student->Subject->find('list',array('conditions'=>array('Subject.student_id'=>$id)));
        if(!$subject){
            throw new NotFoundException(__('Matiere pas trouvable'));
        }else{
            $this->set('subject',$subject);
        }
    }
}


    