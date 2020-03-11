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
                <!-- Editer -->
                <div class="tab-pane fade show active" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                 <div class="container">
                   <div class="row">
                     <div class="col-md-12">
                       <filiere-form ref="filiereform" @submitForm="onSubmitForm"></filiere-form>
                     </div>
                   </div>
                 </div>
                 
                </div>

                <!-- Assignement -->
                <div class="tab-pane fade" id="assignement" role="tabpanel" aria-labelledby="assignement-tab">
                    <div class="row">
                      <div class="col-11">
                        <div class="card mb-3">
                          <div class="card-header">Ajouter une classe à la filière</div>
                          <div class="card-body">
                            <div class="border mb-1 p-2">
                              <classe-form ref="classeForm"> </classe-form>
                            </div>
                            <div class="border mb-1 p-2">
                              <classe-form ref="classeForm"> </classe-form>
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

import FiliereForm from "./Form/FiliereForm";
import ClasseForm from "./Form/ClasseForm";
const CLASSE = {
  libelleClasse : "",
  fil_codeFil : "",
  codeClasse : "",
  libelleClasse: "",
  niveau: 1,
  specialite: null,
  promo_id : 1
}
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
    filiereList : {
      type : Array,
      default : function(){
        return [];
      }
    },
    defaultclasse : {
      type: Object,
      default : CLASSE
    }
  },

  components : {
    FiliereForm,
    ClasseForm
  },

  data(){
    return {
      
    }
  },

  methods : {
    onSubmitForm(data){
      console.log('received submit form',data);
      this.filiereList.push(data);
    }
  },
  mounted (){
    
  }
}
</script>

<style>

</style>