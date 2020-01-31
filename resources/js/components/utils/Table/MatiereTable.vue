<template>
  <div>
     <table class="table table-striped">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Code Matiere</th>
          <th>Matiere</th>
          <th >Activité</th>
          <th style="width: 40px"></th>
        </tr>
      </thead>
      <tbody v-if="matieres.length > 0">
        <tr v-for="(matiere, key) in matieres" :key="matiere.id" >
          <td>{{key+1}}</td>
          <td>{{matiere.code}} </td>
          <td>{{matiere.libelle}} </td>
          <td> 
            <span class="badge bg-warning mr-3">6</span>
            <span class="badge bg-success mr-3">3</span>
            <span class="badge bg-primary mr-3">8</span>
          </td>
          <td> 
            <button class="btn btn-sm btn-primary" @click="$root.$emit('matiere:edit',matiere)"> <i class="fas fa-sm fa-edit"></i> </button>
          </td>
        </tr>
      </tbody>
      <tbody v-else>
        <tr>
          <td colspan="5">Aucune donnee disponible</td>
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
      matieres : []
    }
  },

  mounted(){
    
    Ecole.getMatieres()
    .then(response => {
      this.matieres = response.data
    })
    .catch(error => console.log( error))
  },

  computed : {
    
  }
}
</script>

<style>

</style>