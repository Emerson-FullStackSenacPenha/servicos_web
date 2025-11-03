<?php

header("Content-Type: application/json; charset= UTF-8");
header("Access-control-Allow-Origin: *");

$metodo = $_SERVER["REQUEST_METHOD"];

switch($metodo){

    case "GET";
        metodoGET();
        break;
    
    case "POST";
        verificar_codigo_secreto();
        break;

    default;

        break;    

};

function metodoGET(){

    $opcao = $_GET['id'];

    switch($opcao){

        case "1":
            echo "
            
            <h1> Construindo o método POST </h1>
            
            

<p><b>Definir a URL da API</b><br>
É o endereço para onde os dados serão enviados.<br>
<code>\$url = 'http://localhost/servicos_web/exercicio_6/api.php?id=1';</code><br><br>

<b>Criar os dados a serem enviados</b><br>
Esses dados serão transformados em JSON.<br>
<code>\$chave = ['codigo' => 'senha'];</code><br><br>

<b>Montar a estrutura da requisição HTTP</b><br>
Define o método, o cabeçalho e o conteúdo:<br>
<pre>
\$estrutura_http = [
    'http' => [
        'method'  => 'POST',
        'header'  => 'Content-Type: application/json\\r\\n',
        'content' => json_encode(\$chave)
    ]
];
</pre><br>

<b>Criar o contexto da requisição</b><br>
Usa a função <code>stream_context_create()</code> para preparar o envio.<br>
<code>\$contexto = stream_context_create(\$estrutura_http);</code><br><br>

<b>Enviar e receber a resposta</b><br>
A função <code>file_get_contents()</code> envia a requisição e recebe o retorno da API.<br>
<pre>
\$resposta = file_get_contents(\$url, false, \$contexto);
echo \$resposta;
</pre>
                        ";
            break;
        
        default:
            echo "Vixi, tem algo errado mano!";
            break;

    }

};

function verificar_codigo_secreto(){

    $chave_acesso = json_decode(file_get_contents("php://input"), true);

    if( $chave_acesso['codigo'] == "senha" ) {

        echo json_encode("A mensagem secreta é: Não existe mensagem secreta!", JSON_UNESCAPED_UNICODE);

    } else { echo json_encode("Senha errada mano!", JSON_UNESCAPED_UNICODE); }

};

?>