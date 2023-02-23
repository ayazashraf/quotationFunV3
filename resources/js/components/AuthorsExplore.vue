<style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.authors-list
{
  list-style-type: none;
}
.boxshadow 
{
    box-shadow: 10px 10px 5px grey;
}
.card-link 
{
    color: #3270b3;
}
.ul-style 
{
    list-style: none;
}
.card-title-home 
{
  font-size: 1.10rem;
}
.letter-list-news
{
    margin-top: 5px;
    padding-top: 5px;    
}
</style>
<template>  
    <div class="container-fluid">            
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">                    
                    <ul class="list-group letter-list-news">
                        <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authors1">
                            <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                        </li>                                
                    </ul>                
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">                    
                    <ul class="list-group letter-list-news">
                        <li class="list-group-item p-md-1 p-lg-1"  v-for="author in authors2">
                            <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                        </li>                                
                    </ul>                
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">                    
                    <ul class="list-group letter-list-news">
                        <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authors3">
                            <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                        </li>                                
                    </ul>                
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">                    
                    <ul class="list-group letter-list-news">
                        <li class="list-group-item  p-md-1 p-lg-1" v-for="author in authors4" :key="author.id">
                            <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                        </li>                                
                    </ul>                
                </div>
            </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
              authors1: {},              
              authors2: {},              
              authors3: {},              
              authors4: {},              
            }
        },
        methods: {
            authorsexplore(){
                axios.get('/api/authorsexplore')
                     .then((response)=>{
                       this.authors1 = response.data.data.slice(0, 11);                       
                       this.authors2 = response.data.data.slice(12, 23);                       
                       this.authors3 = response.data.data.slice(24, 35);                       
                       this.authors4 = response.data.data.slice(35, 48);                       
                     })
            }                        
        },
        created(){
            this.authorsexplore();            
        },
        mounted() {        
        
        },
        updated: function () {
          // When the API is call is completed. 
        }
    }
</script>
