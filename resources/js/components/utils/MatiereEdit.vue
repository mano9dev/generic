<template>
  <div>
    <!-- Modal Form -->
    <div class="modal fade" :id="id">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <slot name="header"> 
              <h4 class="modal-title" v-text="title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </slot>
          </div>
          <div class="modal-body">
            <slot> 
              <h4>Custom Content Below</h4>
              <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="edit-tab" data-toggle="pill" href="#edit" role="tab" aria-controls="edit" aria-selected="true">Editer</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="assignement-tab" data-toggle="pill" href="#assignement" role="tab" aria-controls="assignement" aria-selected="false">Assignement</a>
                </li>
              </ul>
              <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade show active" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                 <div class="container">
                   <div class="row">
                     <div class="col-md-12">
                       <form >
                        <v-text-field v-model="data.matiere.code" 
                          :counter="form.countDefault" :rules="form.rules.namesRules('Code')" label="Code Matiere" required>
                          </v-text-field>
                        <v-text-field v-model="data.matiere.libelle" 
                          :counter="form.countDefault" :rules="form.rules.namesRules('Libelle')" label="Libelle Matiere" required>
                          </v-text-field>
                      </form>
                     </div>
                   </div>
                 </div>
                 
                </div>
                <div class="tab-pane fade" id="assignement" role="tabpanel" aria-labelledby="assignement-tab">
                  <div class="container">
                    <div class="my-3">
                      <h4>Assigner une matiere a une classe</h4>
                    </div>
                    <div class="row">
                      <div class="col-md-12">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-custom-content">
                <p class="lead mb-0">Custom Content goes here</p>
              </div>
            </slot>
          </div>
          <div class="modal-footer justify-content-between">
            <slot name="footer"> 

            </slot>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
    </div>
    <!-- /.modal-dialog -->
  </div>
</template>

<script>
export default {
  props : {
    id : {
      type: String,
      default : 'matiere-create'
    },
    title : {
      type : String,
      default : 'Mettre A Jour Une Matiere'
    },
    data : {
      type : [Array,Object],
      default(){
        return {
          matiere : {}
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
						namesRules(name=""){
              name = name==""? 'This' : name;
						return [
							v => !!v || `${name} field is required`,
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
      }
    }
  },

  mounted (){
    this.$root.$on('matiere:edit', (data) => {
      this.data.matiere = data;
      $('#matiere-create').modal('show');
    })

    this.$root.$on('matiere:create', () =>{
      this.data.matiere = {};
      $('#matiere-create').modal('show');
    })
  }
}
</script>

<style>

</style>