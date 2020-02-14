<template>
  <div>
    <v-form 
      v-model="form.valid"
      lazy-validation
      >
        <v-text-field v-model="enseignant.nom" 
        :counter="form.countDefault" :rules="form.rules.namesRules()" label="Nom" required>
        </v-text-field>

        <v-text-field v-model="enseignant.prenoms" 
        :counter="form.countDefault" :rules="form.rules.namesRules()" label="Prenoms" required>
        </v-text-field>

        <v-text-field v-model="enseignant.email" 
        :counter="form.countDefault" :rules="form.rules.emailRules()" label="Email" required>
        </v-text-field>
        
        <v-text-field v-model="enseignant.telephone" 
        :counter="form.countDefault" :rules="form.rules.namesRules()" label="Telephone" required>
        </v-text-field>

        <v-text-field v-model="enseignant.adresse" 
        :counter="form.countDefault" :rules="form.rules.namesRules()" label="Adresse" >
        </v-text-field>
        <button class="btn btn-sm btn-primary" @click.prevent="submitForm(enseignant)"> {{btnTitle}} </button>
    </v-form>
  </div>
</template>

<script>
export default {
  props : {
    btnTitle : {
      type: String,
      default : 'Enregistrer'
    },
    onSubmitForm:{
      type: Function,
      default(enseignant){
        Ecole.createEnseignant(enseignant)
        .then(response => {
          console.log('created',response.data)
          this.enseignant={};
        })
        .catch(error => console.log('error',error));
      }
    }
  },

  data() {
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
      enseignant : {}
    }
  },

  methods : {
    submitForm(enseignant){
      this.onSubmitForm(enseignant);
    }
  },

  mounted(){
    Echo.channel('test')
    .listen('EnseignantCreated', (e) => {
        console.log('event data',e);
    });
  }
}
</script>

<style>

</style>