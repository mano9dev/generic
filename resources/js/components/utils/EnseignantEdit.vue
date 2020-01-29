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
                  <a class="nav-link active" id="editer-tab" data-toggle="pill" href="#editer" role="tab" aria-controls="editer" aria-selected="true">Editer</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="assigner-tab" data-toggle="pill" href="#assigner" role="tab" aria-controls="assigner" aria-selected="false">Assigner</a>
                </li>
              </ul>
              <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade show active" id="editer" role="tabpanel" aria-labelledby="editer-tab">
                   <enseignant-form ref="enseignantForm"> </enseignant-form>
                </div>
                <div class="tab-pane fade" id="assigner" role="tabpanel" aria-labelledby="assigner-tab">
                  Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam. 
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
import EnseignantForm from "./Form/EnseignantForm";
export default {
  components : {
    EnseignantForm
  },
  props : {
    id : {
      type : String,
      default : 'enseignant'
    },
    title : 'Ajouter un enseignant',
    data : {
      type : [Array,Object],
      default (){
        return {
          enseignant : {}
        }
      }
    }
  },

  mounted(){
    this.$root.$on('enseignant:edit',(data) => {

      this.$refs.enseignantForm.enseignant=data;
      this.showModal();
      // $('#'+'enseignant-edit').modal('show');
    })
    
  },

  data(){
    return {
      
    }
  },

  methods : {
    showModal(){
      $('#'+this.id).modal('show');
    }
  }
}
</script>
