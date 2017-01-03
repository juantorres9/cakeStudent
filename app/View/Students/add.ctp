<!-- Fichier: /app/View/Students/add.ctp-->
<h1>Ajouter un étudiant</h1>
<?php 
echo $this->Form->create('Student');
echo $this->Form->input('nom');
echo $this->Form->input('prenom');
echo $this->Form->input('birth');

echo $this->Form->end('Enregistrer étudiant');
?>
