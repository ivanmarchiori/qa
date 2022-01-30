<template>
  <div class="content">
    <div class="md-layout">
      
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title">Usuários Cadastrados</h4>
            <p class="category">Lista de colaboradores do time de QA</p>
          </md-card-header>
          <md-card-content>
            <users-table></users-table>
          </md-card-content>
        </md-card>
      </div>

       
  </div>
</template> 

<script>
import { UsersTable } from "@/components";

export default {
  components: {
    UsersTable,
  },
 
  name: "user-table", 
};
</script>
<style></style>
