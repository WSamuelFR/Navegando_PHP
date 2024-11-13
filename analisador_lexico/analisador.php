<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $textInput = trim($_POST['textInput'] ?? '');

    if (empty($textInput)) {
        echo json_encode(['error' => 'Texto de entrada não pode estar vazio.']);
        exit;
    }


    $TIPO_PALAVRA = 'Palavra';
    $TIPO_NUMERO = 'Número Inteiro';
    $TIPO_FLOAT = 'Número Decimal';
    $TIPO_IDENTIFICADOR = 'Identificador';
    $TIPO_PALAVRA_CHAVE = 'Palavra-chave';
    $TIPO_OPERADOR = 'Operador';
    $TIPO_PONTUACAO = 'Pontuação';
    $TIPO_SIMBOLO = 'Símbolo';
    $TIPO_OUTRO = 'Outro';


    $palavrasChave = ['if', 'else', 'for', 'while', 'return', 'function', 'var', 'const', 'let'];

    /**
     * Analisa o texto para classificar cada token.
     *
     * @param string $texto 
     * @return array 
     */
    function analisarTexto(string $texto): array
    {
        $tokens = preg_split('/\s+/', $texto);
        $resultado = [];

        foreach ($tokens as $index => $token) {
            $tipo = determinarTipoToken($token);
            $resultado[] = [
                'token' => $token,
                'tipo' => $tipo,
                'posicao' => $index + 1,
            ];
        }

        return $resultado;
    }

    /**
     * Determina o tipo de um token específico.
     *
     * @param string $token O token para análise.
     * @return string O tipo de token determinado.
     */
    function determinarTipoToken(string $token): string
    {
        global $palavrasChave, $TIPO_PALAVRA, $TIPO_NUMERO, $TIPO_FLOAT, $TIPO_IDENTIFICADOR, $TIPO_PALAVRA_CHAVE, $TIPO_OPERADOR, $TIPO_PONTUACAO, $TIPO_SIMBOLO, $TIPO_OUTRO;


        if (in_array($token, $palavrasChave, true)) {
            return $TIPO_PALAVRA_CHAVE;
        } elseif (preg_match('/^[a-zA-Z_][a-zA-Z0-9_]*$/', $token)) {
            return $TIPO_IDENTIFICADOR;
        } elseif (preg_match('/^[+-]?\d+$/', $token)) {
            return $TIPO_NUMERO;
        } elseif (preg_match('/^[+-]?\d+\.\d+$/', $token)) {
            return $TIPO_FLOAT;
        } elseif (preg_match('/^[\+\-\*\/=<>!&|]+$/', $token)) {
            return $TIPO_OPERADOR;
        } elseif (preg_match('/^[.,;:!?]$/', $token)) {
            return $TIPO_PONTUACAO;
        } elseif (preg_match('/^[#@%\$&\*\(\)\[\]{}]+$/', $token)) {
            return $TIPO_SIMBOLO;
        } elseif (preg_match('/^[a-zA-Z]+$/', $token)) {
            return $TIPO_PALAVRA;
        } else {
            return $TIPO_OUTRO;
        }
    }

    $tokensAnalisados = analisarTexto($textInput);
    echo json_encode($tokensAnalisados);
    exit;
} else {
    echo json_encode(['error' => 'Método de requisição inválido. Utilize POST.']);
    exit;
}
