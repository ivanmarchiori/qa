<template>
  <div class="content">
    <div class="md-layout">

      <div class="md-layout-item md-medium-size-100 md-size-100">
        <edit-docs-form data-background-color="green"> </edit-docs-form>
      </div>
      <div
        class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-100"
      >
        <md-card>
          <md-card-header data-background-color="green">
            <h4 class="title">Base de Conhecimentos</h4>
            <p class="category">Artigos e Recursos para processos executados em QA</p>
          </md-card-header>
          <md-card-content>
            <doc-table table-header-color="green"></doc-table>
          </md-card-content>
        </md-card>
      </div>

      
    </div>
  </div>
</template>

<script>
import { EditDocsForm } from "@/pages";
import { DocTable } from "@/components";

export default {
  components: {
    DocTable,
    EditDocsForm
  },
};
</script>
