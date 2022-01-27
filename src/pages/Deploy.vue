<template>
  <div class="content">
    <div class="md-layout">
      <div
        class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100"
      >
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title">Deploy Automatizado</h4>
            <p class="category">Relação de Deploys automatizados na plataforma com seus respectivos status</p>
          </md-card-header>
          <md-card-content>
            <deploy-table table-header-color="green"></deploy-table>
          </md-card-content>
        </md-card>
      </div>

      
    </div>
  </div>
</template>

<script>
import { DeployTable } from "@/components";

export default {
  components: {
    DeployTable,
  },
};
</script>
