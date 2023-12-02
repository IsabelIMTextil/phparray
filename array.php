<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
    <style type="text/css">
        div{display: inline-block; vertical-align: top; padding: 5px; background-color: #ddd; margin: 5px; font: normal 10px/13px Verdana; width: 230px; border-radius: 10px;}
        div img{ border: 4px solid white;}
        div h3{font: bold 22px/22px Georgia; color: darkred;}
    </style>
</head>
<body>
    <?php

$galeria = array (
    
    array ("src" => "maria.png",
    "alt" => "María del Carmen Toribio",  
    "descripcion" => "Arte Textil Ancestral con la fibra del chaguar y difusión de su cultura.",
    "lugar" => "Ing. Juárez, Formosa"),
    
    array ("src" => "erme.png",
    "alt" => "Ermelinda Painequeo",  
    "descripcion" => "Cultura la cosmovisión y el tejido Mapuche.",
    "lugar" => "Trelew, Chubut" ),

    array ("src" => "jesus.png",
    "alt" => "Jesús Casimiro",  
    "descripcion" => "Arte Textil de los Valles Calchaquíes y la cultura Diaguita.",
    "lugar" => "Luracatao, Salta"),

    array ("src" => "mario.png",
    "alt" => "Mario Vucetich",  
    "descripcion" => "El tejido urbano, técnica en telar de cuadros.",
    "lugar" => "Buenos Aires"),

    array ("src" => "jorge.png",
    "alt" => "Jorge Marí",  
    "descripcion" => "Textiles de uso tradicional en Iberoamérica: el poncho mapuche.",
    "lugar" => "Buenos Aires"),

    array ("src" => "dardo.png",
    "alt" => "Dargo Gonza",  
    "descripcion" => "El poncho salteño, estructura del tejido en el telar criollo.",
    "lugar" => "Salta" ),

    array ("src" => "margarita.png",
    "alt" => "Margarita Ariza",  
    "descripcion" => "Randa Tucumana, tejido con aguja.",
    "lugar" => "El Cercado, Tucumán" ),

    array ("src" => "leo.png",
    "alt" => "Leónidas Silva",  
    "descripcion" => "Ñandutí, la técnica y su origen.",
    "lugar" => "Buenos Aires" ),

    array ("src" => "sonia.png",
    "alt" => "Sonia Vera",  
    "descripcion" => "Hilado de fibras naturales. Las diversas fibras vegetales, sus orígenes y tratamiento.",
    "lugar" => "Buenos Aires" ),

    array ("src" => "mariac.png",
    "alt" => "María Cicchitti",  
    "descripcion" => "El tejido con personas de la comunidad Huarpe.",
    "lugar" => "Luján de Cuyo, Mendoza" ),

);
// var_dump($galeria);

foreach($galeria as $tp){
    echo "<div>";
    
    echo '<img src="img/'.$tp['src'].'"alt="'.$tp['alt'].' " />';
    
    
    echo "<h3>" .$tp["alt"] . "</h3>";
    echo "<p>" .$tp["lugar"] . "</p>";
    echo "<p>" .$tp["descripcion"] . "</p>";
   
    echo "</div>";
}


?>

</body>
</html>


<?php

// function returnNames($users){
//     $names = "";

//     foreach($users as $user){
//         $names .= $user->name. ", ";
//     }
//     return $names;
// }

// class User {

//     public $name;

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }
// }

// return;

// echo returnNames([
//     new User("María del Carmen Toribio"),
//     new User("Ermelinda Painequeo "),
//     new User("Jesús Casimiro "),
//     new User("Mario Vucetich"),
//     new User("Jorge Marí"),
//     new User("Dargo Gonza "),
//     new User("Margarita Ariza "),
//     new User("Leónidas Ñandutí "),
//     new User("Sonia Vera "),
//     new User("María Cicchitti ")

// ]);


?>


