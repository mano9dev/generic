<template>
  <div>
    <!-- 
      libelleclasse | Filiere | Annee scolaire
      Niveau | Groupe | Spécialite 
      Effectig
     -->
    <form @submit.prevent="submitForm(classe)">
      <div class="row">
        <div class="col-4">
          <validator-provider name="libelleClasse" rules="required">
            <div slot-scope="{ errors }" class="md-form my-0">
              <input type="text" class="form-control" placeholder="Libelle de la classe" v-model="classe.libelleClasse">
              <p>{{ errors[0] }}</p>
            </div>
          </validator-provider>
        </div>
        <div class="col-4">
          <validator-provider name="fil_codeFil" rules="required">
            <div slot-scope="{ errors }" class="md-form my-0">
              <input type="text" class="form-control" placeholder="Code Filiere" v-model="classe.fil_codeFil">
              <p>{{ errors[0] }}</p>
            </div>
          </validator-provider>
        </div>
        <div class="col-4">
          <validator-provider name="annee_sco" rules="required">
            <div slot-scope="{ errors }" class="md-form my-0">
              <input type="text" class="form-control" placeholder="Annee scolaire" v-model="classe.annee_sco">
              <p>{{ errors[0] }}</p>
            </div>
          </validator-provider>
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <validator-provider name="niveau" rules="required">
            <div slot-scope="{ errors }" class="md-form my-0">
              <input type="text" class="form-control" placeholder="Niveau" v-model="classe.niveau">
              <p>{{ errors[0] }}</p>
            </div>
          </validator-provider>
        </div>
        <div class="col-3">
          <validator-provider name="groupe" rules="required">
            <div slot-scope="{ errors }" class="md-form my-0">
              <input type="text" class="form-control" placeholder="Groupe" v-model="classe.groupe">
              <p>{{ errors[0] }}</p>
            </div>
          </validator-provider>
        </div>
        <div class="col-3">
          <validator-provider name="speciatile" rules="required">
            <div slot-scope="{ errors }" class="md-form my-0">
              <input type="text" class="form-control" placeholder="Specialite" v-model="classe.speciatile">
              <p>{{ errors[0] }}</p>
            </div>
          </validator-provider>
        </div>
        <div class="col-3">
          <validator-provider name="effectif" rules="required">
            <div slot-scope="{ errors }" class="md-form my-0">
              <input type="text" class="form-control" placeholder="Effectif" v-model="classe.effectif">
              <p>{{ errors[0] }}</p>
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
    onSubmitForm: {
      type : Function,
      default(classe){
        Ecole.createClasse(classe).
        then( response => {
          console.log('response',response);

          if (response.data.created) {
            // DO it after created classe
          }
        })
      }
    }
  },

  data(){
    return {
      classe:{}
    }
  },

  methods: {
    submitForm(classe){
      this.onSubmitForm(classe);
    }
  }
  
}
</script>
