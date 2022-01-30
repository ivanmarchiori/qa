<template>
  <div class="wrapper">
    <div class="main">
      <dashboard-content> </dashboard-content>

      <content-footer v-if="!$route.meta.hideFooter"></content-footer>
    </div>
  </div>
</template>

<script>
import ContentFooter from "./ContentFooter.vue";
import DashboardContent from "./Content.vue";

export default {
  components: {
    DashboardContent,
    ContentFooter,
  },
  data() {},
};
</script>
