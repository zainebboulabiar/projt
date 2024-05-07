<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COZY HOME</title>
    <link rel="stylesheet" href="home.css">

</head>
<body >
    
    <header>
        <table>
         <tr>
        <th><img class="logo" src="logo.png" alt="logo cozy home"  ></th>
        <th> <div class="container1">
            <h1>COZY HOME</h1>
            <h2>Welcome to our website! We're thrilled to have you here and invite you to delve into the rich tapestry of articles waiting to be discovered.</h2>
        </div></th>
         </tr>
    </table>
    
        <div class="mycontainer">
           <div ><a href="pagehome.html" class="link">Acceuil</a></div>
           <div ><a href="pagecuisine.html" class="link">Cuisine</a></div>
            <div ><a href="pagedecoration.html" class="link">Decoration</a></div>
            <div > <a href="pagesalon.html" class="link">Salon</a></div>
            <div > <a href="pagechambre.html" class="link">Chambre</a></div>
            <div><a href="pagepanier.html"><img class="panier" src="panier.png" alt="panier"></a></div>
            <div > <div class="animation start-acceuil"></div></div>
      
        </div>
    </header>
   <div >
                    
                
                     <video align="middle" width="1880" height="850" border="0"  poster="homephoto.jpg" controls autoplay loop  >
                          <source src="dari.mp4" />
                    </video>  
            </div>
            
    <nav>

            
               
               <div class="images"><figure>
                      <img  class ="salon-image" src="salon.jpg" alt="salon" align="middle" width="150" height="90" border="0">
                      <figcaption>Salon</figcaption>
               </figure></div>
               <div><figure>
                      <img class="cuisine-image" src="cuisine.jpg" alt="cuisine" align="middle" width="150" height="90" border="0" >
                      <figcaption>cuisine</figcaption>
               </figure></div>
               <div><figure>
                      <img class="chambre-image"  src="chambre.jpg" alt="chambre" align="middle" width="150" height="90" border="0">
                      <figcaption>chambre</figcaption>
               </figure></div>
            </div>
    
</nav>
  <footer>
    <h3>CONTACT: +21627896154 </h3>
    <a href="mailto : cosyhome@gmail.com ?subject=contact mail">cosyhome@gmail.com</a> <br><br>
    <a href="https://www.facebook.com/zaineb.boulabyar/">page facebook :cozy home</a><BR><BR>
    <a href="fichier.txt">A PROPOS DE NOUS</a>
  </footer>
  <script>
    // Récupère les éléments images du salon, de la chambre et de la cuisine
    const salonImage = document.querySelector('.salon-image');
    const chambreImage = document.querySelector('.chambre-image');
    const cuisineImage = document.querySelector('.cuisine-image');

    // Fonction pour agrandir une image au survol
    function agrandirImage(image) {
        image.style.transform = 'scale(1.1)';
    }

    // Fonction pour réinitialiser la taille de l'image lorsque le survol est terminé
    function reinitialiserImage(image) {
        image.style.transform = 'scale(1)';
    }

    // Événements de survol pour chaque image
    salonImage.addEventListener('mouseover', function() {
        agrandirImage(salonImage);
    });

    salonImage.addEventListener('mouseout', function() {
        reinitialiserImage(salonImage);
    });

    chambreImage.addEventListener('mouseover', function() {
        agrandirImage(chambreImage);
    });

    chambreImage.addEventListener('mouseout', function() {
        reinitialiserImage(chambreImage);
    });

    cuisineImage.addEventListener('mouseover', function() {
        agrandirImage(cuisineImage);
    });

    cuisineImage.addEventListener('mouseout', function() {
        reinitialiserImage(cuisineImage);
    });
</script>
</body>
</html>