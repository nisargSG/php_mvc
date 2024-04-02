<html>


<body>

<ul>

<?php 
    foreach($userArray as $user){
        ?>

    <li>id = <?= $user->getId()  ?> name = <?= $user->getName()  ?> email = <?= $user->getEmail()  ?> password = <?= $user->getPassWord() ?>  is_admin = <?= $user->getIsAdmin() ?></li>


   <?php 
   }

?>


</ul>


</body>

</html>