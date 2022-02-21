<template>
  <div>
    <md-table v-model="servicesData" :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="Tipo de Services">{{
          item.tipoServices
        }}</md-table-cell>
        <md-table-cell md-label="Observação">{{
          item.observacao
        }}</md-table-cell>
        <md-table-cell md-label="Periodicidade">{{
          item.periodo
        }}</md-table-cell>
        <md-table-cell md-label="Ultima execução">{{
          item.dataExecucao
        }}</md-table-cell>
        <md-table-cell md-label="Status Atual">
          <div v-if="item.statusAtual=='OK'">
             <button
            type="button"
            class="md-button md-block md-block  md-raised md-success md-theme-default"
          >
            <div class="md-ripple">
              <div class="md-button-content">{{ item.statusAtual }}</div>
            </div>
          </button>

          </div>
          <div v-else>
            
             <button
            type="button"
            class="md-button md-block md-block  md-raised md-danger md-theme-default"
          >
            <div class="md-ripple">
              <div class="md-button-content">{{ item.statusAtual }}</div>
            </div>
          </button>

          </div>
         
        </md-table-cell>
        <md-table-cell md-label="Executar"
          ><button
            type="button"
            class="md-button md-raised md-primary md-block md-theme-default"
          >
            <div class="md-ripple">
              <div class="md-button-content">Executar</div>
            </div>
          </button></md-table-cell
        >
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
      servicesData: [],
    };
  }
  ,mounted() {
    fetch("http://localhost/qa/api/?metodo=services")
      .then((res) => res.json())
      .then((data) => (this.servicesData = data.data))
      .catch((err) => console.log(err.message));
  },
};
</script>
