<?php
// --- DADOS DA COMPRA (Altere aqui para testar) ---
$tipoCarne = "Picanha"; // Opções: "Filé Duplo", "Alcatra" ou "Picanha"
$quantidadeKg = 6.5;    // Quantidade em quilos
$usaCartao = true;      // true se usar o cartão QueroTudoQueÉSeu, false se não

// --- PROCESSAMENTO DOS DADOS ---
$precoPorKg = 0;

// Define o preço por quilo com base no tipo e na quantidade
switch ($tipoCarne) {
    case "Filé Duplo":
        $precoPorKg = ($quantidadeKg <= 5) ? 4.90 : 5.80;
        break;
    case "Alcatra":
        $precoPorKg = ($quantidadeKg <= 5) ? 5.90 : 6.80;
        break;
    case "Picanha":
        $precoPorKg = ($quantidadeKg <= 5) ? 6.90 : 7.80;
        break;
    default:
        die("Erro: Tipo de carne inválido. Escolha Filé Duplo, Alcatra ou Picanha.");
}

// Cálculos de valores
$valorTotal = $quantidadeKg * $precoPorKg;
$valorDesconto = $usaCartao ? ($valorTotal * 0.05) : 0.00;
$valorAPagar = $valorTotal - $valorDesconto;

// --- GERAÇÃO DO CUPOM FISCAL ---
echo "=========================================\n";
echo "    HIPERMERCADO QUEROTUDOQUEÉSEU        \n";
echo "=========================================\n";
echo "               CUPOM FISCAL              \n";
echo "-----------------------------------------\n";
echo "Item: " . str_pad($tipoCarne, 34) . "\n";
echo "Qtd: " . number_format($quantidadeKg, 3, ',', '.') . " Kg x R$ " . number_format($precoPorKg, 2, ',', '.') . "/Kg\n";
echo "-----------------------------------------\n";
echo "Valor Total:               R$ " . number_format($valorTotal, 2, ',', '.') . "\n";
echo "Tipo de Pagamento:         " . ($usaCartao ? "Cartão QueroTudo" : "Dinheiro/Outros") . "\n";
echo "Desconto (5%):             R$ " . number_format($valorDesconto, 2, ',', '.') . "\n";
echo "-----------------------------------------\n";
echo "VALOR A PAGAR:             R$ " . number_format($valorAPagar, 2, ',', '.') . "\n";
echo "=========================================\n";
echo "       Obrigado pela preferência!        \n";
echo "=========================================\n";
?>




