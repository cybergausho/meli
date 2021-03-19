<?php
INCLUDE("clases.php");
/*ejemplos para tomar
$seller_id= "179571326";
$seller_id=48166890";
$site_id="MLA";
*/

//generar log
if ($_POST['sellers']) {
    //recepcion variables post
    $site_id = $_POST['site'];
    $sellers = $_POST['sellers'];
    //$seller_id = implode("&", $sellers); //array a string delimitado por ampersan -- no se envian dos sellers en el mismo param
    //por cada seller agregado
    if (!empty($site_id) && !empty($sellers[0])) {
        foreach ($sellers as $x => $seller_id) {
            $data= new Data($site_id, $seller_id);
            $url = $data->getUrl();
            $api = new Api($url);
            $api->requestApi();
        }
    }else {
        echo "Todos los campos son obligatorios";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeLi</title>
</head>
<body>

<body>

<br>
        <form id="form" method="POST" action="">
            Site ID: <input type="text" name="site" value= "MLA">
            Seller ID: <input type="text" name="sellers[]" value="179571326">
            <button type="submit">Generar Log</button>
        </form>
        <button onclick="agregar_seller()">Añadir seller</button>
        <script>
        //agregar campo p seller
            function agregar_seller(){

                var x = document.getElementById("form");
                var nuevo = document.createElement("input");
                nuevo.setAttribute("type", "text");
                nuevo.setAttribute("value", "179571326");
                nuevo.setAttribute("name", "sellers[]");
                
                var pos = x.childElementCount;
                x.insertBefore(nuevo, x.childNodes[pos]);
            }
        </script>

</body>


</html>