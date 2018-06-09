var  vm = new Vue({
    el: '#vue_det',
    data: {
       company : "Ria",
       lastname  : "Singh",
       address    : "Mumbai",
       html1:"<h1><strong> hello this is me</h1> </p>"

    },
    methods: {
       mydetails : function() {
          return "I am "+this.firstname +" "+ this.lastname;
       }
    }
 })
 