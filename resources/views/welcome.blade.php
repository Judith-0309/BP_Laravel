<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">      
        <title>Page d'accueil BP</title>
    </head>

        <body> 
            <nav>
                <img src="public/img/bplogo.png" alt="logo BP" class="img">
                    <h1>BANQUE DU PEUPLE</h1> 
                        <ul>
                            <li><a href="">Accueil</a></li> 
                            <li><a href="">Liste Client</a></li> 
                            <li><a href="{{route('addCompte')}}">Gestion Compte</a></li>    
                            <li>
                                <a href="">Ajout Client</a>   
                            <ul>
                                <li><a href="">Particulier</a></li>
                                <li><a href="{{route('addClient')}}">Entreprise</a></li>  
                            </ul>
                            </li>
                            <li><a href="">Virement</a></li>    
                        </ul>   
            </nav>
    

    
        </body>
</html>