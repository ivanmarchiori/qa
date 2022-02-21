<template>
  <footer class="footer">
    <div class="container">
      <nav>
        <ul>
          <li>
            <a href="/#/dashboard"> Inicio </a>
          </li>
          <li>
            <a href="/#/qa">Quality Assurance</a>
          </li>
          <li>
            <a href="/#/notifications"> Conhecimentos </a>
          </li>
          <li>
            <a href="/#/bugs"> Reportar Erros </a>
          </li>
          <li>
            <a href="/#/login"> Efetuar Login * </a>
          </li>
        </ul>
      </nav>
      <div class="copyright text-center">
        &copy; {{ new Date().getFullYear() }}
        <a href="/#/team" target="_blank">By Squad QA</a
        >, feito para <i class="fa fa-heart heart"></i> melhores processos
      </div>
    </div>
  </footer>
</template>
<script>
export default {};
</script>
<style></style>
