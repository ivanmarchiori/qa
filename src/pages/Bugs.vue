<template>
  <div class="content">
    <div class="md-layout">
      <div class="md-layout-item md-medium-size-100 md-size-100">
        <edit-bugs-form data-background-color="green"> </edit-bugs-form>
      </div> 
 
    </div>
  </div>
</template>

<script>
import { EditBugsForm } from "@/pages";

export default {
  components: {
    EditBugsForm,
  },
};
</script>
