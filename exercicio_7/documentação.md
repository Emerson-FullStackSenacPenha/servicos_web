📄 Guia Rápido: Requisição POST à API Gemini (PHP/XAMPP)
Este guia documenta o processo de comunicação entre o nosso código (o Cliente PHP) e a Inteligência Artificial Gemini, usando o método POST.

1. 🔑 Obtenção da Chave de Acesso (A Credencial)
Para que a IA reconheça nosso pedido, precisamos de uma chave única:

Acessar: O site do Google AI Studio: https://aistudio.google.com/

Localizar: No canto inferior esquerdo, clicar em "Get API Key" (Obter Chave de API).

Ação: Copiar a chave existente ou gerar uma nova.

2. 💻 Configuração do Ambiente e do Código
Usamos o XAMPP e o VS Code para escrever e rodar o nosso "Cliente":

Local de Trabalho: Salvar o arquivo PHP (ex: cliente.php) dentro da pasta de documentos do XAMPP (htdocs).

VS Code: Dentro do código PHP, criar uma variável (ex: $api_key) para guardar a chave obtida no Passo 1.

Servidor Local: Iniciar o módulo Apache no Painel de Controle do XAMPP.

3. 📦 Estruturando a Mensagem (Requisição POST)
Para falar com a IA, precisamos seguir o formato exato que ela espera.

Documentação Oficial (Referência): Para ver a estrutura necessária da requisição, acessamos o link: https://ai.google.dev/api/rest/v1beta/models/generateContent

Estrutura Padrão: Nosso código PHP monta esta estrutura:

Método: Definido como POST.

Endpoint (URL): O endereço para enviar a requisição, incluindo a chave de API no final (ex: ...generateContent?key=SUA_CHAVE).

Corpo da Requisição (JSON): A pergunta (prompt) é formatada dentro de um objeto JSON específico.

4. ✅ Envio e Tratamento da Resposta
Após montar a mensagem, o PHP a envia e espera o retorno:

Envio: O PHP faz a requisição POST para a URL.

Recebimento: O servidor Gemini devolve a resposta como um grande texto formatado (JSON).

Exibição: O código PHP usa o comando json_decode() para ler o texto e extrair a resposta da IA para que possamos vê-la no navegador.

🔗 Link Útil
Referência Geral da API: https://ai.google.dev/api