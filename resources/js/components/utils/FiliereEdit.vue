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
              <ul class="nav nav-tabs" id="filiere-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="edit-tab" data-toggle="pill" href="#edit" role="tab" aria-controls="edit" aria-selected="true">Editer</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="assignement-tab" data-toggle="pill" href="#assignement" role="tab" aria-controls="assignement" aria-selected="false">Assignement</a>
                </li>
              </ul>
              <div class="tab-content" id="filiere-tabContent">
                <!-- Editer -->
                <div class="tab-pane fade show active" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                 <div class="container">
                   <div class="row">
                     <div class="col-md-12">
                       <filiere-form :id="'form'" ref="filiereform" ></filiere-form>
                     </div>
                   </div>
                 </div>
                 
                </div>

                <!-- Assignement -->
                <div class="tab-pane fade" id="assignement" role="tabpanel" aria-labelledby="assignement-tab">
                    <div class="row">
                      <div class="col-12">
                        <div class="btn-toolbar py-3 justify-content-between">
                          <div class="form-group" style="min-width: 15rem;">
                            <label>Selectionner une filiere</label>
                            <v-select v-model="toolbar.codeFil" :reduce="f => f.codeFil" label="libelleFil" :options="$store.state.filiere.filieres" > </v-select>
                          </div>
                          <div class="form-group" style="min-width: 10rem;">
                            <label>Niveau</label>
                            <v-select label="annee" v-model="toolbar.niveau" :reduce="n => n.id" :options="$store.state.niveau" ></v-select>
                          </div>
                          <div class="form-group" style="min-width: 12rem;">
                            <label>Annee scolaire</label>
                            <v-select label="promotion" v-model="toolbar.promo_id" :reduce="n => n.id" :options="$store.state.annee_scolaire"></v-select>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="card mb-3">
                          <div class="card-header">Ajouter une classe à la filière</div>
                          <div class="card-body">
                            <div class="border mb-1 p-2" v-for="(c, key) in newbieClasses" :key="key">
                              <div class="btn-toolbar justify-content-end">
                                <div class="btn-group btn-group-sm" role="group" aria-label="toolbar for classe creating">
                                  <button type="button" :disabled="true" @click="duplicate(c, key)" class="btn btn-action btn-primary rounded-circle mr-3"><i class="fa fa-sm fa-clone"></i></button>
                                  <button type="button" @click="deleteclasse(c, key)" class="btn btn-action btn-danger rounded-circle mr-3"><i class="fa fa-sm fa-trash"></i></button>
                                </div>
                              </div>
                              <classe-form :ref="'classe_'+key" :classe="c" :id="'classe_'+key" > </classe-form>
                            </div>
                            <div class="mt-3">
                              <button type="button" @click="addClasse()" class="btn btn-sm bg-gradient-success"> <i class="fas fa-sm fa-plus"></i> Ajouter</button>
                            </div>
                          </div>
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
import { mapState, mapGetters } from "vuex";
import FiliereForm from "./Form/FiliereForm";
import ClasseForm from "./Form/ClasseForm";

export default {
  props : {
    id : {
      type: String,
      default : 'filiere-modal'
    },
    title : {
      type : String,
      default : 'Gerer les filières et les classes'
    },
  },

  components : {
    FiliereForm,
    ClasseForm
  },

  data(){
    return {
      newbieClasses : [],
    }
  },

  computed : {
    ...mapGetters('filiere', {
      selectedFiliere : 'selectedFiliere'
    }),
    ...mapState({
      filieres : state => state.filiere.filieres
    }),
    /* classe () {
      return {
        promo_id: 1,
        niveau : this.toolbar.niveau,
        fil_codeFil: this.selectedFiliere != null ? this.selectedFiliere.codeFil : this.toolbar.codeFil,
        specialite : 'AIP',
        groupe : ''
      }
    }, */
    toolbar(){
      return {
        codeFil : 'IG',
      }
    }
  },

  methods : {
    addClasse(){
      const classe={
        promo_id: this.toolbar.promo_id,
        fil_codeFil : this.selectedFiliere != null ? this.selectedFiliere.codeFil : this.toolbar.codeFil,
        niveau: this.toolbar.niveau,
        groupe : '',
        specialite : ''
      }
      this.newbieClasses.unshift(classe)
    },
    duplicate(c,key){
      
    },
    deleteclasse(classe, index){
      this.newbieClasses.splice(index,1);
    }
  },

  mounted (){
    this.addClasse();
    $('#filiere-tab a[href="#assignement"]').tab('show');
    
  }
}
</script>

<style>

</style>