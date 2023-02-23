<style>
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
.box-style 
{
  border: 1px solid #c9c9c9;;
}
.hand-pointer 
{
  cursor: pointer;
}
.authors-quotes-top-navigation
{
    background-color: #fff;
    height: 50px;
    z-index: 99;        
    border: 1px solid grey;
    justify-content: left;
    color:black;
    background-color: #f8f8f8;
    border-color: #e7e7e7;    
}
.author-heading 
{
  font-size:1.2rem;  
}
.imgPortrait 
{
    border-radius: 50%;
    max-width: 45px;
    cursor:pointer;
    max-height: 45px;
}
.vl {
    border-right: 1px solid #aaa;    
      margin: 0 8px;
    position: relative;    
}
</style>
<template>  
  <!-- Start of first top level div -->
  <div>
    <div class="navbar navbar-expand-sm nav-header p-0 m-0 authors-quotes-top-navigation">
      <ul class="list-group list-group-horizontal ul-style">
        <li class="list-group-item letters d-flex justify-content-between align-items-center p-0 pl-2 border-0">                                
          <a v-bind:href="'../author/'+author.fullname+'-quote'+'-'+author.id" class="card-link" style="color: #000;cursor:pointer;">
          <img v-bind:alt="author.fullname" itemprop="image" v-bind:src="author.Portrait" class="imgPortrait" />
          </a>                                                     
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-0 pl-2 border-0">
          <h1 class="author-heading">{{author.fullnameDisplay}} Quotes</h1>
        </li>
      </ul>
    </div>
    <div class="p-2">
      <a v-bind:href="'../nationality/quotes-by-'+this.nationality.Nationality+'-authors'" class="card-link">{{this.nationality.Nationality}}</a>&nbsp;- 
      <span v-for="(occupation, index) in this.occupations" :key="index">
        <a v-bind:href="'../professions/quotes-by-'+occupation.toLowerCase()" class="card-link p-0">{{occupation}}</a><span v-if="index != occupations.length - 1">, </span>
      </span>
      <span class="vl">
      </span>
      <span v-if="author.BornMonth && author.BornDay">
        <a v-bind:href="'../birthdays/'+this.monthNames[author.BornMonth-1].toLowerCase()+'-'+author.BornDay" class="card-link p-0">{{this.monthNames[author.BornMonth-1]}} {{author.BornDay}}</a>,&nbsp;{{author.BornYear}}<span v-if="author.BornYearBC">&nbsp;BC</span>&nbsp;- 
      </span>
      <span v-else>
        {{this.monthNames[author.BornMonth-1]}} {{author.BornDay}} {{author.BornYear}}<span v-if="author.BornYearBC">&nbsp;BC</span>&nbsp;-
      </span>
      <span v-if="author.DiedMonth && author.DiedDay">
        <a v-bind:href="'../birthdays/'+this.monthNames[author.DiedMonth-1].toLowerCase()+'-'+author.DiedDay" class="card-link p-0">{{this.monthNames[author.DiedMonth-1]}} {{author.DiedDay}}</a>,&nbsp;{{author.DiedYear}}<span v-if="author.DiedYearBC">&nbsp;BC</span> 
      </span>
      <span v-else>
        {{this.monthNames[author.DiedMonth-1]}} {{author.DiedDay}} {{author.DiedYear}}<span v-if="author.DiedYearBC">&nbsp;BC</span> 
      </span>
       <span class="vl">
      </span>
      <span>
        <a target="amazon" data-toggle="popover" data-trigger="hover" v-bind:data-content="author.fullnameDisplay+' on Amazon'" class="card-link p-0" rel="nofollow" v-bind:href="'https://www.amazon.com/s?k='+author.fullnameDisplay">Amazon</a>
      </span>
      <span class="vl">
      </span>
      <span v-if="this.aboutauthor">
          <a v-bind:href="'../topic/'+author.fullname.toLowerCase()+'-quotes-'+author.id" class="card-link p-0">Quotes about {{author.fullnameDisplay}}</a>
      </span>
      <span v-if="this.aboutauthor" class="vl">
      </span>
      <span>          
          <a v-bind:href="'../topic/top-10-'+author.fullname.toLowerCase()+'-quotes-'+author.id" class="card-link p-0" data-toggle="popover" data-trigger="hover" v-bind:data-content="'Top 10 '+author.fullnameDisplay+' Quotes'">Top 10 {{author.fullnameDisplay}} Quotes</a> 
      </span>
      <span class="vl">
      </span>      
      <span v-if="this.occupations">
          <a data-toggle="popover" data-trigger="hover" v-bind:data-content="author.fullnameDisplay+' biography'" v-bind:href="'../profiles/author-'+author.fullname.toLowerCase()+'-'+author.id" class="card-link p-0">Read full biography</a>
      </span>
      <!--
      <span class="vl"></span>      
      <span class="dropdown">
        <button class="card-link p-0" type="button" data-toggle="dropdown">Find {{author.fullnameDisplay}} on Wikipedia
        <span class="caret"></span></button>
        <ul class="dropdown-menu" id="dropDownWikipedia" v-html="this.wikipediaHTML">          
        </ul>
      </span>
      -->
    </div>    
    <div>
      <div class="row mt-1 no-gutters">
        <div class="card-columns p-2">        
          <!-- Start Loop of Quote block Card Div -->          
          <div class="card" v-for="quote in quotes.data">
            <div class="card-body d-flex flex-column">
              <blockquote class="quote-card">
                <p class="text-justify">
                  <a v-bind:href="'../picture/'+'quote-'+quote.fullname+'-'+quote.id" class="card-link" style="color: #000">{{quote.Quote}}</a>                    
                </p>          
                <a v-bind:href="'../quote/'+quote.fullname+'-'+quote.id" class="card-link" style="color: #000">
                  <cite class="d-flex justify-content-center" style="color: #3270b3">{{quote.fullnameDisplay}}</cite>
                </a>
              </blockquote>
              <div class="mt-auto">
                <div class="d-flex justify-content-center align-items-center">
                  <a v-bind:href="'../' + 'share/fb/'+quote.id+'?ti='+author.fullname" class="mx-2" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a>
                  <a v-bind:href="'../' + 'share/tw/'+quote.id + '?ti='+author.fullname+'+Quotes+'+'page+'+page" class="mx-2" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a>            
                  <a v-bind:href="'../' + 'share/in/'+quote.id + '?ti='+author.fullname+'+Quotes+'+'page+'+page" class="mx-2" target="_blank" rel="nofollow"><i class="fa fa-linkedin"></i></a>            
                </div>
              </div>
            </div>
            <div class="card-footer">                      
              <div class="d-flex justify-content-center">     
                <span v-for="(topic, index) in quote.topics" :key="index">                      
                  <a v-if="topic.length > 0" v-bind:href="'../topic/'+topic.toLowerCase().trim()+'-quotes'" class="btn btn-outline-info btn-sm mx-1 hand-pointer">{{topic}}</a>
                </span>                    
              </div>
            </div>
          </div>              
          <!-- END Loop of Quote block Card Div -->           
        </div>          
      </div>      
    </div>
    <div class="d-flex justify-content-center align-items-center" v-html="this.pagelinks"/>                
  </div>      
  <!-- End of first top level div -->
