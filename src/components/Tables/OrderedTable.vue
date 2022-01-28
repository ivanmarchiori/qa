<template>
  <div>
    <md-table v-model="users" :table-header-color="tableHeaderColor">
     <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="Tipo de Metrica">{{ item.tipoMetrica }}</md-table-cell> 
        <md-table-cell md-label="Periodicidade">{{ item.periodo }}</md-table-cell>
        <md-table-cell md-label="Executado">{{ item.dataExecucao }}</md-table-cell>
        <md-table-cell md-label="Registros">{{ item.qtdRegistros }}</md-table-cell>
        <md-table-cell md-label="Status Atual"><button type="button" class="md-button md-raised md-success md-block  md-theme-default"><div class="md-ripple"><div class="md-button-content">{{ item.statusAtual }}</div> </div></button></md-table-cell>
      </md-table-row>
    </md-table>
  </div>
</template>

<script>
export default {
  name: "ordered-table",
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
          tipoMetrica: "Nome do Metrica1",
          observacao: "Descrição resumida das atividades do Metrica",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoMetrica: "Nome do Metrica2",
          observacao: "Descrição resumida das atividades do Metrica",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoMetrica: "Nome do Metrica3",
          observacao: "Descrição resumida das atividades do Metrica",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoMetrica: "Nome do Metrica4",
          observacao: "Descrição resumida das atividades do Metrica",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoMetrica: "Nome do Metrica5",
          observacao: "Descrição resumida das atividades do Metrica",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoMetrica: "Nome do Metrica6",
          observacao: "Descrição resumida das atividades do Metrica",
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
