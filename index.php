<?php

class Form 
{

    private $action;
    private $method;
    private $html = "";

    function __construct($method, $action) {
        $this->action = $action;
        $this->method = $method;
    }

    
    function addInput ($type, $placeholder) {
        $this->html .= "<div class='col-6'><input type='$type' class='form-control' placeholder='$placeholder'></div>";
    }

    function render() {
        echo "<form action='$this->action' method='$this->method'>";
        echo "<div class='row'>";
        echo "<div class='input-group mb-3'>";
        echo $this->html;
        echo "</div>";
        echo "<button class='btn btn-primary'>Invia</button>";
        echo "</form>";
    }

}
// creare la classe Form con la proprietà che contiene l'HTML del form
// i metodi per aggiungere labels ed inputs
// un metodo per renderizzare il form
// e un costruttore per passare gli attributi del form

$myForm = new Form('POST', '');

$myForm->addInput('text', 'Nome');
$myForm->addInput('text', 'Cognome');
$myForm->addInput('email', 'Email');
$myForm->addInput('password', 'Password');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-8">
                <div><?php $myForm->render(); ?></div>
            </div>
        </div>
    </div>
</body>

</html>