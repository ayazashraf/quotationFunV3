<style>
.center-contents-authors 
{
    justify-content: center;
}
.letter-list-topics
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
.letter-list-topics
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
                <span>Quote Topics</span>
            </div>
        </div>
        <!-- END Top Header -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="d-lg-block d-none my-2">                        
                        Looking for a quote from your favorite topic? Our quote collections are organized by topic to help you find the perfect quote. Enjoy quotes on popular topics like: Love, Life, Friendship, Success, Wisdom.
                    </div>                   
                </div>
            </div>            
            <!-- START Main Contents Container -->                 
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                             <ul class="list-group letter-list-topics">
                                <li class="list-group-item  p-md-1 p-lg-1"  v-for="topic in topics1">
                                    <a v-bind:href="'topics/'+topic.Topic.toLowerCase()+'-quotes-'+topic.id" class="card-link" style="color: #3270b3">{{topic.Topic}}</a>                    
                                </li>                                
                            </ul>   
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <ul class="list-group letter-list-topics">
                                <li class="list-group-item  p-md-1 p-lg-1"  v-for="topic in topics2">
                                    <a v-bind:href="'topics/'+topic.Topic.toLowerCase()+'-quotes-'+topic.id" class="card-link" style="color: #3270b3">{{topic.Topic}}</a>                    
                                </li>                                
                            </ul>  
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                   <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <ul class="list-group letter-list-topics">
                                <li class="list-group-item  p-md-1 p-lg-1"  v-for="topic in topics3">
                                    <a v-bind:href="'topics/'+topic.Topic.toLowerCase()+'-quotes-'+topic.id" class="card-link" style="color: #3270b3">{{topic.Topic}}</a>                    
                                </li>                                
                            </ul>  
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <ul class="list-group letter-list-topics">
                                <li class="list-group-item  p-md-1 p-lg-1"  v-for="topic in topics4">
                                    <a v-bind:href="'topics/'+topic.Topic.toLowerCase()+'-quotes-'+topic.id" class="card-link" style="color: #3270b3">{{topic.Topic}}</a>                    
                                </li>                                
                            </ul>  
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    ADs Section
                </div>                               
            </div>        
            <div class="row">                
                <div class="col-sm-12 col-md-12">
                    <div class="my-2">                        
                        <h2>Topic Tag Index</h2>
                    </div>                   
                </div>            
            </div>        
            <div class="row">                
                <div class="col-sm-12 col-md-12">
                    <div class="d-lg-block d-none my-2">                        
                        Looking for a quote from your favorite topic? Our quote collections are organized by topic to help you find the perfect quote. Enjoy quotes on popular topics like: Love, Life, Friendship, Success, Wisdom.
                    </div>                   
                </div>            
            </div>        
            <div class="row">
                <div class="col-sm-4">
                    <h2 class="authorheading">A</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in inda" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">B</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indb" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">C</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indc" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">D</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indd" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">E</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in inde" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">F</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indf" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">G</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indg" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">H</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indh" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>                   
                </div>
                <div class="col-sm-4">
                    <h2 class="authorheading">I</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indi" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">J</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indj" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">K</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indk" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">L</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indl" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">M</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indm" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">N</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indn" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">O</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indo" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">P</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indp" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">Q</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indq" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>                    
                </div>
                <div class="col-sm-4">
                    <div>
                        ADs section
                    </div>
                    <h2 class="authorheading">R</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indr" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">S</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in inds" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">T</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indt" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">U</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indu" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">V</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indv" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">W</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indw" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <!--
                    <h2 class="authorheading">X</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indx" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    -->
                    <h2 class="authorheading">Y</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indy" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>
                    <h2 class="authorheading">Z</h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1" v-for="ind in indz" :key="ind.id">
                                <a v-bind:href="'topic_index/'+ind.tag" class="card-link" style="color: #3270b3">{{ind.index}}</a>                    
                            </li>                                
                        </ul>                                        
                    </div>             
                    <div>
                        ADs section
                    </div>
                </div>
            </div>
        </div>            
        <!-- END Main Contents Container -->        
    </div>
</template>

<script>
    export default {
        data(){
            return {
              topics1: {},
              topics2: {},
              topics3: {},
              topics4: {},              
              inda: {},
              indb: {},
              indc: {},
              indd: {},
              inde: {},
              indf: {},
              indg: {},
              indh: {},
              indi: {},
              indj: {},
              indk: {},
              indl: {},
              indm: {},
              indn: {},
              indo: {},
              indp: {},
              indq: {},
              indr: {},
              inds: {},
              indt: {},
              indu: {},
              indv: {},
              indw: {},
              indx: {},
              indy: {},
              indz: {},              
            }
        },
        methods: {
            topicsList(){
                 axios.get('/api/topicslist')
                .then((response)=>{                  
                    this.topics1 = response.data.data.slice(0, 34);                       
                    this.topics2 = response.data.data.slice(35, 70);                       
                    this.topics3 = response.data.data.slice(71, 106);                       
                    this.topics4 = response.data.data.slice(107, 150);      
                });  
                 axios.get('/api/getTopicindices')
                .then((response)=>{                  
                    this.inda = response.data.data.filter(o => o.letter === 'a');
                     this.indb = response.data.data.filter(o => o.letter === 'b');
                     this.indc = response.data.data.filter(o => o.letter === 'c');
                     this.indd = response.data.data.filter(o => o.letter === 'd');
                     this.inde = response.data.data.filter(o => o.letter === 'e');
                     this.indf = response.data.data.filter(o => o.letter === 'f');
                     this.indg = response.data.data.filter(o => o.letter === 'g');
                     this.indh = response.data.data.filter(o => o.letter === 'h');
                     this.indi = response.data.data.filter(o => o.letter === 'i');
                     this.indj = response.data.data.filter(o => o.letter === 'j');
                     this.indk = response.data.data.filter(o => o.letter === 'k');
                     this.indl = response.data.data.filter(o => o.letter === 'l');
                     this.indm = response.data.data.filter(o => o.letter === 'm');
                     this.indn = response.data.data.filter(o => o.letter === 'n');
                     this.indo = response.data.data.filter(o => o.letter === 'o');
                     this.indp = response.data.data.filter(o => o.letter === 'p');
                     this.indq = response.data.data.filter(o => o.letter === 'q');
                     this.indr = response.data.data.filter(o => o.letter === 'r');
                     this.inds = response.data.data.filter(o => o.letter === 's');
                     this.indt = response.data.data.filter(o => o.letter === 't');
                     this.indu = response.data.data.filter(o => o.letter === 'u');
                     this.indv = response.data.data.filter(o => o.letter === 'v');
                     this.indw = response.data.data.filter(o => o.letter === 'w');
                     this.indx = response.data.data.filter(o => o.letter === 'x');
                     this.indy = response.data.data.filter(o => o.letter === 'y');
                     this.indz = response.data.data.filter(o => o.letter === 'z');
                });          
            }                        
        },
        created(){
            this.topicsList();            
        },
        mounted() {        
        
        },
        updated: function () {
          // When the API is call is completed. 
        }
    }
</script>
