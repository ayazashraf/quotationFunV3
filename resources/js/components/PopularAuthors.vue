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
.letter-list-popular
{
    margin: 2px;
    padding: 2px;    
}
</style>
<template>  
    <div>
            <h4 class="card-title card-title-home"><strong>Popular Authors</strong></h4>
            <ul class="list-group letter-list-popular">
                <li class="list-group-item p-md-1 p-lg-1" v-for="author in authors" :key="author.id">
                    <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                </li>                                
            </ul>                
    </div>
</template>

<script>
    export default {
        data(){
            return {
              authors: {},              
            }
        },
        methods: {
            popularauthor(){
                axios.get('/api/popularauthor')
                     .then((response)=>{
                       this.authors = response.data.data;                       
                     })
            }                        
        },
        created(){
            this.popularauthor();            
        },
        mounted() {        
        
        },
        updated: function () {
          // When the API is call is completed. 
        }
    }
</script>
