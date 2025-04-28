// Receber o seletor do campo valor
let inputValor = document.getElementById('valor');

// Aguardar o usuário digitar no campo valor
inputValor.addEventListener('input', function() {
    // Obtém o valor digitado removendo os caracteres não numéricos
    let valueValor = this.value.replace(/[^\d]/g, '');

    // Adicionar separador de milhar
    let formattedValor = (valueValor.slice(0, -2).replace(/\B(?=(\d{3})+(?!\d))/g, '.')) + '' + valueValor.slice(-2);

    // Adicionar virgula para separar os centavos
    formattedValor = formattedValor.slice(0, -2) + ',' + formattedValor.slice(-2);

    // Atualizar o valor do campo com o valor formatado
    this.value = formattedValor;
}); 