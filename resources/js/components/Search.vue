<template>
  <!-- START Header Banner HTML -->
  <div class="table-responsive-sm banner-container">              
      <div class="centered">
      <form autocomplete="off" action="/authors">
        <div class="">
          <input type="text" class="form-control" placeholder="Search" v-model="search" v-on:keyup="getSearchData">
        </div>          
      </form>
      <ul class="autocomplete-items" v-click-outside="hide">
        <li class="list-group-item autocomplete-item d-flex" v-for="author in results">
          <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>            
        </li>
      </ul>                            
    </div>
  </div>
  <!-- END Header Banner HTML-->
</template>
<script>
    export default {
        data(){
            return {
               search: '',
                results: []
            }
        },
        methods: {
            getSearchData(){
                this.results = [];
                if(this.search.length > 0){
                axios.get('/api/search',{params: {keyword: this.search}})
                  .then(response => {
                    if(response.data.success)
                    {
                      this.results = response.data.data;
                    }
                    else
                    {
                      this.results.splice(index, 1);
                    }
                  });
                }
            },
            hide () {
              this.results.splice(index, 1);
            }          
        },
        created(){
            this.getSearchData()
        },
        mounted() {        
        
        },
        updated: function () {
        
        }
    }
 </script> 
<style>
.banner-container 
{
  position: relative;
  text-align: center;
  color: white;
  width:100%;
  max-height:200px;
  min-height:200px;
  background-image:url('/public/images/banners/7.webp');
  object-fit: cover;
  background-repeat: round;
  z-index: 999;
}
.banner-container img 
{
  max-height:200px;
  min-height:200px;
  object-fit: cover;
}
/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 300px;
  transform: translate(-50%, -50%);
}
.autocomplete {
  position: relative;
  display: inline-block;
}
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 9999;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
  padding:0;
}

.autocomplete-item {  
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-item :hover {
  background-color: #e9e9e9; 
  //padding: 0;
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>