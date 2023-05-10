
// SERVICES
// $(document).ready(function() {

//   //  TESTIMONIALS CAROUSEL HOOK
//   $('#customers-testimonials').owlCarousel({
//       loop: true,
//       center: true,
//       items: 3,
//       margin: 0,
//       autoplay: true,
//       dots:true,
//       autoplayTimeout: 8500,
//       smartSpeed: 450,
//       responsive: {
//         0: {
//           items: 1
//         },
//         768: {
//           items: 2
//         },
//         1170: {
//           items: 3
//         }
//       }
//   });
//   });
// SERVICES

  
// Subscriber 
function Subscriber(){
    var emailParams = {
        email : document.getElementById('email').value
    }
 
    const serviceId = "service_lhz0z25";
    const templateId = "template_c2d5y6h";


    if(emailParams.email !==""){
      emailjs.send(serviceId, templateId,emailParams)
        .then(response=> {
            document.getElementById('email').value =""
            alert('email sent succcefully !');
        }).catch(error => {
            console.log('FAILED...', error);

        });
    }else{
      alert('please fill the field')
    }
}
// appointement 
function AppointementMail(){
  
    var emailParams = {
        firstname : document.getElementById('firstname').value,
        lastname : document.getElementById('lastname').value,
        email : document.getElementById('email').value,
        doctor : document.getElementById('doctor').value,
        date : document.getElementById('date').value,
       
    }
 
    const serviceId = "service_xq2fu38";
    const templateId = "template_eiswzeu";

    if(emailParams.firstname !=="" && emailParams.lastname !==""   
    && emailParams.email !==""  && emailParams.doctor !==""  && emailParams.date !=="" ) {
    
      emailjs.send(serviceId, templateId,emailParams)
      .then(response=> {
          document.getElementById('email').value =""
          document.getElementById('firstname').value =""
          document.getElementById('lastname').value =""

          console.log(response.status + " \n" + response.text);
          alert('Appointemet has been set succcefully !');
         
        

      }).catch(error => {
          console.log('FAILED...', error);

      });
    }else{
      alert("Please fill out the fields ");

    }
  
}
// // //Contact
// function NewContact(){
//   // var emailParams = {
//   //     firstname : document.getElementById('firstname').value,
//   //     lastname : document.getElementById('lastname').value,
//   //     email : document.getElementById('email').value,
//   //     doctor : document.getElementById('doctor').value,
//   //     date : document.getElementById('date').value,
     
//   // }

//   // const serviceId = "service_8bdwssu";
//   // const templateId = "template_eiswzeu";

//   // if(emailParams ==="") {
  
//   //   alert("Please fill out the fields ");
//   // }else{
//   //     emailjs.send(serviceId, templateId,emailParams)
//   //     .then(response=> {
//   //         document.getElementById('email').value =""
//   //         document.getElementById('firstname').value =""
//   //         document.getElementById('lastname').value =""

//   //         console.log(response.status + " \n" + response.text);
//   //         alert('Appointemet has been set succcefully !');
//   //     }).catch(error => {
//   //         console.log('FAILED...', error);

//   //     });
//   // }
//   // window.location.href = '../website/thankyou.html';
//   // alert('thank you')
// }

// scroll top
window.addEventListener('scroll', () => {
  const nav = document.querySelector('nav');
  const btn = document.getElementById('scroll-btn');
  if (window.scrollY > 0) {
    nav.classList.add('shadow-md');
    btn.style.display="block"
  } else {
    nav.classList.remove('shadow-md');
    btn.style.display="none"

  }
});


// ScrollTop
function ScrollTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
// // Dark Mode Map
// const btnMap = document.getElementById("btn-map");
// const darkMap = document.getElementById("map");

// btnMap.addEventListener('click',()=>{
  
//     darkMap.classList.toggle('dark')

  
// })