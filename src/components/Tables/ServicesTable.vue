<template>
  <div>
    <md-table v-model="services" :table-header-color="tableHeaderColor">
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
      services: [
        {
          tipoServices: "SEFAZ",
          observacao: "Acesso ao status da secretaria da Fazenda",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
          bgButton: "success",
        },
        {
          tipoServices: "SysAid",
          observacao: "Status do Serviço de acesso ao site",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "Atenção",
          bgButton: "danger",
        },
        {
          tipoServices: "Meistertask",
          observacao: "Status do Serviço de acesso ao site",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
          bgButton: "success",
        },
        {
          tipoServices: "ICorp",
          observacao: "Status do Serviço de acesso ao site",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
          bgButton: "success",
        },
        {
          tipoServices: "Franquias",
          observacao: "Status do Serviço de acesso ao site",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
          bgButton: "success",
        },
        {
          tipoServices: "Banco de Dados > DEV",
          observacao: "Acesso ao Banco com status de conexao",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
          bgButton: "success",
        },
        {
          tipoServices: "Banco de Dados > QA",
          observacao: "Acesso ao Banco com status de conexao",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
          bgButton: "success",
        },
        {
          tipoServices: "Banco de Dados > Produção",
          observacao: "Acesso ao Banco com status de conexao",
          periodo: "1 vez ao dia",
          dataExecucao: "00/00/0000 00:00:00",
          qtdRegistros: "999",
          statusAtual: "OK",
          bgButton: "success",
        },
      ],
    };
  },
};
</script>
