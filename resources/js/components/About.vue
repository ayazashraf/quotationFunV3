<style>
.card-title-home 
{
  font-size: 1.10rem;
}
.list-style-custom
{
  list-style:none;
  color:white;
}
.active .list-group-item-text 
{
  color:white;
}
</style>
<template>  
    <div>
      <div class="navbar navbar-expand-sm nav-header p-0 m-0 letters-div d-md-block d-none" style="height: 50px;z-index: 99;">
        <div class="container letters  mt-2" style="justify-content: center;">
          <span>       
            <span>{{this.about[0].title}}</span>      
          </span>    
        </div>
      </div>
      <div class="container mt-3">
        <div class="row">
          <div class="col-sm-12 col-md-3 col-lg-4">
            <ol class="list-group list-style-custom">
              <li v-if="this.about[0].id == 1" class="list-group-item active">
                <a class="list-group-item-text" href="/about">About Us</a>
              </li>
              <li v-else="this.about[0].id == 1" class="list-group-item">
                <a class="list-group-item-text" href="/about">About Us</a>
              </li>
              <li v-if="this.about[0].id == 2" class="list-group-item active">
                <a class="list-group-item-text" href="/about/contact-us">Contact Us</a>
              </li>
              <li v-else="this.about[0].id != 2" class="list-group-item">
                <a class="list-group-item-text" href="/about/contact-us">Contact Us</a>
              </li>
              <li v-if="this.about[0].id == 5" class="list-group-item active">
                <a class="list-group-item-text" href="/about/submit-quote">Submit</a>
              </li>
              <li v-if="this.about[0].id != 5" class="list-group-item">
                <a class="list-group-item-text" href="/about/submit-quote">Submit</a>
              </li>
              <li v-if="this.about[0].id == 3" class="list-group-item active">
                <a class="list-group-item-text" href="/about/privacy">Privacy</a>
              </li>
              <li v-if="this.about[0].id != 3" class="list-group-item">
                <a class="list-group-item-text" href="/about/privacy">Privacy</a>
              </li>
              <li v-if="this.about[0].id == 4" class="list-group-item active">
                <a class="list-group-item-text" href="/about/faqs">FAQs</a>
              </li>        
              <li v-else="this.about[0].id != 4" class="list-group-item">
                <a class="list-group-item-text" href="/about/faqs">FAQs</a>
              </li>        
            </ol>
          </div>
          <div class="col-sm-12 col-md-9 col-lg-8">            
            <div class="text-justify"  v-html="this.about[0].contents">              
            </div>
            <div class="mt-3" v-if="this.about[0].id == 5">
              <div class="card">
                <div class="card-body">
                  <form action="/api/submitquote" @submit="checkForm" method="post" novalidate="true">
                     <p v-if="errors.length">
                      <b>Please correct the following error(s):</b>
                      <ul>
                        <li v-for="error in errors">{{ error }}</li>
                      </ul>
                    </p>
                    <div class="form-group">
                      <label for="author">Author:</label>
                      <input v-model="author" type="name" class="form-control" placeholder="Enter Author Name" id="author">
                    </div>
                    <div class="form-group">
                      <label for="quotation">Quotation:</label>
                      <textarea v-model="quotation" class="form-control" rows="5" id="quotation"></textarea>
                    </div>
                    <div class="form-group">
                       <label for="urllink">Reference Link (the URL of the page):</label>
                      <input type="text" v-model="urllink" class="form-control" placeholder="Reference Link" id="urllink">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>    
        </div>
      </div>
    </div>
</template>

<script>
    export default {
        props: ['id'],
        data(){
            return {
              about: {},              
              errors: [],
              author: null,
              urllink: null,
              quotation: null
            }
        },
        methods: {
            aboutdata(){
                axios.get('/api/aboutjson', {
                  params: {
                    id: this.id
                  }
                })
                .then((response)=>{
                  this.about = response.data.data;                       
                })
            },
            checkForm: function (e) {
              if (this.author && this.quotation && this.urllink) {
                return true;
              }

              this.errors = [];

              if (!this.author) {
                this.errors.push('Author name required.');
              }
              if (!this.quotation) {
                this.errors.push('Quotation required.');
              }
              if (!this.urllink) {
                this.errors.push('Reference link required.');
              }
              e.preventDefault();
            }                        
        },
        created(){
            this.aboutdata();            
        },
        mounted() {        
        
        },
        updated: function () {
          // When the API is call is completed. 
        }
    }
</script>
