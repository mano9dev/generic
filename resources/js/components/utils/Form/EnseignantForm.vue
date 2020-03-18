<template>
  <div>
    <validation-observer :ref="id" v-slot="{ invalid }" >
      <form @submit.prevent="submitForm(fil)">
        <div class="row">
          <div class="col-6">
            <validator-provider name="nom" rules="required">
                <div slot-scope="{ errors }">
                  <div class="md-form">
                    <input type="text" placeholder="Nom" v-model="e.nom" id="nom" class="form-control">
                    <!-- <label for="libellefil" >Libelle de la filière</label> -->
                    <p class="text-danger">{{ errors[0] }}</p>
                  </div>
                </div>
              </validator-provider>
          </div>
          <div class="col-6">
            <validator-provider name="prenoms" rules="required">
                <div slot-scope="{ errors }">
                  <div class="md-form">
                    <input type="text" placeholder="Prénoms" v-model="e.prenoms" id="prenoms" class="form-control">
                    <!-- <label for="libellefil" >Libelle de la filière</label> -->
                    <p class="text-danger">{{ errors[0] }}</p>
                  </div>
                </div>
              </validator-provider>
          </div>
        </div>
        <div class="col-12">
          <validator-provider name="email" rules="required|email">
            <div slot-scope="{ errors }">
              <div class="md-form">
                <input type="email" placeholder="Email" v-model="e.email" id="email" class="form-control">
                <!-- <label for="libellefil" >Libelle de la filière</label> -->
                <p class="text-danger">{{ errors[0] }}</p>
              </div>
            </div>
          </validator-provider>
        </div>
        <div class="col-12">
          <validator-provider name="adresse" rules="required|email">
            <div slot-scope="{ errors }">
              <div class="md-form">
                <input type="text" placeholder="Adresse" v-model="e.adresse" id="adresse" class="form-control">
                <!-- <label for="libellefil" >Libelle de la filière</label> -->
                <p class="text-danger">{{ errors[0] }}</p>
              </div>
            </div>
          </validator-provider>
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
      type: String,
      default : 'Enregistrer'
    },

    id : String,
    
    enseignant: Object,
    
    onSubmitForm:{
      type: Function,
      default(enseignant){
        this.$refs[this.id].validate()
        .then(valid =>{

          if (valid) {
            this.$store.dispatch('enseignant/createEnseignant', enseignant)
            .then(response => {
              this.e={}
              this.$nextTick(() => { this.$refs[this.id].reset() })
            })
          }
        })
      }
    }
  },

  data() {
    return {
      e : {}
    }
  },

  methods : {
    submitForm(enseignant){
      this.onSubmitForm(enseignant);
    }
  },

  mounted(){
    /* Echo.channel('test')
    .listen('EnseignantCreated', (e) => {
        console.log('event data',e);
    }); */
  }
}
</script>

<style>

</style>