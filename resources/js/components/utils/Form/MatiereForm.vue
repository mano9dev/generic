<template>
  <div>
    <validation-observer :ref="id" v-slot="{ invalid }">
      <form @submit.prevent="submitForm">
        <div class="row">
          <div class="col-4">
            <validator-provider name="codeMatiere" rules="required">
              <div slot-scope="{ errors }">
                  <div class="md-form">
                    <input type="text" placeholder="Code Matière" v-model="m.codeMatiere" id="codeMatiere" class="form-control">
                    <!-- <label for="libellefil" >Code Matière</label> -->
                    <p class="text-danger">{{ errors[0] }}</p>
                  </div>
                </div>
            </validator-provider>
          </div>
          <div class="col-8">
            <validator-provider name="libelleMatiere" rules="required">
              <div slot-scope="{ errors }">
                  <div class="md-form">
                    <input type="text" placeholder="Libelle de la Matiere" v-model="m.nom" id="libelleMatiere" class="form-control">
                    <!-- <label for="libellefil" >Code Matière</label> -->
                    <p class="text-danger">{{ errors[0] }}</p>
                  </div>
                </div>
            </validator-provider>
          </div>
        </div>

        <button class="btn btn-sm btn-primary" type="submit" :disabled="invalid" > {{btnTitle}} </button>
      </form>
    </validation-observer>
  </div>
</template>

<script>
export default {
  props : {
    btnTitle : {
      type : String,
      default : 'Enregistrer'
    },
    matiere : {
      type : Object,
      default(){
        return {

        }
      }
    },
    onSubmitForm:{
      type : Function,
      default(matiere){
        this.$refs[this.id].validate()
        .then(valid =>{

          if (valid) {
            this.$store.dispatch('matiere/createMatiere', matiere)
            .then(response => {
              this.e={}
              this.$nextTick(() => { this.$refs[this.id].reset() })
            })
          }
        })
      }
    }
  },

  data(){
    return {
      m : {}
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