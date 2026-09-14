<?php

function validarJogada($malha, $linha, $coluna, $numero) {
    // Regra 1: O número deve estar entre 1 e 3
    if ($numero < 1 || $numero > 3) {
        return "Inválido: O número deve estar entre 1 e 3.";
    }
    
    // Validar se os índices estão dentro da malha 3x3
    if ($linha < 0 || $linha > 2 || $coluna < 0 || $coluna > 2) {
        return "Inválido: Posição fora da malha.";
    }
        
    // Verificar se a posição já está ocupada (considerando 0 como vazio)
    if ($malha[$linha][$coluna] !== 0) {
        return "Inválido: Esta posição já está preenchida.";
    }

    // Regra 2: O número não pode se repetir na mesma linha
    if (in_array($numero, $malha[$linha])) {
        return "Inválido: O número {$numero} já existe na linha " . ($linha + 1) . ".";
    }

    // Regra 3: O número não pode se repetir na mesma coluna
    $colunaValores = array_column($malha, $coluna);
    if (in_array($numero, $colunaValores)) {
        return "Inválido: O número {$numero} já existe na coluna " . ($coluna + 1) . ".";
    }

    // Regra 4: Caso não repita, a jogada é válida
    return "Jogada válida! O número pode ser inserido.";
}

// Representação da malha (0 representa o espaço vazio)
$malhaSudoku = [,
 ,
    [2, 3, 0] // O espaço vazio está na linha 3, coluna 3 (índice 2, 2)
];

// Exemplo de teste: Inserir o número 1 na posição vazia (linha 3, coluna 3)
// Em PHP, os índices também começam em 0 (linha 3 é índice 2 / coluna 3 é índice 2)
$linhaEscolhida = 2; 
$colunaEscolhida = 2;
$numeroEscolhido = 1;

$resultado = validarJogada($malhaSudoku, $linhaEscolhida, $colunaEscolhida, $numeroEscolhido);
echo $resultado . PHP_EOL;

?>
