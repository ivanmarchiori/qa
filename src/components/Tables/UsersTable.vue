<template>
  <div>
    <md-table v-model="users" :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row" slot-scope="{ item }">
        <md-table-cell md-label="Nome Completo">{{ item.nomeCompleto }}</md-table-cell>
        <md-table-cell md-label="Email">{{ item.email }}</md-table-cell>
        <md-table-cell md-label="Usuario">{{ item.usuario }}</md-table-cell>
        <md-table-cell md-label="Ultimo acesso">{{ item.dataAcesso }}</md-table-cell>
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
      users: [
        {
          nomeCompleto: "Nome e Sobrenome1",
          email: "email@provedor.com.br",
          usuario: "username",
          dataAcesso: "00/00/0000 00:00:00",
        },{
          nomeCompleto: "Nome e Sobrenome2",
          email: "email@provedor.com.br",
          usuario: "username",
          dataAcesso: "00/00/0000 00:00:00",
        },{
          nomeCompleto: "Nome e Sobrenome3",
          email: "email@provedor.com.br",
          usuario: "username",
          dataAcesso: "00/00/0000 00:00:00",
        },{
          nomeCompleto: "Nome e Sobrenome4",
          email: "email@provedor.com.br",
          usuario: "username",
          dataAcesso: "00/00/0000 00:00:00",
        },{
          nomeCompleto: "Nome e Sobrenome5",
          email: "email@provedor.com.br",
          usuario: "username",
          dataAcesso: "00/00/0000 00:00:00",
        }, 
      ],
    };
  },
};
</script>
