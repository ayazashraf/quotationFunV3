<style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.topics-list
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
.letter-list-topics
{
    margin: 2px;
    padding: 2px;    
}
</style>
<template>  
<div>
            <h4 class="card-title card-title-home"><strong>Popular Topics</strong></h4>
            <ul class="list-group letter-list-topics">
                <li class="list-group-item p-md-1 p-lg-1" v-for="topic in topics" :key="topic.id">
                    <a v-bind:href="'topics/'+topic.Topic.toLowerCase()+'-quotes'" class="card-link" style="color: #3270b3">{{topic.Topic}}</a>                    
                </li>                                
            </ul>            
    </div>
</template>

<script>
    export default {
        data(){
            return {
              topics: {},              
            }
        },
        methods: {
            populartopic(){
                axios.get('/api/populartopic')
                     .then((response)=>{
                       this.topics = response.data.data;                       
                     })
            }                        
        },
        created(){
            this.populartopic();            
        },
        mounted() {        
        
        },
        updated: function () {
          // When the API is call is completed. 
        }
    }
</script>
