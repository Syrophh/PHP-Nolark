Adresse Mail : <?php echo varchar ($_POST['mail']);?>

<?php
function setNewsletter ($mail){
    $sqlQuery = 'insert into newsletter (mail) values ("jose.gil@ac-nice.com")';
    
}
