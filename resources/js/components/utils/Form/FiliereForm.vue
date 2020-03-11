<template>
  <div>
    <!-- <form >
      <v-text-field v-model="filiere.codeFil" 
        :counter="form.countDefault" :rules="form.rules.namesRules('Code Filière')" label="Code Filière" required>
        </v-text-field>
      <v-text-field v-model="filiere.libelleFil" 
        :counter="form.countDefault" :rules="form.rules.namesRules('Libelle Filière')" label="Libelle Filière" required>
        </v-text-field>
        <button class="btn btn-sm btn-primary" @click.prevent="submitForm(filiere)"> {{btnTitle}} </button>
    </form> -->

    <form @submit.prevent="submitForm(filiere)">
      <div class="row">
        <div class="col-6">
          <validator-provider name="libelleFil" rules="required">
            <div slot-scope="{ errors }">
              <div class="md-form">
                <input type="text" placeholder="Libelle de la filière" v-model="filiere.libelleFil" id="libellefil" class="form-control">
                <!-- <label for="libellefil" >Libelle de la filière</label> -->
                <p>{{ errors[0] }}</p>
              </div>
            </div>
          </validator-provider>
        </div>
        <div class="col-6">
          <validator-provider name="codefil" rules="required">
            <div slot-scope="{ errors }">
              <div class="md-form">
                <input type="text" placeholder="Code de la filière" v-model="filiere.codeFil" id="codefil" class="form-control">
                <!-- <label for="codefil">Code de la filière</label> -->
                <p>{{ errors[0] }}</p>
              </div>
            </div>
          </validator-provider>
        </div>
      </div>
      <button class="btn btn-sm btn-primary" type="submit" > {{btnTitle}} </button>
    </form>
  </div>
</template>

<script>
export default {
  props : {
    btnTitle:{
      type: String,
      default : 'Enregistrer'
    },
    onSubmitForm:{
      type : Function,
      default(filiere){
        Ecole.createFiliere(filiere)
        .then (response => {
          console.log('response',response)
        })
        .catch( error => console.log('error',error));
      }
    }
  },

  data(){
    return {
      form:{
					valid : true,
					countDefault : 255,
					rules:{
						namesRules(name=""){
              name = name==""? 'This' : name;
						return [
							v => !!v || `${name} field is required`,
							v => (v && v.length <= 255) || 'Name must be less than 255 characters'
						]
						},
						emailRules(){
							return [
								v => !!v || 'E-mail is required',
								v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
							]
						}
					}
      },
      filiere : {}
    }
  },
  methods : {
    submitForm(filiere){
      this.onSubmitForm(filiere);
    }
  }
}
</script>

<style>

</style>