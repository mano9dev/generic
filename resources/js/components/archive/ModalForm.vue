<template>
  <div>
    <!-- Modal Form -->
    <div class="modal fade" :id="id">
      <div class="modal-dialog" :class="modalSize">
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
              <p>One fine body&hellip;</p>
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
      default: "modal-default"
    },
    title : {
      type : String,
      default : "Modal Form"
    },
    modalSize:{
      type : String,
      default:'modal-lg'
    },
  },
  data(){
    return {
      
    }
  },
  methods : {
    
  },
  mounted(){
    
  },

  computed:{
    
  }

}
</script>