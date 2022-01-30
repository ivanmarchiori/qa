<template>
  <div>
    <md-table v-model="bugs" :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="Assunto">{{ item.assunto }}</md-table-cell>
        <md-table-cell md-label="Operador">{{ item.operador }}</md-table-cell>
        <md-table-cell md-label="Data">{{ item.dataBug }}</md-table-cell>
        <md-table-cell md-label="Status">{{ item.statusBug }}</md-table-cell>
        <md-table-cell md-label="Alterar"><button type="button" class="md-button md-raised md-warning md-block  md-theme-default"><div class="md-ripple"><div class="md-button-content">Alterar</div> </div></button></md-table-cell>
        <md-table-cell md-label="Excluir"><button type="button" class="md-button md-raised md-danger md-block  md-theme-default"><div class="md-ripple"><div class="md-button-content">Excluir</div> </div></button></md-table-cell>
      </md-table-row>
    </md-table>
  </div>
</template>

<script>
export default {
  name: "bugs-table",
  props: {
    tableHeaderColor: {
      type: String,
      default: "",
    },
  },
  data() {
    return {
      selected: [],
      bugs: [
        {
          assunto: "Assunto do Bug1",
          operador: "Nome Sobrenome",
          dataBug: "00/00/0000 00:00:00",
          statusBug: "Pendente",
        },
        {
          assunto: "Assunto do Bug2",
          operador: "Nome Sobrenome",
          dataBug: "00/00/0000 00:00:00",
          statusBug: "Pendente",
        },
        {
          assunto: "Assunto do Bug3",
          operador: "Nome Sobrenome",
          dataBug: "00/00/0000 00:00:00",
          statusBug: "Pendente",
        },
        {
          assunto: "Assunto do Bug4",
          operador: "Nome Sobrenome",
          dataBug: "00/00/0000 00:00:00",
          statusBug: "Pendente",
        },
        {
          assunto: "Assunto do Bug5",
          operador: "Nome Sobrenome",
          dataBug: "00/00/0000 00:00:00",
          statusBug: "Pendente",
        }, 

      ],
    };
  },
};
</script>
