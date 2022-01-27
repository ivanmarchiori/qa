<template>
  <div class="wrapper" :class="{ 'nav-open': $sidebar.showSidebar }">
    <notifications></notifications>

    <side-bar
      :sidebar-item-color="sidebarBackground"
      :sidebar-background-image="sidebarBackgroundImage"
    >
      <mobile-menu slot="content"></mobile-menu>
       
      <sidebar-link to="/dashboard">
        <md-icon>dashboard</md-icon>
        <p>Dashboard</p>
      </sidebar-link>

      <sidebar-link to="/testes">
        <md-icon>content_paste</md-icon>
        <p>Testes Automatizados</p>
      </sidebar-link>

      <sidebar-link to="/deploy">
        <md-icon>content_paste</md-icon>
        <p>Deploy Automático</p>
      </sidebar-link>

      <sidebar-link to="/servicos">
        <md-icon>location_on</md-icon>
        <p>Serviços</p>
      </sidebar-link>

      <sidebar-link to="/docs">
        <md-icon>library_books</md-icon>
        <p>Documentação</p>
      </sidebar-link>

      <sidebar-link to="/notifications">
        <md-icon>notifications</md-icon>
        <p>Notificações</p>
      </sidebar-link>

      <sidebar-link to="/user">
        <md-icon>person</md-icon>
        <p>Usuários</p>
      </sidebar-link> 

    
      <sidebar-link to="/logoff">
        <md-icon>logout</md-icon>
        <p>Logoff</p>
      </sidebar-link>
    </side-bar>


    <div class="main-panel">
      <top-navbar></top-navbar>

      <fixed-plugin
        :color.sync="sidebarBackground"
        :image.sync="sidebarBackgroundImage"
      >
      </fixed-plugin>

      <dashboard-content> </dashboard-content>

      <content-footer v-if="!$route.meta.hideFooter"></content-footer>
    </div>
  </div>
</template>

<script>
import TopNavbar from "./TopNavbar.vue";
import ContentFooter from "./ContentFooter.vue";
import DashboardContent from "./Content.vue";
import MobileMenu from "@/pages/Layout/MobileMenu.vue";
import FixedPlugin from "./Extra/FixedPlugin.vue";

export default {
  components: {
    TopNavbar,
    DashboardContent,
    ContentFooter,
    MobileMenu,
    FixedPlugin,
  },
  data() {
    return {
      sidebarBackground: "green",
      sidebarBackgroundImage: require("@/assets/img/sidebar-2.jpg"),
    };
  },
};
</script>
