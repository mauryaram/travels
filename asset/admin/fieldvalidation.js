$(document).ready(function () { 

jQuery('.numbers').keyup(function () { 
this.value = this.value.replace(/[^0-9\.]/g,'');
});

jQuery('.letters').keyup(function () { 
this.value = this.value.replace(/[^a-zA-Z\s]+$/g,'');
});

jQuery('.alphanimeric').keyup(function () { 
this.value = this.value.replace(/[^A-Za-z0-9.\/\s]/g,'');
});

jQuery('.address').keyup(function () { 
this.value = this.value.replace(/[^A-Za-z0-9//,.\/\s]/g,'');

});
}); 