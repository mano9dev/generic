<template>
  <div>
     <table class="table table-striped">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Code Filière</th>
          <th>Nom de la filière</th>
          <th >Nbre de classes dans la filière</th>
          <th style="width: 40px"></th>
        </tr>
      </thead>
      <tbody v-if="filieres.length > 0">
        <tr v-for="(filiere, key) in filieres" :key="filiere.id" >
          <td>{{key+1}}</td>
          <td>{{filiere.codeFil}} </td>
          <td>{{filiere.libelleFil}} </td>
          <td> 
            <span class="badge bg-primary mr-3">8</span>
          </td>
          <td> 
            <button class="btn btn-sm btn-primary" @click="$root.$emit('filiere:edit',filiere)"> <i class="fas fa-sm fa-edit"></i> </button>
          </td>
        </tr>
      </tbody>
      <tbody v-else>
        <tr>
          <td colspan="5"><p class="text-center">Aucune donnee disponible</p></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props :{
    
  },

  data () {
    return {
      filieres : []
    }
  },

  mounted(){
    /* this.$http.get('/api/structure/matiere').then( response => {
      
      this.filieres= response.data;
      
    })
    .catch(error => console.log( error)); */
    Ecole.getFilieres()
    .then( response => {
        console.log('response',response)
        this.filieres=response.data
      })
    .catch(error => console.log('error',error));
  },

  computed : {
    
  }
}
</script>

<style>

</style>