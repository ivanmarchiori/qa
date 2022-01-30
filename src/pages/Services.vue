<template>
  <div class="content">
    <div class="md-layout">
      <div
        class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100"
      >
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title">Serviços</h4>
            <p class="category">Relação de Serviços disponíveis e seus Status de Funcionamentos</p>
          </md-card-header>
          <md-card-content>
            <services-table></services-table>
          </md-card-content>
        </md-card>
      </div>

      
    </div>
  </div>
</template> 

<script>
import { ServicesTable } from "@/components";

export default {
  components: {
    ServicesTable,
  },
};
</script>
