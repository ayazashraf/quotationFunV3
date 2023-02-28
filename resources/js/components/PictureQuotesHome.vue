<style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.quotes-list
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
.card-box 
{
        border: 1px solid #c9c9c9;
}
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

/* Container holding the image and the text */
.container {
  position: relative;
  text-align: center;
  color: white;
}

/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<template> 
   
<div>
    <div class="responsive" v-for="quote in quotes" :key="quote.id">
      <div class="gallery">
        <div class="container">
          <a target="_blank" v-bind:href="'https://qf.foreigntree.com/public/images/backgrounds/'+quote.background">
            <img v-bind:src="'https://qf.foreigntree.com/public/images/backgrounds/'+quote.background" alt="Forest" width="100%" max-height="400" class="img-responsive">
          </a>
          <div class="centered">{{quote.Quote}} ~ {{ quote.NameDisplayLast }} {{ quote.NameDisplayFirst }}</div>
        </div>
      </div>    
    </div>
</div>
    
</template>

<script>
    export default {
        data(){
            return {
              quotes: {},              
            }
        },
        methods: {
            randomQuotesHome(){
                axios.get('/api/randomQuotesHome')
                     .then((response)=>{
                       this.quotes = response.data.data;                       
                     })
            }                        
        },
        created(){
            this.randomQuotesHome();            
        },
        mounted() {        
        
        },
        updated: function () {
          // When the API is call is completed. 
        }
    }
</script>
