var inputphone = document.querySelector('#phone');
var button = document.querySelector('#send');
var inputdate =  document.querySelector('#birth');
var error1 = document.querySelector('#error1');
var error2 = document.querySelector('#error2');


let myregex = /^[0-9]{10,}$/;

inputphone.addEventListener('change', (e) => {
  if (myregex.test(e.target.value)) {
    console.log(myregex.test("hihi"));
    button.setAttribute('disable', false);
    error1.classList.remove('active');
  }
  else {
    button.setAttribute('disable', true);
    inputphone.style.border = 'red solid 1px';
    error1.classList.add('active');
  }
})

inputdate.addEventListener('change', (e) => {
    var dob = new Date(e.target.value);  
    var month_diff = Date.now() - dob.getTime();    
    var age_dt = new Date(month_diff);   
    var year = age_dt.getUTCFullYear();   
    var age = Math.abs(year - 1970);  
  if (age >= 18 && age <= 30)
  {
    button.setAttribute('disable', false);
    error2.classList.remove('active');
  }
  else {
    error2.classList.add('active');
  }
})

