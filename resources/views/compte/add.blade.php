
@include('welcome')
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="stylesheet" href="">
    
    <title>Gestion des Comptes</title>

    </head>

    <body>
    
        @if(isset($confirmation)) 
                 @if($confirmation ==1)
                   <div class="alert alert-success">Client ajouté</div>
                   @else
                     <div class="alert alert-danger">Client non ajouté</div>
                 @endif   
               @endif
   
    <form action="{{route('persistCompte')}}" method="POST" id="myformCompte" >
        @csrf
                <fieldset class="container"><br/>
                    <legend id="open">Gestion Compte</legend>


                    <label for="Type_Compte">Type_Compte*</label>
                        <select name="typeCompte" id="compte">
                            <option value="Selectionnez" id="">Selectionnez*</option>
                            <option value="Epargne Simple et Xewel" id="Epargne Simple et Xewel">Epargne Simple et Xewel</option>
                            <option value="Courant" id="Courant">Courant</option>
                            <option value="bloque" id="bloque">bloqué</option>
                        </select><br/>

                    <label for="Numero_Compte">Numero_Compte*</label>
                    <input id="Numero_Compte" name="NumeroCompte" type="number"/><br/>

                    <label for="Cle_Rib">Cle_Rib*</label>
                    <input id="Cle_Rib" name="CleRib" type="number"/><br><br/>

                    <label for="Etat_Compte">Etat_Compte*</label>
                        <select name="EtatCompte" id="Etat_Compte">
                            <option value="Selectionnez">Selectionnez*</option>
                            <option value="Actif" id="Actif">Actif</option>
                            <option value="Ferme" id="Ferme">Ferme</option>
                            <option value="bloque" id="bloque">bloqué</option>
                        </select><br/>

                    <label for="Depot initial">Depot initial*</label>
                    <input id="Depot_initial" name="DepotInitial" type="text"/><br/>

                   

                    <label for="Date_ouverture">Date_ouverture*</label>
                    <input id="Date_ouverture" name="DateOuverture" type="date"/><br/>

                </fieldset>
       
                    <div class="button"><br />
                        <input type="submit" value="ENVOYER" name="envoyer" onclick="return validate()"/><br/>
                        <input type="reset" value="ANNULER"/>

                    </div><br/>
           </form>


               <script src="public/js/mainC.js"></script>

        </body>

</html>