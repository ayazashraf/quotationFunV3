<style>
.center-contents-authors 
{
    justify-content: center;
}
.letter-list-indices
{
    margin-top: 5px;
    padding-top: 5px;    
}
.authorheading
{
    font-size: 1.5rem;
    padding-bottom: 2px;
    margin-bottom: 0;
    line-height: 22px;
    margin-top:1rem;
}
.letter-list-indices
{
    margin-top: 5px;
    padding-top: 5px;    
}
</style>
<template>
    <div>
        <!-- START Top Header -->
        <div class="navbar navbar-expand-sm nav-header p-0 m-0 authors-top-navigation">
            <div class="letters center-contents-authors mt-2">                
                <span>Keywords</span>
            </div>
        </div>
        <!-- END Top Header -->
        <div class="container">                     
            <!-- START Main Contents Container -->                 
            <div class="row">
                <div class="col-sm-8 col-md-8">
                    <div class="row">
                        <div class="col-sm-4 col-md-6">
                             <ul class="list-group letter-list-indices">
                                <li class="list-group-item  p-md-1 p-lg-1"  v-for="index in indices1">
                                    <a v-bind:href="'topics/'+index.tag.toLowerCase()+'-quotes'" class="card-link" style="color: #3270b3">{{index.tag}}</a>                    
                                </li>                                
                            </ul>   
                        </div>
                        <div class="col-sm-4 col-md-6">
                            <ul class="list-group letter-list-indices">
                                <li class="list-group-item  p-md-1 p-lg-1"  v-for="index in indices2">
                                    <a v-bind:href="'topics/'+index.tag.toLowerCase()+'-quotes'" class="card-link" style="color: #3270b3">{{index.tag}}</a>                    
                                </li>                                
                            </ul>  
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                   <div>Ads Section</div>
                   <div>Popular Topics</div>                   
                </div>                
            </div>                    
        </div>            
        <!-- END Main Contents Container -->        
    </div>
</template>

<script>
    export default {
        props: ['ind'],
        data(){
            return {              
              indices1: {},              
              indices2: {},              
            }
        },
        methods: {
            topicsindicesList(){
                 axios.get('/api/getindices', {
                  params: {
                    index: this.ind
                  }
                })
                .then((response)=>{                  
                    this.indices1 = response.data.data.slice(0, response.data.data.length/2);                                          
                    this.indices2 = response.data.data.slice(response.data.data.length/2, response.data.data.length+1);
                });                   
            }                        
        },
        created(){
            this.topicsindicesList();            
        },
        mounted() {        
        
        },
        updated: function () {
          // When the API is call is completed. 
        }
    }
</script>
