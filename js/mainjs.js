$(document).ready(function(e){
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
      // console.log($('#fupForm').serialize());
        $.ajax({
            type: 'POST',
            url: 'insert.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(msg){
              console.log(msg);
                $('.statusMsg').html('');
                if(msg == 'ok'){
                    $('#fupForm')[0].reset();
                    $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Form data submitted successfully.</span>');
                }else{
                    $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Some problem occurred, please try again.</span>');
                }
                $('#fupForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
                loaddata();              
            }
        });
    });
    
    //file type validation
    $("#imageup").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            alert('Please select a valid image file (JPEG/JPG/PNG).');
            $("#imageup").val('');
            return false;
        }
    });

    loaddata();
    function loaddata(){
      $.ajax({
        url:'fetchdata.php',
        method:'POST',
        success:function(data)
         {
          console.log(data);
          $('#display_data').html(data);
         }
      })
    }



/*

  function del(id)
  {
   var info = 'id=' + id;
      if(confirm("Are you sure you want to delete this Record?")){
          var html = $.ajax({
          type: "POST",
          url: "delete.php",
          data: info,
          async: false
          }).responseText;

          if(html == "success")
          {
              $("#delete").html("delete success.");
              return true;

          }
          else
          {
              $("#captchaStatus").html("incorrect. Please try again");

              return false;
          }
      }
  }

  */


});