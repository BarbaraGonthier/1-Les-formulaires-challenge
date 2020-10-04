<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Merci</title>
    </head>
    <body>
    <h1>Merci!</h1>
    <div>
        <p> Merci
            <?php echo $_POST['user_firstname']. ' '.$_POST['user_lastname'] ; ?>
            de nous avoir contacté à propos de "
            <?php echo $_POST['user_topic'] ; ?>
            ".
        </p>
        <p>
            Un de nos conseiller vous contactera soit à l'adresse
            <?php echo $_POST['user_email']; ?>
            ou par téléphone
            <?php echo $_POST['user_phone']; ?>
            dans les plus brefs délais pour traiter votre demande :
            <?php echo $_POST['user_message']; ?>
        </p>
    </div>
    </body>
</html>
