import DashboardLayout from "@/pages/Layout/DashboardLayout.vue";
import DashboardLayoutOff from "@/pages/Layout/DashboardLayoutOff.vue";

import Dashboard from "@/pages/Dashboard.vue";
import UserProfile from "@/pages/UserProfile.vue";
import Tests from "@/pages/Tests.vue";
import Deploy from "@/pages/Deploy.vue";
import Services from "@/pages/Services.vue";
import Docs from "@/pages/Docs.vue";
import Notifications from "@/pages/Notifications.vue";
import Login from "@/pages/Login.vue";
import Logoff from "@/pages/Logoff.vue";
import Qa from "@/pages/Qa.vue";
import Bugs from "@/pages/Bugs.vue"; 

const routes = [{
  path: "/",
  component: DashboardLayout,
  redirect: "/dashboard",
  children: [{
      path: "dashboard",
      name: "Dashboard",
      component: Dashboard,
    },
    {
      path: "userProfile",
      name: "Perfil",
      component: UserProfile,
    },
    {
      path: "tests",
      name: "Testes Automatizados",
      component: Tests,
    },
    {
      path: "services",
      name: "Serviços",
      component: Services,
    },
    {
      path: "docs",
      name: "Conhecimentos",
      component: Docs,
    },
    {
      path: "deploy",
      name: "Deploy Automático",
      component: Deploy,
    },

    {
      path: "qa",
      name: "Qa",
      component: Qa,
    },
    {
      path: "bugs",
      name: "Bugs",
      component: Bugs,
    },
    {
      path: "notifications",
      name: "Notifications",
      component: Notifications,
    },
  ],
}, {
  path: "/",
  component: DashboardLayoutOff,
  children: [{
      path: "login",
      name: "Login",
      component: Login,
    },
    {
      path: "logoff",
      name: "Logoff",
      component: Logoff,
    },
  ],
}, ];

export default routes;