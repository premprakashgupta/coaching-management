$(document).ready(function(){
    console.log("p");
    // Notification machine
    $('.Notification').click(function(){
        $('.notice').fadeToggle();
    })
    $('.navbar-toggler').click(function(){
        $('.notice').hide();
    })

    // signup form machine
// function signup(){

//     let email = $('#email').val();
//     let password = $('#password').val();
//     let cpassword = $('#cpassword').val();
    
//     if(email!='' && password!='' && cpassword!='' && password==cpassword){
       
         
//         console.log(email,password,cpassword);

//         $.ajax({
//                 url: 'validation.php',
//                 type: 'post',
//                 data: {email:email,password:password,cpassword:cpassword},
//                 success: function(data){
//                     //  $('#msg').append('<span>first name : '+data+'</span>'); 
//                     alert(data);
//                     $('#email').val("");
//                     $('#password').val("");
//                     $('#cpassword').val("");
                   
//             // location.reload();
//                     if(data!='error'){
//                         $('.approvel_reject').show();
//                         $('.signup_login').hide();
//                     }
                    
                    
//                 }
                
                
//             });
//      }
//      else{
//          alert("all section required");
//      }



// }
    
// $('#submit').on('click',function(e){
//     e.preventDefault();
//     signup();
// }); 


// admission form submit 
// function form_send(){
//     let fname = $('#fname').val();
//     let lname = $('#lname').val();
//     console.log(fname,lname);
//     let gender = $('input[name="gender"]:checked').val();
//     let class_name = $('#class_name').val();
//     let stream = $('input[name="stream"]:checked').val();
//     let mobile = $('#mobile').val();
//     let address = $('#address').val();
//     console.log(fname,lname,gender,class_name,stream,mobile,address);
    
//     if(fname!='' && lname!='' ){
       
         

//         $.ajax({
//                 url: 'admission_form_machine.php',
//                 type: 'post',
//                 data: {fname:fname,lname:lname,gender:gender,class_name:class_name,stream:stream,mobile:mobile,address:address},
//                 success: function(data){
                    
                   

                    
                    
//                 }
                
                
//             });
//      }
//      else{
//          alert("all section required");
//      }

// }
// $('#form_send').on('click',function(e){
//     e.preventDefault();
//     form_send();
// }); 

// logout machine
function logout(){

    console.log('hii');

    $.ajax({
            url: 'logout.php',
           
            success: function(data){
                //  $('#msg').append('<span>first name : '+data+'</span>'); 
                alert(data);
                $('.approvel_reject').hide();
                $('.signup_login').show();
                $('.user_name_p_tag').html('Welcome in COACHING NAME,');
                location.reload();

            }
            
            
        });  
}
$('#logout').on('click',function(e){
    e.preventDefault();
    
    logout();
}); 

function admission_notification_display(){
    $.ajax({
  url: 'admission_notification_display.php',
  success: function(data){
    var result = $.parseJSON(data);
      $('.admission_notification .tbody').append(result[0]);
      $('.notice_count').html(result[1]);
      if(result[1]>0)
      {
        $('.notice_count').addClass('badge-danger badge-pill');
      }
      else{
        $('.notice_count').removeClass('badge-danger badge-pill');
        $('.notice_count').html("");
      }
  }
  
  
});
           }

           function total_student_list_display(){
            $.ajax({
          url: 'total_student_list_display.php',
          success: function(data){
            $('.studen_list .tbody tr').remove();
              
              var result = $.parseJSON(data);
              $('.studen_list .tbody').append(result[0]);
              $('.student_num').html(result[1]);
              
          }
          
          
        });
                   }
           $('.admission_notification .tbody tr').remove();
           $('.studen_list .tbody tr').remove();
           admission_notification_display();
           total_student_list_display();

           $('.admission_notification .tbody').on("click","tr",function(){
            
            admission_notification_display();


           });
           
        //    student_detail_display();

        // admission approval 
 function admit_reject(x){
     console.log(x);
    $.ajax({
        url: 'admit_reject.php',
        type: 'post',
       data: {approval:x},
        success: function(data){
            //  $('#msg').append('<span>first name : '+data+'</span>'); 
            alert(data);
            
           window.location.href='http://localhost/school/dashboard.php';
            
        }
        
        
    }); 


 }

        $('#admit').on("click",function(){
            admit_reject('admit');
            
        });

        $('#reject').on("click",function(){
        
            admit_reject('reject');
            rejected_form();
             
         }); 




        // Notification insert
            function notification_insert(){
                let notice=$('#notice').val();
                if(notice!='')
                {
                    $.ajax({
                        url: 'notice_insert.php',
                        type: 'post',
                       data: {notice:notice},
                        success: function(data){
                            //  $('#msg').append('<span>first name : '+data+'</span>'); 
                            alert(data);
                            $('#notice').val("");
                           
                            
                        }
                        
                        
                    }); 
        
                }
                else{
                    alert('Fill notice');
                }
                
        
            }
        $('#publish').on("click",function(){
            notification_insert();

        });


// Notification display 



function notice_display(){

        console.log("ppp");
    $.ajax({
     url: 'notice_display.php',
     success: function(data){
         //  $('#msg').append('<span>first name : '+data+'</span>'); 
         $('.notice tbody tr').remove();
         $('.notice tbody').append(data);
         
        
         
     }
     
     
 }); 


};

notice_display();

// search machine 

let input_length=0;
// function for search ?



function search_and_display(){
    let search_input = $('#search_input').val();
    input_length=search_input.length;
    console.log(input_length);
    if(search_input!=''){
       
         
        console.log(search_input);

        $.ajax({
                url: 'search.php',
                type: 'post',
                data: {search_input:search_input},
                success: function(data){
                    //  $('#msg').append('<span>first name : '+data+'</span>'); 
                    // alert(data);
                    if(data=='error'){
                        alert("No any record Found ");
                    }
                    else{
                        $('.search_detail span').remove();
                    var result = $.parseJSON(data);
                    $('.search_detail').append(result[0]);
                    $('.student_name h3:nth-child(1)').html(result[2]+" "+result[3]);
                    
                    $('.student_name h3:nth-child(2)').html(result[1]);
                    }
            
                    
                }
                
                
            });
     }
     else{
         alert("input for search is required");
     }
}
$('.fa-search').on('click',function(e){
    e.preventDefault();
    search_and_display();

}); 
$('#search_input').on("keyup",function(){
    let search_input = $('#search_input').val().length;

if(search_input=="" || search_input<input_length ){
    $('.search_detail span').remove();
    $('.student_name h3').html("");
                
}
})



$('.search_detail').on("click","span",function(){
    let month_name=$(this).html().trim();
    let search_input = $('#search_input').val();
    $.ajax({
        url: 'fee_paid.php',
        type: 'post',
        data: {search_input:search_input,month_name:month_name},
        success: function(data){
            //  $('#msg').append('<span>first name : '+data+'</span>'); 
            // alert(data);
            alert(data);
            search_and_display();
            
        }
        
        
    });
});



function signup(){

    let email = $('#email').val();
    let password = $('#password').val();
    let cpassword = $('#cpassword').val();
    
    if(email!='' && password!='' && cpassword!='' && password==cpassword){
       
         
        console.log(email,password,cpassword);

        $.ajax({
                url: 'validation.php',
                type: 'post',
                data: {email:email,password:password,cpassword:cpassword},
                success: function(data){
                    //  $('#msg').append('<span>first name : '+data+'</span>'); 
                    alert(data);
                    $('#email').val("");
                    $('#password').val("");
                    $('#cpassword').val("");
                   
                    location.reload();
                    if(data!='error'){
                        $('.approvel_reject').show();
                        $('.signup_login').hide();
                    }
                    if(data=='dashboard'){
                        
                        window.location.href='http://localhost/school/dashboard.php';
                    }
                    
                    
                }
                
                
            });
     }
     else{
         alert("all section required");
     }



}
    
$('#submit').on('click',function(e){
    e.preventDefault();
    signup();
}); 


// admission form submit 
function reciept(){
    let rstudent_name = $('#rstudent_name').val();
    let rstudent_class = $('#rstudent_class').val();
    let rstudent_fee = $('#rstudent_fee').val();
    let rstudent_month = $('#rstudent_month').val();
   
    if(rstudent_name!='' && rstudent_class!='' && rstudent_fee!='' && rstudent_month!='' ){
       
         

        $.ajax({
                url: 'reciept/reciept.php',
                type: 'post',
                data: {rstudent_name:rstudent_name,rstudent_class:rstudent_class,rstudent_fee:rstudent_fee,rstudent_month:rstudent_month},
                success: function(data){
                    
                    alert(data);
                    $('.reciept input:not(".btn")').val("");
                    
                    
                    
                }
                
                
            });
     }
     else{
         alert("all section required");
     }

}
$('#generate').on('click',function(e){
    e.preventDefault();
    reciept();
}); 

// admission form submit 


$('#submit_form_photo').on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(this);
    // $('.upper_input_box i').attr("class","fa fa-spinner");

    $.ajax({

        url: "admission_form_machine.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(result){
            alert(result);
                    $('.admission_container .form input[type="text"]').val("");
                    $('.admission_container .form textarea').val("");
                    // $('.admission_container .form input:not(".btn")').reset();
                    $('.admission_container .form input[name="gender"]').prop('checked', false);
                    $('.admission_container .form input[name="stream"]').prop('checked', false);

            
        }
        



    })
});

// dashboard


function dashboard_logout(){

    console.log('hii');

    $.ajax({
            url: 'logout.php',
           
            success: function(data){
                //  $('#msg').append('<span>first name : '+data+'</span>'); 
                alert(data);
                window.location.href='http://localhost/school/index.php';

            }
            
            
        });  
}
$('#dashboard_logout').on('click',function(e){
    e.preventDefault();
    
    dashboard_logout();
}); 


function rejected_form(){
    $.ajax({
  url: 'rejected_form.php',
  success: function(data){
    $('.rejected_form .tbody tr').remove();
      
      
      $('.rejected_form .tbody').append(data);
      
      
  }
  
  
});
           }
  
   $('.rejected_form .tbody tr').remove();
   
   rejected_form();


});