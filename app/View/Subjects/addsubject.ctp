<!-- Fichier: /app/View/Students/add.ctp-->
<h1>Ajouter un étudiant</h1>
<?php 

echo print_r($ids);

echo '<br>';


//echange des clés par valeur pour utiliser dans le  dropdown de formulaire
$a=array_keys($ids);
$b= array_values($ids);
$c= array_combine($b, $b);

echo 'Tableau de VALUES'.print_r($c);

//$flipid= array_flip($ids);

//creation du Form de Matiere
echo $this->Form->create('Subject');
echo $this->Form->input('matiere');
echo $this->Form->input('note',array('options'=>$notes));
echo $this->Form->input('student_id',array('options'=>$c));


echo $this->Form->end('Enregistrer matiere');
?>

