<template>
  <div>
    <md-table v-model="services" :table-header-color="tableHeaderColor">
     <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="Tipo de Servicos">{{ item.tipoServices }}</md-table-cell>
        <md-table-cell md-label="Observação">{{ item.observacao }}</md-table-cell>
        <md-table-cell md-label="Periodicidade">{{ item.periodo }}</md-table-cell>
        <md-table-cell md-label="Ultima execução">{{ item.dataExecucao }}</md-table-cell>
        <md-table-cell md-label="Quantidade Registros">{{ item.qtdRegistros }}</md-table-cell>
        <md-table-cell md-label="Status Atual"><button type="button" class="md-button md-raised md-success md-theme-default"><div class="md-ripple"><div class="md-button-content">{{ item.statusAtual }}</div> </div></button></md-table-cell>
       </md-table-row>
    </md-table>
  </div>
</template>

<script>
export default {
  name: "services-table",
  props: {
    tableHeaderColor: {
      type: String,
      default: "",
    },
  },
  data() {
    return {
      selected: [],
      services: [
       {
          tipoServices: "Nome do Services1",
          observacao: "Descrição resumida das atividades do Services",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoServices: "Nome do Services2",
          observacao: "Descrição resumida das atividades do Services",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoServices: "Nome do Services3",
          observacao: "Descrição resumida das atividades do Services",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoServices: "Nome do Services4",
          observacao: "Descrição resumida das atividades do Services",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoServices: "Nome do Services5",
          observacao: "Descrição resumida das atividades do Services",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoServices: "Nome do Services6",
          observacao: "Descrição resumida das atividades do Services",
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
