<template>
  <md-card>
    <md-card-header :data-background-color="dataBackgroundColor">
      <h4 class="title">Logoff efetuado</h4>
      <p class="category">Sessão encerrada com sucesso.</p>
    </md-card-header>

    <md-card-content>
      <div data-v-37cb362d="" class="md-layout text-center">
        <div
          class="
            md-layout-item
            md-size-100
            md-medium-size-100
            md-small-size-100
            md-xsmall-size-100
          "
        >
          <div class="container md-offset">
            <div class="md-card md-card-login md-theme-default">
              <div class="md-card-header md-card-header-green">
                <h4 class="title">Efetuar Login novamente...</h4>
              </div>
              <form action="/#/dashboard">
              <div class="md-card-content">
                <div class="md-field md-form-group md-theme-default">
                  <i class="md-icon md-icon-font md-theme-default">face</i
                  ><label for="md-input-rh1cdytw">Usuário</label
                  ><input type="text" id="md-input-rh1cdytw" class="md-input" />
                </div>
                <div class="md-field md-form-group md-theme-default">
                  <i class="md-icon md-icon-font md-theme-default"
                    >lock_outline</i
                  ><label for="md-input-z015anzec">Senha</label
                  ><input
                    type="text"
                    id="md-input-z015anzec"
                    class="md-input"
                  />
                </div>
              </div>
              
              <div class="md-card-actions md-alignment-right">
                <button
                  type="submit"
                  class="md-button md-simple md-success md-lg md-theme-default"
                >
                  <div class="md-ripple">
                    <div class="md-button-content">Efetuar Login</div>
                  </div>
                </button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </md-card-content>
  </md-card>
</template> 