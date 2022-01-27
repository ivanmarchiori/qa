<template>
  <div>
    <md-table v-model="users" :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="Tipo de Teste">{{ item.tipoTeste }}</md-table-cell>
        <md-table-cell md-label="Observação">{{ item.observacao }}</md-table-cell>
        <md-table-cell md-label="Periodicidade">{{ item.periodo }}</md-table-cell>
        <md-table-cell md-label="Ultima execução">{{ item.dataExecucao }}</md-table-cell>
        <md-table-cell md-label="Quantidade Registros">{{ item.qtdRegistros }}</md-table-cell>
        <md-table-cell md-label="Status Atual"><button type="button" class="md-button md-raised md-success md-theme-default"><div class="md-ripple"><div class="md-button-content">{{ item.statusAtual }}</div> </div></button></md-table-cell>
        <md-table-cell md-label="Executar"><button type="button" class="md-button md-raised md-danger md-theme-default"><div class="md-ripple"><div class="md-button-content">Executar</div> </div></button></md-table-cell>
      </md-table-row>
    </md-table>
  </div>
</template>

<script>
export default {
  name: "simple-tests",
  props: {
    tableHeaderColor: {
      type: String,
      default: "",
    },
  },
  data() {
    return {
      selected: [],
      users: [
        {
          tipoTeste: "Nome do Teste1",
          observacao: "Descrição resumida das atividades do teste",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoTeste: "Nome do Teste2",
          observacao: "Descrição resumida das atividades do teste",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoTeste: "Nome do Teste3",
          observacao: "Descrição resumida das atividades do teste",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoTeste: "Nome do Teste4",
          observacao: "Descrição resumida das atividades do teste",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoTeste: "Nome do Teste5",
          observacao: "Descrição resumida das atividades do teste",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoTeste: "Nome do Teste6",
          observacao: "Descrição resumida das atividades do teste",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
      ],
    };
  },
};
</script>
 