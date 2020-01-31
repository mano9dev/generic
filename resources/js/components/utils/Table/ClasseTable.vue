<template>
  <div>
     <table class="table table-striped">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Classe</th>
          <th>Filière</th>
          <th >codeClasse</th>
          <th >Niveau</th>
          <th >Groupe</th>
          <th >Activité</th>
          <th style="width: 40px"></th>
        </tr>
      </thead>
      <tbody v-if="classes.length > 0">
        <tr v-for="(classe, key) in classes" :key="key" >
          <td>{{key+1}}</td>
          <td>{{classe.libelleClasse}} </td>
          <td>{{classe.fil_codeFil}} </td>
          <td>{{classe.codeClasse}} </td>
          <td>{{classe.niveau}} </td>
          <td>{{classe.groupe}} </td>
          <td> 
            <span class="badge bg-warning mr-3">6</span>
            <span class="badge bg-success mr-3">3</span>
            <span class="badge bg-primary mr-3">8</span>
          </td>
          <td> 
            <button class="btn btn-sm btn-primary" @click="$root.$emit('classe:edit',classe)"> <i class="fas fa-sm fa-edit"></i> </button>
          </td>
        </tr>
      </tbody>
      <tbody v-else>
        <tr>
          <td colspan="7">Aucune donnee disponible</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {

  data(){
    return {
      classes: []
    }
  },
  mounted(){
    Ecole.getClasses()
    .then(response => {
      console.log('response',response);

      this.classes= response.data
    })
  }

}
</script>

<style>

</style>