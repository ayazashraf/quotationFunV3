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
.authors-top-navigation 
{
    background-color: #fff;
    height: 50px;
    z-index: 99;    
    justify-content: center;
    border: 1px solid grey;
    color:black;
    background-color: #f8f8f8;
    border-color: #e7e7e7;
}
.center-contents-authors 
{
    justify-content: center;
}
.letter-list
{
    margin-top: 5px;
    padding-top: 5px;
    padding-bottom: 10px;
}
.authorheading
{
    font-size: 1.5rem;
    padding-bottom: 2px;
    margin-bottom: 0;
    line-height: 22px;
    margin-top:1rem;
}
</style>
<template>
    <div>
        <!-- START Top Header -->
        <div class="navbar navbar-expand-sm nav-header p-0 m-0 authors-top-navigation">
            <div class="letters center-contents-authors mt-2">                
                <span>Favourite Authors</span>
            </div>
        </div>
        <!-- END Top Header -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="d-lg-block d-none my-2">
                        Looking for quotes by our most popular authors? Gather wisdom from the ages as you browse
                        favorite quotes by famous authors like: Aristotle, Abraham Lincoln, Thomas Jefferson,
                        Oscar Wilde, and William Shakespeare.
                    </div>
                    <div class="d-sm-block d-md-block d-lg-none d-xl-none my-2">
                        <a href="/authors/a" class="btn btn-success" style="width: 39px; margin-bottom:4px">a</a>
                        <a href="/authors/b" class="btn btn-success" style="width: 39px; margin-bottom:4px">b</a>
                        <a href="/authors/c" class="btn btn-success" style="width: 39px; margin-bottom:4px">c</a>
                        <a href="/authors/d" class="btn btn-success" style="width: 39px; margin-bottom:4px">d</a>
                        <a href="/authors/e" class="btn btn-success" style="width: 39px; margin-bottom:4px">e</a>
                        <a href="/authors/f" class="btn btn-success" style="width: 39px; margin-bottom:4px">f</a>
                        <a href="/authors/g" class="btn btn-success" style="width: 39px; margin-bottom:4px">g</a>
                        <a href="/authors/h" class="btn btn-success" style="width: 39px; margin-bottom:4px">h</a>
                        <a href="/authors/i" class="btn btn-success" style="width: 39px; margin-bottom:4px">i</a>
                        <a href="/authors/j" class="btn btn-success" style="width: 39px; margin-bottom:4px">j</a>
                        <a href="/authors/k" class="btn btn-success" style="width: 39px; margin-bottom:4px">k</a>
                        <a href="/authors/l" class="btn btn-success" style="width: 39px; margin-bottom:4px">l</a>
                        <a href="/authors/m" class="btn btn-success" style="width: 39px; margin-bottom:4px">m</a>
                        <a href="/authors/n" class="btn btn-success" style="width: 39px; margin-bottom:4px">n</a>
                        <a href="/authors/o" class="btn btn-success" style="width: 39px; margin-bottom:4px">o</a>
                        <a href="/authors/p" class="btn btn-success" style="width: 39px; margin-bottom:4px">p</a>
                        <a href="/authors/q" class="btn btn-success" style="width: 39px; margin-bottom:4px">q</a>
                        <a href="/authors/r" class="btn btn-success" style="width: 39px; margin-bottom:4px">r</a>
                        <a href="/authors/s" class="btn btn-success" style="width: 39px; margin-bottom:4px">s</a>
                        <a href="/authors/t" class="btn btn-success" style="width: 39px; margin-bottom:4px">t</a>
                        <a href="/authors/u" class="btn btn-success" style="width: 39px; margin-bottom:4px">u</a>
                        <a href="/authors/v" class="btn btn-success" style="width: 39px; margin-bottom:4px">v</a>
                        <a href="/authors/w" class="btn btn-success" style="width: 39px; margin-bottom:4px">w</a>
                        <a href="/authors/x" class="btn btn-success" style="width: 39px; margin-bottom:4px">x</a>
                        <a href="/authors/y" class="btn btn-success" style="width: 39px; margin-bottom:4px">y</a>
                        <a href="/authors/z" class="btn btn-success" style="width: 39px; margin-bottom:4px">z</a>
                    </div>
                </div>
            </div>
            
            <!-- START Main Contents Container -->                 
            <div class="row">
                <div class="col-sm-8 col-md-8">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <h2 class="authorheading"><a href="/authors/a">A Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsa">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/a" class="btn btn-xs btn-primary">More</a>
                            </div>
                            <h2 class="authorheading"><a href="/authors/b">B Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsb">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/b" class="btn btn-xs btn-primary">More</a>
                            </div>
                             <h2 class="authorheading"><a href="/authors/c">C Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsc">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/c" class="btn btn-xs btn-primary">More</a>
                            </div>
                            <h2 class="authorheading"><a href="/authors/d">D Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsd">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/d" class="btn btn-xs btn-primary">More</a>
                            </div>
                            <h2 class="authorheading"><a href="/authors/e">E Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorse">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/e" class="btn btn-xs btn-primary">More</a>
                            </div>
                             <h2 class="authorheading"><a href="/authors/f">F Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsf">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/f" class="btn btn-xs btn-primary">More</a>
                            </div>
                            <h2 class="authorheading"><a href="/authors/g">G Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsg">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/g" class="btn btn-xs btn-primary">More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <h2 class="authorheading"><a href="/authors/h">H Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsh">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/h" class="btn btn-xs btn-primary">More</a>
                            </div>
                            <h2 class="authorheading"><a href="/authors/i">I Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsi">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/i" class="btn btn-xs btn-primary">More</a>
                            </div>
                             <h2 class="authorheading"><a href="/authors/j">J Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsj">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/j" class="btn btn-xs btn-primary">More</a>
                            </div>
                            <h2 class="authorheading"><a href="/authors/k">K Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsk">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/k" class="btn btn-xs btn-primary">More</a>
                            </div>
                            <h2 class="authorheading"><a href="/authors/l">L Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsl">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/l" class="btn btn-xs btn-primary">More</a>
                            </div>
                             <h2 class="authorheading"><a href="/authors/m">M Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsm">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/m" class="btn btn-xs btn-primary">More</a>
                            </div>
                            <h2 class="authorheading"><a href="/authors/n">N Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsn">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/n" class="btn btn-xs btn-primary">More</a>
                            </div>
                            <h2 class="authorheading"><a href="/authors/o">O Authors</a></h2>
                            <div>
                                <ul class="list-group letter-list">
                                    <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorso">
                                        <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                                    </li>                                
                                </ul>                
                                <a href="/authors/o" class="btn btn-xs btn-primary">More</a>
                            </div>
                        </div>
                    </div>                    
                </div>

                <!-- Last Third Column -->               
                <div class="col-sm-4 col-md-4">
                    <div>
                        <!-- Ads -->
                        ADS SECTION
                    </div>
                     <h2 class="authorheading"><a href="/authors/p">P Authors</a></h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsp">
                                <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                            </li>                                
                        </ul>                
                        <a href="/authors/p" class="btn btn-xs btn-primary">More</a>
                    </div>
                    <h2 class="authorheading"><a href="/authors/q">Q Authors</a></h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsq">
                                <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                            </li>                                
                        </ul>                
                        <a href="/authors/q" class="btn btn-xs btn-primary">More</a>
                    </div>
                        <h2 class="authorheading"><a href="/authors/r">R Authors</a></h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsr">
                                <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                            </li>                                
                        </ul>                
                        <a href="/authors/r" class="btn btn-xs btn-primary">More</a>
                    </div>
                    <h2 class="authorheading"><a href="/authors/s">S Authors</a></h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorss">
                                <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                            </li>                                
                        </ul>                
                        <a href="/authors/s" class="btn btn-xs btn-primary">More</a>
                    </div>
                    <div>
                        <!-- Ads -->
                        ADS SECTION
                    </div>
                    <h2 class="authorheading"><a href="/authors/t">T Authors</a></h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorst">
                                <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                            </li>                                
                        </ul>                
                        <a href="/authors/t" class="btn btn-xs btn-primary">More</a>
                    </div>
                    <h2 class="authorheading"><a href="/authors/u">U Authors</a></h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsu">
                                <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                            </li>                                
                        </ul>                
                        <a href="/authors/u" class="btn btn-xs btn-primary">More</a>
                    </div>
                    <h2 class="authorheading"><a href="/authors/v">V Authors</a></h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsv">
                                <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                            </li>                                
                        </ul>                
                        <a href="/authors/v" class="btn btn-xs btn-primary">More</a>
                    </div>
                    <h2 class="authorheading"><a href="/authors/w">W Authors</a></h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsw">
                                <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                            </li>                                
                        </ul>                
                        <a href="/authors/w" class="btn btn-xs btn-primary">More</a>
                    </div>
                    <h2 class="authorheading"><a href="/authors/x">X Authors</a></h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsx">
                                <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                            </li>                                
                        </ul>                
                        <a href="/authors/x" class="btn btn-xs btn-primary">More</a>
                    </div>
                    <h2 class="authorheading"><a href="/authors/y">Y Authors</a></h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsy">
                                <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                            </li>                                
                        </ul>                
                        <a href="/authors/y" class="btn btn-xs btn-primary">More</a>
                    </div>
                    <h2 class="authorheading"><a href="/authors/z">Z Authors</a></h2>
                    <div>
                        <ul class="list-group letter-list">
                            <li class="list-group-item  p-md-1 p-lg-1"  v-for="author in authorsw">
                                <a v-bind:href="'author/'+author.fullname+'-quotes-'+author.id" class="card-link" style="color: #3270b3">{{author.fullnameDisplay}}</a>                    
                            </li>                                
                        </ul>                
                        <a href="/authors/z" class="btn btn-xs btn-primary">More</a>
                    </div>
                    <div>
                        <!-- Ads -->
                        ADS SECTION
                    </div>
                </div>
            </div>            
            <!-- END Main Contents Container -->
        </div>
        

    </div>
