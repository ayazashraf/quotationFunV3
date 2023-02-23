<style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.Popular-footer-authors 
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
.letter-list-anniversaries
{
    margin-top: 5px;
    padding-top: 5px;    
}
</style>
<template>  
    <div class="card  boxshadow card-padding">
        <div class="card-header">    
            <h5 class="card-title card-title-home">Today's Anniversaries</h5>
        </div>
        <div class="card-body">
            <ul class="list-group letter-list-anniversaries">
                <li class="list-group-item  p-md-1 p-lg-1" v-for="author in anniversaries" :key="author.id">
                    {{author.DiedYear}} - <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                </li>                
            </ul>
            <ul class="list-group letter-list-anniversaries">
                <li class="list-group-item  p-md-1 p-lg-1">
                    <a v-bind:href="'anniversaries/'+this.monthName.toLowerCase()+'-'+this.day" class="card-link" style="color: #3270b3">Anniversaries on {{this.monthName}} {{this.day}}</a> →                    
                </li>
                 <li class="list-group-item  p-md-1 p-lg-1">
                    <a v-bind:href="'anniversaries/'" class="card-link" style="color: #3270b3">All Anniversaries</a> →                    
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
              anniversaries: {},
              day: 0,
              month: 0,
              monthName: ""
            }
        },
        methods: {
            getanniversaries(){
                axios.get('/api/anniversaryauthors')
                     .then((response)=>{
                       this.anniversaries = response.data.data;                       
                     })
            }            
        },
        created(){
            this.getanniversaries();
            var d = new Date();
            this.day = d.getDate();            
            this.month = d.getMonth()+1;            
            this.monthName = d.toLocaleString('default', { month: 'long' });
        },
        mounted() {        
        
        },
        updated: function () {
          // When the API is call is completed. 
        }
    }
</script>
