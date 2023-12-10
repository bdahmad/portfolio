// const form = document.getElementById('form');
// const nameU = document.getElementById('name');
// const email = document.getElementById('email');
// const subject = document.getElementById('subject');
// const message = document.getElementById('message');
// const submit = document.getElementById('submit');

// form.addEventListener('submit', e => {
    

//    if(! validateInputs()){
//     e.preventDefault();
//    }
// });
// submit.addEventListener('click',)

// const setError = (element, message) => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');

//     errorDisplay.innerText = message;
//     inputControl.classList.add('error');
//     inputControl.classList.remove('success')
// }

// const setSuccess = element => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');

//     errorDisplay.innerText = '';
//     inputControl.classList.add('success');
//     inputControl.classList.remove('error');
// };

// const isValidEmail = email => {
//     const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(String(email).toLowerCase());
// }

// const validateInputs = () => {
//     const usernameValue = nameU.value.trim();
//     const emailValue = email.value.trim();
//     const passwordValue = subject.value.trim();
//     const password2Value = message.value.trim();

//     if(usernameValue === '') {
//         setError(nameU, 'Name is required');
//         return false;
//     } else {
//         setSuccess(nameU);
//     }

//     if(emailValue === '') {
//         setError(email, 'Email is required');
//         return false;
//     } else if (!isValidEmail(emailValue)) {
//         setError(email, 'Provide a valid email address');
//         return false;
//     } else {
//         setSuccess(email);
//     }

//     if(passwordValue === '') {
//         setError(subject, 'Subject is required');
//         return false;
//     }  else {
//         setSuccess(subject);
//     }

//     if(password2Value === '') {
//         setError(message, 'Message is required.');
//         return false;
//     }  else {
//         setSuccess(message);
//     }
//     return true;
// };
document.addEventListener('DOMContentLoaded', function(){

    // find from here
    document.getElementById('form').addEventListener('submit', function (event) {
        // prevent submit here
        if(!contactFromValidation()){
            event.preventDefault();
        }
     });
});
// from validation here
function contactFromValidation(){

    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let subject = document.getElementById('subject').value;
    let message = document.getElementById('message').value;
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    // let phoneRegex = /^\+?\d*$/;
    let numericRegex = /^[0-9]+$/;

//   name
   if(name == ""){
    document.getElementById('name').focus();
    document.getElementById('nameError').textContent = 'Please Enter Your Name';
    return false

   }else if(numericRegex.test(name)){
    document.getElementById('name').focus();
    document.getElementById('nameError').textContent = 'Please Enter Valid Name';
    return false
  }else{
    document.getElementById('nameError').textContent = '';
  }

//    phone
//    if(phone == ""){
//     document.getElementById('phone').focus();
//     document.getElementById('phoneError').textContent = 'Please Enter Your Phone';
//     return false;

//    }else if (!phoneRegex.test(phone)) {
//     document.getElementById('phone').focus();
//     document.getElementById('phoneError').textContent = 'Please Enter Valid phone';
//     return false;

//    }else{
//     document.getElementById('phoneError').textContent = '';
//    }

//    email
   if(email == ""){
    document.getElementById('email').focus();
    document.getElementById('emailError').textContent = 'Please Enter Your Email';
    return false;

   }else if (!emailRegex.test(email)) {
    document.getElementById('email').focus();
    document.getElementById('emailError').textContent = 'Please Enter Valid Email';
    return false;

   }else{
    document.getElementById('emailError').textContent = '';
   }

//    subject
   if(subject == ""){
    document.getElementById('subject').focus();
    document.getElementById('subjectError').textContent = 'Please Enter Your subject';
    return false;

   }else if (numericRegex.test(subject)) {
    document.getElementById('subject').focus();
    document.getElementById('subjectError').textContent = 'Please Enter Valid subject';
    return false;

   }else{
    document.getElementById('subjectError').textContent = '';
   }

//    message
   if(message == ""){
    document.getElementById('message').focus();
    document.getElementById('messageError').textContent = 'Please Enter Your message';
    return false;

   }else if (numericRegex.test(message)) {
    document.getElementById('message').focus();
    document.getElementById('messageError').textContent = 'Please Enter Valid message';
    return false;

   }else{
    document.getElementById('messageError').textContent = '';
   }

   return true;
}

//tiny-slider
const slider = tns({
    container: '.my-slider',
    loop: true,
    items: 1,
    slideBy: 'page',
    nav: false,    
    autoplay: true,
    speed: 600,
    autoplayButtonOutput: false,
    mouseDrag: true,
    lazyload: true,
    controlsContainer: "#customize-controls",
    responsive: {
        640: {
            items: 2,
        },
        
        768: {
            items: 3,
        }
    }

  });