<template>
  <div>
    <form >
      <v-text-field v-model="filiere.codeFil" 
        :counter="form.countDefault" :rules="form.rules.namesRules('Code Filière')" label="Code Filière" required>
        </v-text-field>
      <v-text-field v-model="filiere.libelleFil" 
        :counter="form.countDefault" :rules="form.rules.namesRules('Libelle Filière')" label="Libelle Filière" required>
        </v-text-field>
        <button class="btn btn-sm btn-primary" @click.prevent="submitForm(filiere)"> {{btnTitle}} </button>
    </form>
  </div>
</template>

<script>
export default {
  props : {
    btnTitle:{
      type: String,
      default : 'Enregistrer'
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
      // ecole.createFiliere(filiere);
      console.log('emit submit form',filiere);
      
      this.$emit('submitForm',filiere);
    },
    createFiliere(filiere){
      ecole.createFiliere(filiere);
    }
  }
}
</script>

<style>

</style>