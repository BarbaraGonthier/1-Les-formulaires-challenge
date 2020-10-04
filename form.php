<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
    </head>
    <body>
        <form  action="thanks.php"  method="post">
            <div>
                <label  for="prenom">Prénom :</label>
                <input  type="text"  id="prenom"  name="user_firstname">
            </div>
            <div>
                <label  for="nom">Nom :</label>
                <input  type="text"  id="nom"  name="user_lastname">
            </div>
            <div>
                <label  for="courriel">Courriel :</label>
                <input  type="email"  id="courriel"  name="user_email">
            </div>
            <div>
                <label  for="phone">Téléphone :</label>
                <input  type="tel"  id="phone"  name="user_phone">
            </div>
            <div>
                <label  for="sujet">Sujet :</label>
                <select id="sujet" name="user_topic">
                    <option value="delai">Délais de livraison</option>
                    <option value="reclamation">Réclamation au sujet d'une commande</option>
                    <option value="modification">Modification de ma commande</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
            <div>
                <label  for="message">Message :</label>
                <textarea  id="message"  name="user_message"></textarea>
            </div>
            <div  class="button">
                <button  type="submit">Envoyer votre message</button>
            </div>
        </form>
    </body>
</html>
