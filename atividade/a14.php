<?php
// --- DADOS DA VENDA  ---
$precoEtiqueta = 150.00; // Preço normal do produto
$codigoPagamento = 4;    // Opções: 1, 2, 3 ou 4

// --- PROCESSAMENTO DA CONDIÇÃO DE PAGAMENTO ---
switch ($codigoPagamento) {
    case 1:
        $condicao = "À vista em dinheiro (10% de desconto)";
        $valorFinal = $precoEtiqueta * 0.90; // Deduz 10%
        $parcelasTexto = "Parcela única de R$ " . number_format($valorFinal, 2, ',', '.');
        break;

    case 2:
        $condicao = "À vista no cartão de crédito (5% de desconto)";
        $valorFinal = $precoEtiqueta * 0.95; // Deduz 5%
        $parcelasTexto = "Parcela única de R$ " . number_format($valorFinal, 2, ',', '.');
        break;

    case 3:
        $condicao = "Em 3 vezes no cartão (Sem juros)";
        $valorFinal = $precoEtiqueta; // Preço normal
        $valorParcela = $valorFinal / 3;
        $parcelasTexto = "3x de R$ " . number_format($valorParcela, 2, ',', '.');
        break;

    case 4:
        $condicao = "Em 6 vezes no cartão/credidário (Com juros de 10%)";
        $valorFinal = $precoEtiqueta * 1.10; // Adiciona 10%
        $valorParcela = $valorFinal / 6;
        $parcelasTexto = "6x de R$ " . number_format($valorParcela, 2, ',', '.');
        break;

    default:
        // Caso seja digitado um código fora de 1 a 4
        die("Erro: Código de pagamento inválido! Escolha uma opção de 1 a 4.");
}

// --- EXIBIÇÃO DO RESULTADO ---
echo "=========================================\n";
echo "           RESUMO DO PAGAMENTO           \n";
echo "=========================================\n";
echo "Preço de Etiqueta:      R$ " . number_format($precoEtiqueta, 2, ',', '.') . "\n";
echo "Forma Escolhida:        " . $condicao . "\n";
echo "-----------------------------------------\n";
echo "Detalhamento:           " . $parcelasTexto . "\n";
echo "TOTAL A PAGAR:          R$ " . number_format($valorFinal, 2, ',', '.') . "\n";
echo "=========================================\n";
?>
