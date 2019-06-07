function validateEmail(e){
    if(e.value.indexOf('@')==-1 ||e.value.indexOf('.')==-1){
        e.style.border='2px solid tomato';
        //e.setAttribute('class','is-invalid');
    }else{
        e.style.border='2px solid green' 
        //e.setAttribute('class','is-valid');
    }
}
function validatePass(e){
    if(e.value.trim().length==0){
        e.style.border='2px solid tomato';//('class','is-invalid');
    }else{
        e.style.border='2px solid green'
        //e.setAttribute('class','is-valid');
    }
}