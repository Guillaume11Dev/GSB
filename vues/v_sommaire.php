﻿    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				  Visiteur :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
            <li>  
               Trotinette :<br>
              


               <?="&nbsp;Modèle:&nbsp;&nbsp;".$_SESSION['trotinette'][0]?> <br>
               <?="&nbsp;Vitesse: ".$_SESSION['trotinette'][1]." km/h"?> <br>
               <?="&nbsp;Capacite: ".$_SESSION['trotinette'][2]."W"?> <br>
            </li>

           <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
           
           <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
         
        
    </div>
    