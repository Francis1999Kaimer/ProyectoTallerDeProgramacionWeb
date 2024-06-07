<?php
function renderLinks($page) {
    ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> 
<link rel="stylesheet" href="css/main.css">

<?php if ($page === 'contacto' or $page === 'login' or $page === 'signup' ) : ?>
    <link rel="stylesheet" href="css/form.css">
                
<?php endif; ?>



<link rel="stylesheet" href="css/table.css">
<?php
}
?>