</template>

<script>
    export default {
        props: ['id','page','baseurl'],
        data(){
            return {
              quotes: {},              
              author: {},
              pagelinks: {},
              nationality:{},
              occupations: {},
              pagination: {},
              monthNames: ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"],
              aboutauthor:0,
              wikipediaHTML: "",
            }
            
        },
        methods: {
            authorQuotes(){
                axios.get('/api/authorquotes', {
                  params: {
                    id: this.id,
                    page: this.page
                  }
                })
                     .then((response)=>{
                       this.author = response.data.data.data[0];
                       this.quotes = response.data.data.quotes; 
                       
                       this.pagelinks = response.data.data.links.replace('pagination', 'pagination flex-wrap').split('api/authorquotes').join('author/'+this.author.fullname+'-quotes'+'-'+this.author.id);
                       this.pagination = response.data.data.pagination;
                       this.nationality = response.data.data.nationality;
                       this.occupations = this.author.Occupation.replace(',','').replace('and','').replace('  ',' ').split(" ");                       
                       this.aboutauthor = response.data.data.aboutauthor;

/*
                       axios.get('https://en.wikipedia.org/w/api.php?origin=*', {
                          params: {
                            action: "query",
                            list: "search",
                            srsearch: this.author.fullnameDisplay,
                            format: "json"
                          }
                        })
                        .then((response)=>{
                          for (i in response.query.search) {
                            this.wikipediaHTML += '<li><a target="wikipedia" data-toggle="popover" data-trigger="hover" data-content="' + response.query.search[i].title +' on Wikipedia" class="card-link p-0" rel="nofollow" href="https://en.wikipedia.org/wiki/'+response.query.search[i].title.split(' ').join('_')+'">'+response.query.search[i].title+'</a></li>';
                          }
                        })
                        */
                        
                     });              
            },
             activate:function(el){
                this.active_el = el;
            },
            gotosite(producturl){
              window.location.href = producturl
            }
                                   
        },
        created(){
            this.authorQuotes();            
        },
        mounted() {        
        
        },
        updated: function () {
          // When the API is call is completed 
        }
    }
</script>