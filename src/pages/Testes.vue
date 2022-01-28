<template>
  <div class="content">
    <div class="md-layout">
      <div
        class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100"
      >
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title">Testes Automatizados</h4>
            <p class="category">Relação de Testes automatizados na plataforma com seus respectivos status (Jenkins / PHPUnit / Selenium IDE / Selenium webdriver)</p>
          </md-card-header>
          <md-card-content>
            <tests-table table-header-color="green"></tests-table>
          </md-card-content>
        </md-card>
      </div>

      
    </div>
  </div>
</template>

<script>
import { TestsTable } from "@/components";

export default {
  components: {
    TestsTable,
  },
};
</script>
