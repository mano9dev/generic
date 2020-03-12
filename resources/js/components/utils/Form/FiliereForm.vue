<template>
     <!-- validation-observer -->
     <div>
      <validation-observer ref="form" v-slot="{ invalid }">
        <form @submit.prevent="submitForm(fil)">
          <div class="row">
            <div class="col-6">
              <validator-provider name="libelleFil" rules="required">
                <div slot-scope="{ errors }">
                  <div class="md-form">
                    <input type="text" placeholder="Libelle de la filière" v-model="fil.libelleFil" id="libellefil" class="form-control">
                    <!-- <label for="libellefil" >Libelle de la filière</label> -->
                    <p class="text-danger">{{ errors[0] }}</p>
                  </div>
                </div>
              </validator-provider>
            </div>
            <div class="col-6">
              <validator-provider name="codefil" rules="required">
                <div slot-scope="{ errors }">
                  <div class="md-form">
                    <input type="text" placeholder="Code de la filière" v-model="fil.codeFil" id="codefil" class="form-control">
                    <!-- <label for="codefil">Code de la filière</label> -->
                    <p  class="text-danger">{{ errors[0] }}</p>
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
import { mapActions, mapState } from "vuex";
export default {
  props : {
    btnTitle:{
      type: String,
      default : 'Enregistrer'
    },
    filiere : {
      type: Object,
      default (){
        return {}
      }
    },
    onSubmitForm:{
      type : Function,
      default(filiere){
        this.$refs.form.validate()
        .then(valid => {
          alert('Validate', valid)
          if (valid) {
            this.createFiliere(filiere)
            .then(response => {
              if (response != null) {
                this.fil = {}
                this.$nextTick(() =>{
                  this.$refs.form.reset();
                })
              }
            })
          }
        })
        
      }
    }
  },

  data(){
    return {
      fil : this.filiere
    }
  },

  computed : {
    ...mapState({
      createdStatus : state => state.filiere.createdStatus
    })
  },
  
  methods : {
    submitForm(filiere){
      this.onSubmitForm(filiere);
    },
    ...mapActions('filiere',[
      'createFiliere'
    ])
  }
}
</script>

<style>

</style>