</template>

<script>
    export default {
        data(){
            return {
              authorsa: {},              
              authorsb: {},              
              authorsc: {},              
              authorsd: {},              
              authorse: {},              
              authorsf: {},              
              authorsg: {},              
              authorsh: {},
              authorsi: {},              
              authorsj: {},              
              authorsk: {},              
              authorsl: {},
              authorsm: {},              
              authorsn: {},              
              authorso: {},              
              authorsp: {},
              authorsq: {},              
              authorsr: {},              
              authorss: {},              
              authorst: {},
              authorsu: {},              
              authorsv: {},              
              authorsw: {},              
              authorsx: {},
              authorsy: {},              
              authorsz: {},                      
            }
        },
        methods: {
            authorsexplore(){
                 axios.get('/api/authorslist', {
                  params: {
                    q: 'a',
                    limit:50
                  }
                })
                .then((response)=>{
                  this.authorsa = response.data.data;                       
                });

                 axios.get('/api/authorslist', {
                  params: {
                    q: 'b',
                    limit:30
                  }
                })
                .then((response)=>{
                  this.authorsb = response.data.data;                       
                });

                axios.get('/api/authorslist', {
                  params: {
                    q: 'c',
                    limit:25
                  }
                })
                .then((response)=>{
                  this.authorsc = response.data.data;                       
                });

                 axios.get('/api/authorslist', {
                  params: {
                    q: 'd',
                    limit:28
                  }
                })
                .then((response)=>{
                  this.authorsd = response.data.data;                       
                });

                axios.get('/api/authorslist', {
                  params: {
                    q: 'e',
                    limit:15
                  }
                })
                .then((response)=>{
                  this.authorse = response.data.data;                       
                });
                
                 axios.get('/api/authorslist', {
                  params: {
                    q: 'f',
                    limit:25
                  }
                })
                .then((response)=>{
                  this.authorsf = response.data.data;                       
                });

                axios.get('/api/authorslist', {
                  params: {
                    q: 'g',
                    limit:25
                  }
                })
                .then((response)=>{
                  this.authorsg = response.data.data;                       
                });

                 axios.get('/api/authorslist', {
                  params: {
                    q: 'h',
                    limit:20
                  }
                })
                .then((response)=>{
                  this.authorsh = response.data.data;                       
                });
                 axios.get('/api/authorslist', {
                  params: {
                    q: 'i',
                    limit:30
                  }
                })
                .then((response)=>{
                  this.authorsi = response.data.data;                       
                });

                 axios.get('/api/authorslist', {
                  params: {
                    q: 'j',
                    limit:30
                  }
                })
                .then((response)=>{
                  this.authorsj = response.data.data;                       
                });

                axios.get('/api/authorslist', {
                  params: {
                    q: 'k',
                    limit:25
                  }
                })
                .then((response)=>{
                  this.authorsk = response.data.data;                       
                });

                 axios.get('/api/authorslist', {
                  params: {
                    q: 'l',
                    limit:28
                  }
                })
                .then((response)=>{
                  this.authorsl = response.data.data;                       
                });

                axios.get('/api/authorslist', {
                  params: {
                    q: 'm',
                    limit:25
                  }
                })
                .then((response)=>{
                  this.authorsm = response.data.data;                       
                });
                
                 axios.get('/api/authorslist', {
                  params: {
                    q: 'n',
                    limit:25
                  }
                })
                .then((response)=>{
                  this.authorsn = response.data.data;                       
                });

                axios.get('/api/authorslist', {
                  params: {
                    q: 'o',
                    limit:18
                  }
                })
                .then((response)=>{
                  this.authorso = response.data.data;                       
                });

                 axios.get('/api/authorslist', {
                  params: {
                    q: 'p',
                    limit:20
                  }
                })
                .then((response)=>{
                  this.authorsp = response.data.data;                       
                });
                axios.get('/api/authorslist', {
                  params: {
                    q: 'q',
                    limit:20
                  }
                })
                .then((response)=>{
                  this.authorsq = response.data.data;                       
                });

                 axios.get('/api/authorslist', {
                  params: {
                    q: 'r',
                    limit:25
                  }
                })
                .then((response)=>{
                  this.authorsr = response.data.data;                       
                });

                axios.get('/api/authorslist', {
                  params: {
                    q: 's',
                    limit:22
                  }
                })
                .then((response)=>{
                  this.authorss = response.data.data;                       
                });

                 axios.get('/api/authorslist', {
                  params: {
                    q: 't',
                    limit:20
                  }
                })
                .then((response)=>{
                  this.authorst = response.data.data;                       
                });

                axios.get('/api/authorslist', {
                  params: {
                    q: 'u',
                    limit:15
                  }
                })
                .then((response)=>{
                  this.authorsu = response.data.data;                       
                });
                
                 axios.get('/api/authorslist', {
                  params: {
                    q: 'v',
                    limit:15
                  }
                })
                .then((response)=>{
                  this.authorsv = response.data.data;                       
                });

                axios.get('/api/authorslist', {
                  params: {
                    q: 'w',
                    limit:18
                  }
                })
                .then((response)=>{
                  this.authorsw = response.data.data;                       
                });

                 axios.get('/api/authorslist', {
                  params: {
                    q: 'x',
                    limit:20
                  }
                })
                .then((response)=>{
                  this.authorsx = response.data.data;                       
                });
                 axios.get('/api/authorslist', {
                  params: {
                    q: 'y',
                    limit:10
                  }
                })
                .then((response)=>{
                  this.authorsy = response.data.data;                       
                });

                 axios.get('/api/authorslist', {
                  params: {
                    q: 'z',
                    limit:15
                  }
                })
                .then((response)=>{
                  this.authorsz = response.data.data;                       
                });                
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
