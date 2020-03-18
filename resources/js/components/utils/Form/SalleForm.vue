<template>
  <div>
    <validation-observer :ref="id" v-slot="{ invalid }">
      <form @submit.prevent="submitForm">
        <div class="row">
          <div class="col-4">
            <validator-provider name="codeSalle" rules="required">
              <div slot-scope="{ errors }">
                <div class="md-form">
                  <input type="text" placeholder="Code salle" v-model="s.codeSalle" id="codeSalle" class="form-control">
                  <!-- <label for="libellefil" >Libelle de la filière</label> -->
                  <p class="text-danger">{{ errors[0] }}</p>
                </div>
              </div>
            </validator-provider>
          </div>
          <div class="col-6">
            <validator-provider name="libelleSalle" rules="required">
              <div slot-scope="{ errors }">
                <div class="md-form">
                  <input type="text" placeholder="Libelle de la salle" v-model="s.libelleSalle" id="libelleSalle" class="form-control">
                  <!-- <label for="libelleSalle">Code de la filière</label> -->
                  <p  class="text-danger">{{ errors[0] }}</p>
                </div>
              </div>
            </validator-provider>
          </div>
        </div>
      </form>
      <button class="btn btn-sm btn-primary" type="submit" :disabled="invalid" > {{btnTitle}} </button>
    </validation-observer>
  </div>
</template>

<script>
export default {
  props : {
    id : String,
    btnTitle : {
      type : String,
      default : 'Enregistrer'
    },
    salle : {
      type : Object,
      default(){
        return {

        }
      }
    },
    onSubmitForm : {
      type : Function,
      default(salle){
        this.$refs[this.id].validate()
        .then(valid =>{

          if (valid) {
            this.$store.dispatch('salle/createSalle', salle)
            .then(response => {
              this.e={}
              this.$nextTick(() => { this.$refs[this.id].reset() })
            })
          }
        })
      }
    }
  },

  data (){
    return {
      s : {}
    }
  },

  methods : {
    submitForm(matiere){
      this.onSubmitForm(matiere);
    }
  }
}
</script>

<style>

</style>