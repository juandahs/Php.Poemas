<?php
include("Poema.php");
 

function Obtener()
{
    
    $nombreAchivo = "Poemas.txt";
    //Abrir el archivo el de solo lectura
    fopen($nombreAchivo, "r");

    return file_get_contents($nombreAchivo);
}

function Guardar($poemas)
{
    $nombreArchivo = "Poemas.txt";
    $contenidoArchivo = PoemaToString($poemas);
    file_put_contents($nombreArchivo, $contenidoArchivo);
}

//Función para convertir el string del archivo en un array de objetos tipo Poema
function StringToPoema($contenidoArchivo)
{
    // Se divide todo el contenido del archivo en poemas individuales
    $poemasString = explode('*', $contenidoArchivo);
    //Se instancia el array a devolver
    $poemas = [];

    //Se recorre los poemas para convertirlo en objeto de tipo Poema
    foreach ($poemasString as $poemaString) 
    {
        //Se obtiene la información del poema
        $poemaArray = explode('-', $poemaString);
        if(!empty($poemaArray[0] && !empty($poemaArray[1] && !empty($poemaArray[2]))))
        {
            //Se crea el objeto poema 
            //0 = autor
            //1 = titulo
            //2 = poema
            $poema = new Poema($poemaArray[0],  $poemaArray[1], $poemaArray[2]);        
            $poemas[] = $poema;
        }
        
    }
    //Se regresa un array con objetos Poema
    return $poemas;
}
//Funcion para convertir el array de Poemas en string
function PoemaToString($poemas)
{
    //Se instancia la variable de retorno que contiene el string a guardar en el archivo
    $poemaString = '';
    
    //Se recorre el array de poemas y se concatenan los datos en el string con el formato 
    //Autor,Titulo,Este seria el contenido del poema;
    foreach ($poemas as $poema) {
        $poemaString .= $poema->Autor . '-' . $poema->Titulo . '-' . $poema->Poema . '*';
    }

    //Se retorna el string y se elimina el último caracter ';'
    return rtrim($poemaString); 
}