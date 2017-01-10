<h1>Ecole 2016</h1>
<?php echo $this->Html->link('Ajouter un étudiant',array('controller'=>'students','action'=>'add')); ?>
<br>
<?php echo $this->Html->link('Ajouter une matiere',array('controller'=>'subjects','action'=>'addsubject')); ?>
<table>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>dateNaissance</th>
        <th>action1</th>
        <th>action2</th>
        
        <th>matieres</th>
    
    </tr>
    
    <?php foreach($students as $student): ?>
    <tr>
        <td><?php echo  $student['Student']['id'];?></td>
        <td><?php echo $student['Student']['nom'];?></td>
        <td><?php echo $student['Student']['prenom'];?></td>
        <td><?php echo $student['Student']['birth'];?></td>
        <td><?php echo $this->Html->link('Editer',array('action'=>'edit',$student['Student']['id']));?></td>
        <td><?php echo $this->Form->postlink('Suprimer',array('action'=>'delete',$student['Student']['id']));?></td>
      
        
        <td><?php echo $this->Html->link('showMatieres',array('action'=>'show_matiere',$student['Student']['id']));?></td>
    </tr>
    <?php endforeach; ?>
</table>
    

