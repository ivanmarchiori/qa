<template>
  <div>
    <md-table v-model="doc" :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="Tipo de Doc">{{ item.tipoDoc }}</md-table-cell>
        <md-table-cell md-label="Observação">{{
          item.observacao
        }}</md-table-cell>
        <md-table-cell md-label="Atualizado em">{{
          item.dataExecucao
        }}</md-table-cell>
        <md-table-cell md-label="Download">
          <button
            type="button"
            class="md-button md-raised md-block  md-info md-theme-default"
          >
            <div class="md-ripple">
              <div class="md-button-content">Download</div>
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
      doc: [
        {
          tipoDoc: "Nome do Doc1",
          observacao: "Descrição resumida das atividades do Doc",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoDoc: "Nome do Doc2",
          observacao: "Descrição resumida das atividades do Doc",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoDoc: "Nome do Doc3",
          observacao: "Descrição resumida das atividades do Doc",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoDoc: "Nome do Doc4",
          observacao: "Descrição resumida das atividades do Doc",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
        },
        {
          tipoDoc: "Nome do Doc5",
          observacao: "Descrição resumida das atividades do Doc",
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
