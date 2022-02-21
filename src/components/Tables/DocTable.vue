<template>
  <div>
    <md-table v-model="knowData" :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="Base Conhecimento">{{ item.baseConhecimento }}</md-table-cell>
        <md-table-cell md-label="Assunto">{{
          item.nomeDoc
        }}</md-table-cell>
        <md-table-cell md-label="Tipo de Artigo">{{
          item.TipoDoc
        }}</md-table-cell>
        <md-table-cell md-label="Ver">
          <button
            type="button"
            class="md-button md-raised md-block  md-info md-theme-default"
          >
            <div class="md-ripple">
              <div class="md-button-content">Ver</div>
            </div>
          </button></md-table-cell
        >

        <md-table-cell md-label="Editar">
          <button
            type="button"
            class="md-button md-raised md-block  md-warning md-theme-default"
          >
            <div class="md-ripple">
              <div class="md-button-content">Alterar</div>
            </div>
          </button></md-table-cell
        >

        <md-table-cell md-label="Excluir">
          <button
            type="button"
            class="md-button md-raised md-block  md-danger md-theme-default"
          >
            <div class="md-ripple">
              <div class="md-button-content">Excluir</div>
            </div>
          </button></md-table-cell
        >


      </md-table-row>
    </md-table>
  </div>
</template>

<script>
export default {
  name: "doc-table",
  props: {
    tableHeaderColor: {
      type: String,
      default: "",
    },
  },
  data() {
    return {
      selected: [],
      knowData: [],
    };
  },
  mounted() {
    fetch("http://localhost/qa/api/?metodo=know")
      .then((res) => res.json())
      .then((data) => (this.knowData = data.data))
      .catch((err) => console.log(err.message));
  },
};
</script>
