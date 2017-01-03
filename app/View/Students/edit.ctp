<!-- Fichier: /app/View/Etudiants/edit.ctp-->
<h1>Editer les étudiants</h1>
<?php
echo $this->Form->create('Student');
echo $this->Form->input('nom');
echo $this->Form->input('prenom');
echo $this->Form->input('birth');
echo $this->Form->end('Save Etudiant');?>