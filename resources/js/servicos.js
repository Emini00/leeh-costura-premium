document.addEventListener('DOMContentLoaded', function () {
    alert('JS carregou');

    const quantidade = document.getElementById('quantidade');
    const valorUnitario = document.getElementById('valor_unitario');
    const valorTotal = document.getElementById('valor_total');

    function calcularTotal() {
        let qtd = parseFloat(quantidade.value) || 0;
        let valor = parseFloat(valorUnitario.value) || 0;

        valorTotal.value = (qtd * valor).toFixed(2);
    }

    quantidade.addEventListener('input', calcularTotal);
    valorUnitario.addEventListener('input', calcularTotal);
});