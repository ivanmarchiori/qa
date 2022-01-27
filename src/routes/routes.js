import DashboardLayout from "@/pages/Layout/DashboardLayout.vue";

import Dashboard from "@/pages/Dashboard.vue";
import UserProfile from "@/pages/UserProfile.vue";
import Testes from "@/pages/Testes.vue";
import Deploy from "@/pages/Deploy.vue";
import Servicos from "@/pages/Servicos.vue";
import Documentacao from "@/pages/Documentacao.vue";  
import Maps from "@/pages/Maps.vue";
import Notifications from "@/pages/Notifications.vue";
import Login from "@/pages/Login.vue";
import Logoff from "@/pages/Logoff.vue";

const routes = [
  {
    path: "/",
    component: DashboardLayout,
    redirect: "/dashboard",
    children: [
      {
        path: "dashboard",
        name: "Dashboard",
        component: Dashboard,
      },
      {
        path: "user",
        name: "Perfil",
        component: UserProfile,
      },
      {
        path: "testes",
        name: "Testes Automatizados",
        component: Testes,
      },
      {
        path: "servicos",
        name: "Serviços",
        component: Servicos,
      },
      {
        path: "docs",
        name: "Documentação",
        component: Documentacao,
      },
      {
        path: "deploy",
        name: "Deploy Automático",
        component: Deploy,
      },
      
      {
        path: "login",
        name: "Login",
        component: Login,
      },
      {
        path: "logoff",
        name: "Logoff",
        component: Logoff,
      },
      {
        path: "maps",
        name: "Maps",
        meta: {
          hideFooter: true,
        },
        component: Maps,
      },
      {
        path: "notifications",
        name: "Notifications",
        component: Notifications,
      } ,
    ],
  },
];

export default routes;
