// var x = document.getElementById("goods_status").value;
// // Check if it is not empty
// if(x == "NA"){
//  document.querySelector('#btn_disapproved').style.display = 'block';
//  document.querySelector('#btn_approved').style.display = 'block'; 
//  document.querySelector('#btn_return').style.display = 'none';

//  } else if(x == "Loaned") {
//    document.querySelector('#btn_disapproved').style.display = 'none';
//    document.querySelector('#btn_approved').style.display = 'none';  
//    document.querySelector('#btn_return').style.display = 'block';  

 
//  } else{
  
//  }



// function replaceClass(id, oldClass, newClass) {
//   var elem = $(`#${id}`);
//   if (elem.hasClass(oldClass)) {
//     elem.removeClass(oldClass);
//   }
//   elem.addClass(newClass);
// }


// $(document).ready(function(){
    
//   var y = ($('#tbl_info').find('td:is(#goods_status)').html());
//   if(y == "NA"){
//     replaceClass("btn_disapproved", "invisible", "visible");
//     replaceClass("btn_approved", "invisible", "visible");
//     document.querySelector('#btn_disapproved').style.display = 'block';
//     document.querySelector('#btn_approved').style.display = 'block'; 
//     document.querySelector('#btn_return').style.display = 'none';
   
//     } else if(y == "Loaned") {
//       replaceClass("btn_return", "invisible", "visible");
//       document.querySelector('#btn_disapproved').style.display = 'none';
//       document.querySelector('#btn_approved').style.display = 'none';  
//       document.querySelector('#btn_return').style.display = 'block';  
   
    
//     } else{

     
//     }
// })

// $(document).ready(function(){
//   var y = $( "#selectType option:selected" ).val();
//   //var y = document.getElementById("selectType").value;
//   if(y == "Unreturnable"){
//     replaceClass("#remark_reason", "invisible", "visible");
//     replaceClass("#expected_date", "invisible", "visible");
//     document.querySelector('#remark_reason').style.display = 'block';
//     } else if(y == "Returnable") {
//       replaceClass("#expected_date", "invisible", "visible");
//     document.querySelector('#expected_date').style.display = 'block';  
   
    
//     } else{

     
//     }
//     console.log(y)   
// })



//   var x = document.getElementById("data_return_type").value;
//  // Check if it is not empty
//  if(x == "Unreturnable"){
//   document.querySelector('#data_expected_date').style.display = 'none';
//   document.querySelector('#data_actual_date').style.display = 'none'; 
//   document.querySelector('#data_remark_reason').style.display = 'block';
 
//   } else if(x == "Returnable") {
//     document.querySelector('#data_remark_reason').style.display = 'none';
//     document.querySelector('#data_expected_date').style.display = 'block';  
//     document.querySelector('#data_actual_date').style.display = 'block';  

  
//   } else{
   
//   }
var rowCount = $('#tbl_goods tr').length-1;
console.log(rowCount)
$(function() {
  $(".checkbox").click(function(){
      $('#btn_rejected, #btn_verified').prop('disabled',$('input.checkbox:checked').length != rowCount);
  });
});

document.getElementById("confirm").addEventListener('click', function(){

  Swal.fire({
    toast: true,
    icon: 'success',
    title: 'Berhasil dikembalikan',
    text: 'Good job!',
    text:'You clicked the button!',
    text: 'SUKSES!',
    animation: true,
    position: 'top',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: false,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
});


// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
  $('.js-example-basic-single').select2();
});


$(document).ready(function(){
    var down = false;
    
    $('#bell').click(function(e){
    
    var color = $(this).text();
    if(down){
    
    $('#box').css('height','0px');
    $('#box').css('opacity','0');
    down = false;
    }else{
    
    $('#box').css('height','auto');
    $('#box').css('opacity','1');
    down = true;
    
    }
    
    });


    
});
    

$(function() {

  $('input[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});
   
