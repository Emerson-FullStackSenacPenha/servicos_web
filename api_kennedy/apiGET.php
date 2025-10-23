<?php

    header("Content-type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Origin: *");

    $metodo = $_SERVER['REQUEST_METHOD'];

    switch ($metodo) {

        case "GET":
            metodoGET();
            break;

        case "POST":

            break;

        default:
            echo "Método não identificado";
            break;

    }

    function metodoGET() {

        $pizzas = json_decode(file_get_contents("pizza.json"), true);

        $pizza_especifica = $_GET['pizza'] ?? null;
        $info = $_GET['info'] ?? 'Tudo';


        switch ($pizza_especifica) {

            case "Pepperoni":
                $pizza = $pizzas['Pizzas']['Pizza de Pepperoni'];
                break;

            case "Sedução":
                $pizza = $pizzas['Pizzas']['Pizza Sedução'];
                break;

            case "Frango":
                $pizza = $pizzas['Pizzas']['Pizza de Frango'];
                break;

            default:
                echo "Pizza não Encontrada";
                return;

        }

        switch ($info) {

            case "Ingredientes":
                echo json_encode(["Ingredientes" => $pizza['Ingredientes']]);
                break;

            case "Origem":
                echo json_encode(["Origem" => $pizza['Origem']]);
                break;

            case "Nutricao":
                echo json_encode(["Nutricao" => $pizza['Nutricao']]);
                break;

            case "Tipo":
                echo json_encode(["Tipo" => $pizza['Tipo']]);
                break;    

            case "Nome":
                echo json_encode(["Nome" => $pizza['Nome']]);
                break;    

            case "Tudo":
                echo json_encode($pizza);
                break;

            default:
                echo "Parâmetro 'Info' inválido!";
                break;
        }
    }
?>
