<template>
  <div>
    <md-table v-model="users" :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="ID">{{ item.id }}</md-table-cell>
        <md-table-cell md-label="Recurso">{{ item.recurso }}</md-table-cell>
        <md-table-cell md-label="Valor">{{ item.valor1 }}</md-table-cell>
        <md-table-cell md-label="Valor">{{ item.valor2 }}</md-table-cell>
        <md-table-cell md-label="Valor">{{ item.valor3 }}</md-table-cell>
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
          id: 1,
          recurso: "Nome do Recurso1",
          valor1: "0.000",
          valor2: "0.000",
          valor3: "0.000",
        }, {
          id: 2,
          recurso: "Nome do Recurso2",
          valor1: "0.000",
          valor2: "0.000",
          valor3: "0.000",
        }, {
          id: 3,
          recurso: "Nome do Recurso3",
          valor1: "0.000",
          valor2: "0.000",
          valor3: "0.000",
        }, {
          id: 4,
          recurso: "Nome do Recurso4",
          valor1: "0.000",
          valor2: "0.000",
          valor3: "0.000",
        },
      ],
    };
  },
};
</script>
