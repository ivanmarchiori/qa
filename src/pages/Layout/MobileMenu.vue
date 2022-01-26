<template>
  <ul class="nav nav-mobile-menu">
    <li>
      <md-field>
        <label>Pesquisar Colaborador</label>
        <md-input v-model="search" type="text"></md-input>
      </md-field>
    </li>
    <li>
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="material-icons">dashboard</i>
        <p>Dashboard</p></a
      >
    </li>
    <li>
      <drop-down>
        <a slot="title" class="dropdown-toggle" data-toggle="dropdown">
          <i class="material-icons">notifications</i>
          <span class="notification">0</span>
          <p>Notificações</p>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="#">Notificação 01</a></li>
          <li><a href="#">Notificação 02</a></li>
          <li><a href="#">Notificação 03</a></li>
        </ul>
      </drop-down>
    </li>
    <li>
      <a href="#" data-toggle="dropdown" class="dropdown-toggle"
        ><i class="material-icons">person</i>
        <p>Perfil</p></a
      >
    </li>
  </ul>
</template>
<script>
export default {
  data() {
    return {
      search: null,
      selectedEmployee: null,
      employees: [
        "Colaborador 01",
        "Colaborador 02",
        "Colaborador 03",
        "Colaborador 04",
      ],
    };
  },
};
</script>
