<template>
  <div>
    <!-- 
      libelleclasse | Filiere | Annee scolaire
      Niveau | Groupe | Spécialite 
      Effectif
     -->
     <validation-observer :ref="id" v-slot="{ invalid }"> 
      <form @submit.prevent="submitForm(c)">
        <div class="row">
          <div class="col-4">
            <validator-provider name="libelleClasse" rules="required">
              <div slot-scope="{ errors }" class="md-form my-0">
                <input type="text" class="form-control" placeholder="Libelle de la classe" v-model="c.libelleClasse">
                <p class="text-danger">{{ errors[0] }}</p>
              </div>
            </validator-provider>
          </div>
          <div class="col-4">
            <validator-provider name="fil_codeFil" rules="required">
              <div slot-scope="{ errors }" class="md-form my-0">
                <input type="text" class="form-control" placeholder="Code Filiere" v-model="c.fil_codeFil">
                <p class="text-danger">{{ errors[0] }}</p>
              </div>
            </validator-provider>
          </div>
          <div class="col-4">
            <validator-provider name="annee_sco" rules="required">
              <div slot-scope="{ errors }" class="form-group my-0">
                <!-- <input type="text" class="form-control" placeholder="Annee scolaire" v-model="c.annee_sco"> -->
                <!-- <label>Annee scolaire</label> -->
                <v-select label="promotion" v-model="c.promo_id" :reduce="n => n.id" :options="$store.state.annee_scolaire"></v-select>
                <p class="text-danger">{{ errors[0] }}</p>
              </div>
            </validator-provider>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <validator-provider name="niveau" rules="required">
              <div slot-scope="{ errors }" class="form-group my-0">
                <!-- <label>Niveau</label> -->
                <!-- <input type="text" class="form-control" placeholder="Niveau" v-model="c.niveau"> -->
                <v-select placeholder="Niveau" label="annee" v-model="c.niveau" :reduce="n => n.id" :options="$store.state.niveau" ></v-select>
                <p class="text-danger">{{ errors[0] }}</p>
              </div>
            </validator-provider>
          </div>
          <div class="col-3">
            <validator-provider name="groupe" rules="">
              <div slot-scope="{ errors }" class="md-form my-0">
                <input type="text" class="form-control" placeholder="Groupe" v-model="c.groupe">
                <p  class="text-danger">{{ errors[0] }}</p>
              </div>
            </validator-provider>
          </div>
          <div class="col-3">
            <validator-provider name="specialite" rules="">
              <div slot-scope="{ errors }" class="md-form my-0">
                <input type="text" class="form-control" placeholder="Specialite" v-model="c.specialite">
                <p  class="text-danger">{{ errors[0] }}</p>
              </div>
            </validator-provider>
          </div>
          <div class="col-3">
            <validator-provider name="effectif" rules="required">
              <div slot-scope="{ errors }" class="md-form my-0">
                <input type="text" class="form-control" placeholder="Effectif" v-model="c.effectif">
                <p class="text-danger">{{ errors[0] }}</p>
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
    btnTitle:{
      type: String,
      default : 'Enregistrer'
    },
    classe : {
      type: Object,
      required : true,
      default(){
        return {
          promo_id : 1,
          fil_codeFil : 'IG',
          specialite : '',
          groupe : '',
          niveau : 1
        }
      }
    },
    id : String,
    onSubmitForm: {
      type : Function,
      default(classe){
        this.$refs[this.id].validate()
        .then( valid => {

          if (valid) {
            this.$store.dispatch('classe/createClasse', classe)
            .then( response => {
              this.c={}
              this.$nextTick(() => { this.$refs[this.id].reset() })          
            })
          }
        })
      }
    }
  },

  data(){
    return {
      c:this.copy(this.classe)
    }
  },

  methods: {
    submitForm(c){
      this.onSubmitForm(c);
    },
    copy(classe){
      const keys=['id','fil_codeFil','libelleClasse','niveau','groupe','specialite','promo_id','effectif'];
      const copy={};
      for (const key of keys) {
        if (classe.hasOwnProperty(key)) {
          copy[key]=classe[key]
        }
      }
      // console.log('original',classe);
      // console.log('copy',copy);
      return copy;
    }
  },
  mounted(){
    // this.c=this.copy(this.classe)
  }
  
}
</script>
