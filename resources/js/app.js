/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <authors-birthdays></authors-birthdays>
 */

import AuthorBirthdays from './components/AuthorBirthdays.vue';
import AuthorAnniversaries from './components/AuthorAnniversaries.vue';
import Search from './components/Search.vue';
import PopularTopics from './components/PopularTopics.vue';
import PopularAuthors from './components/PopularAuthors.vue';
import AuthorsInNews from './components/AuthorsInNews.vue';
import AuthorsExplore from './components/AuthorsExplore.vue';
import PictureQuotesHome from './components/PictureQuotesHome.vue';
import About from './components/About.vue';
import Authors from './components/Authors.vue';
import AuthorsStatic from './components/AuthorsStatic.vue';
import Topics from './components/Topics.vue';
import TopicIndices from './components/TopicIndices.vue';
import AuthorQuotes from './components/AuthorQuotes.vue';

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('search-auto-complete', require('./components/Search.vue').default);

Vue.component('popular-topics', require('./components/PopularTopics.vue').default);

Vue.component('popular-authors', require('./components/PopularAuthors.vue').default);

Vue.component('authors-in-news', require('./components/AuthorsInNews.vue').default);

Vue.component('authors-explore', require('./components/AuthorsExplore.vue').default);

Vue.component('authors-birthdays', require('./components/AuthorBirthdays.vue').default);

Vue.component('authors-anniversaries', require('./components/AuthorAnniversaries.vue').default);

Vue.component('home-picture-quotes', require('./components/PictureQuotesHome.vue').default);

Vue.component('about-component', require('./components/About.vue').default);

Vue.component('authors-component', require('./components/Authors.vue').default);

Vue.component('authors-static', require('./components/AuthorsStatic.vue').default);

Vue.component('topics-component', require('./components/Topics.vue').default);

Vue.component('indices', require('./components/TopicIndices.vue').default);

Vue.component('author-quotes', require('./components/AuthorQuotes.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {
        AuthorBirthdays,
        AuthorAnniversaries,
        Search,
        PopularTopics,
        PopularAuthors,
        AuthorsInNews,
        AuthorsExplore,
        PictureQuotesHome,
        About,
        Authors,
        Topics,
        TopicIndices,
        AuthorsStatic,
        AuthorQuotes
    },    
});
