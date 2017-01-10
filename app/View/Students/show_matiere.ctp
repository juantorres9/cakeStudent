<!-- Fichier : /app/View/Students/show_matiere.ctp -->
<h1><?php echo $student['Student']['nom']; ?></h1>

<h2><?php echo $student['Student']['birth']; ?></h2>


<h3>Matieres inscrits:<?php echo count($subject['Subject']);?></h3>
 <p><?php echo print_r($subject) ?></p>
 <table>
    <tr>
        <th>Matieres</th>
        <th>Notes</th>
    </tr>
        <?php for ($i=0;$i<count($subject['Subject']);$i++){
        echo '<tr>'
            . '<td>'.$subject['Subject'][$i]['matiere'].'</td>'
            . '<td>'.$subject['Subject'][$i]['note'].'</td>'    
            . '</tr>';}
        ;?>     
 </table>