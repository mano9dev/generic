<template>
  <div>
    <v-form 
    v-model="form.valid"
    lazy-validation
    >
      <v-text-field v-model="data.enseignant.nom" 
      :counter="countDefault" :rules="form.rules.namesRules()" label="Nom" required>
      </v-text-field>

      <v-text-field v-model="data.enseignant.prenoms" 
      :counter="countDefault" :rules="form.rules.namesRules()" label="Prenoms" required>
      </v-text-field>

      <v-text-field v-model="data.enseignant.email" 
      :counter="countDefault" :rules="form.rules.emailRules()" label="Email" required>
      </v-text-field>
      
      <v-text-field v-model="data.enseignant.telephone" 
      :counter="countDefault" :rules="form.rules.namesRules()" label="Telephone" required>
      </v-text-field>

      <v-text-field v-model="data.enseignant.adresse" 
      :counter="countDefault" :rules="form.rules.namesRules()" label="Adresse" >
      </v-text-field>

    </v-form>
			</div>
</template>

<script>
export default {
  props : {
    data : {
        type : [Array,Object],
        default (){
          return {
            enseignant : {}
          }
        }
      }
  },
  data(){
    return {
      form:{
					valid : true,
					countDefault : 255,
					rules:{
						namesRules(){
						return [
							v => !!v || 'This field is required',
							v => (v && v.length <= 255) || 'Name must be less than 10 characters'
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
    }
  }
}
</script>
