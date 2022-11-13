<?

/*recipe loader for TP8 */

$name = $_GET["recipeName"];
$list = $_GET["recipeList"];

if ($name == "Monkey Bread Kabobs") {
  
  if ($list == "ingredients") {    
    include "ingredients.html";
    
  } elseif ($list == "equipment") {    
    include "equipment.html";
    
  } elseif ($list == "directions") {
    include "directions.html";
    
  } else {
    echo "1";
    
  }
  
  
} elseif ($name == "Fluffy French Toast") {
  
    if ($list == "ingredients") {    
    include "fluffyfrenchtoast-ingredients.html";
    
  } elseif ($list == "equipment") {    
    include "fluffyfrenchtoast-equipment.html";
    
  } elseif ($list == "directions") {
    include "fluffyfrenchtoast-directions.html";
    
  } else {
    echo "1";
    
  }


} elseif ($name == "Tres Leches Cake") {
  
    if ($list == "ingredients") {    
    include "treslechescake-ingredients.html";
    
  } elseif ($list == "equipment") {    
    include "treslechescake-equipment.html";
    
  } elseif ($list == "directions") {
    include "treslechescake-directions.html";
    
  } else {
    echo "1";
    
  }



  
  
  
  
} else {
  
  echo "0";
  
}