<template>
  <div>
    <md-table v-model="deployData" :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="Tipo de Deploy">{{ item.tipoDeploy }}</md-table-cell>
        <md-table-cell md-label="Observação">{{ item.observacao }}</md-table-cell>
        <md-table-cell md-label="Periodicidade">{{ item.periodo }}</md-table-cell>
        <md-table-cell md-label="Ultima execução">{{ item.dataExecucao }}</md-table-cell>
        <md-table-cell md-label="Quantidade Registros">{{ item.qtdRegistros }}</md-table-cell>
        <md-table-cell md-label="Status Atual"><button type="button" class="md-button md-raised md-block  md-success md-theme-default"><div class="md-ripple"><div class="md-button-content">{{ item.statusAtual }}</div> </div></button></md-table-cell>
        <md-table-cell md-label="Executar"><button type="button" class="md-button md-raised md-block  md-danger md-theme-default"><div class="md-ripple"><div class="md-button-content">Executar</div> </div></button></md-table-cell>
      </md-table-row>
    </md-table>
  </div>
</template>

<script>
export default {
  name: "deploy-table",
  props: {
    tableHeaderColor: {
      type: String,
      default: "",
    },
  },
  data() {
    return {
      selected: [],
      deployData: [],
    };
  },mounted() {
    fetch("http://localhost/qa/api/?metodo=deploy")
      .then((res) => res.json())
      .then((data) => (this.deployData = data.data))
      .catch((err) => console.log(err.message));
  },
};
</script>
