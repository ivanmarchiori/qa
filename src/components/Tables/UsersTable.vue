<template>
  <div>
    <md-table v-model="usersData" :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="Nome Completo">{{ item.nome }} {{ item.sobrenome }}</md-table-cell>
        <md-table-cell md-label="Email">{{ item.email }}</md-table-cell>
        <md-table-cell md-label="Usuario">{{ item.usuario }}</md-table-cell>
        <md-table-cell md-label="Ultimo acesso">{{ item.ultimoAcesso.format('MM/DD/YYYY hh:mm') }}</md-table-cell>
        <md-table-cell md-label="Alterar"><button type="button" class="md-button md-raised md-warning md-block  md-theme-default"><div class="md-ripple"><div class="md-button-content">Alterar</div> </div></button></md-table-cell>
        <md-table-cell md-label="Excluir"><button type="button" class="md-button md-raised md-danger md-block  md-theme-default"><div class="md-ripple"><div class="md-button-content">Excluir</div> </div></button></md-table-cell>
      </md-table-row>
    </md-table>
  </div>
</template>
<script>
export default {
  name: "users-table",
  props: {
    tableHeaderColor: {
      type: String,
      default: "",
    },
  },
  data() {
    return {
      selected: [],
      usersData: [],
    };
  },
  mounted() {
    fetch("http://localhost/qa/api/?metodo=users")
      .then((res) => res.json())
      .then((data) => (this.usersData = data.data))
      .catch((err) => console.log(err.message));
  },
};
</script>
