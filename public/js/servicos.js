document.addEventListener('DOMContentLoaded', function () {

    const quantidade = document.getElementById('quantidade');
    const valorUnitario = document.getElementById('valor_unitario');
    const valorTotal = document.getElementById('valor_total');

    const desconto = document.getElementById('desconto');
    const acrescimo = document.getElementById('acrescimo');
    const valorFinal = document.getElementById('valor_final');

    function calcularTotal() {

        let qtd = parseFloat(quantidade.value) || 0;
        let valor = parseFloat(valorUnitario.value) || 0;

        let total = qtd * valor;

        valorTotal.value = total.toFixed(2);

        let descontoValor = parseFloat(desconto.value) || 0;
        let acrescimoValor = parseFloat(acrescimo.value) || 0;

        valorFinal.value =
            (total - descontoValor + acrescimoValor).toFixed(2);
    }

    quantidade.addEventListener('input', calcularTotal);
    valorUnitario.addEventListener('input', calcularTotal);

    desconto.addEventListener('input', calcularTotal);
    acrescimo.addEventListener('input', calcularTotal);

    calcularTotal();

});