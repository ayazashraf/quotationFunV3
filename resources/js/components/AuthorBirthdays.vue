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
.letter-list-birthday
{
    margin-top: 5px;
    padding-top: 5px;    
}
.card-padding
{
    padding: 0.25rem;
}

</style>
<template>  
    <div class="card boxshadow card-padding">
        <div class="card-header">    
            <h5 class="card-title card-title-home">Today's Birthdays</h5>
        </div>
        <div class="card-body">
            <ul class="list-group letter-list-birthday">
                <li class="list-group-item p-md-1 p-lg-1" v-for="author in birthdays" :key="author.id">
                    {{author.BornYear}} - <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                </li>                                
            </ul>
            <ul class="list-group letter-list-birthday">
                <li class="list-group-item p-md-1 p-lg-1">
                    <a v-bind:href="'birthdays/'+this.monthName.toLowerCase()+'-'+this.day" class="card-link" style="color: #3270b3">Birthdays on {{this.monthName}} {{this.day}}</a> →
                </li>
                 <li class="list-group-item p-md-1 p-lg-1">
                    <a v-bind:href="'birthdays/'" class="card-link" style="color: #3270b3">All Birthdays</a> →
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
              birthdays: {},
              day: 0,
              month: 0,
              monthName: ""
            }
        },
        methods: {
            getBirthdays(){
                axios.get('/api/birthdayauthors')
                     .then((response)=>{
                       this.birthdays = response.data.data;                       
                     })
            }                        
        },
        created(){
            this.getBirthdays();
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
