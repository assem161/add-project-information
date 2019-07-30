<!DOCTYPE html>
<html lang="ar" class="no-js" dir="rtl">

<head>
	<title>taberk</title>
	<meta charset="utf-8">
	<meta name="taberk" content="اكاديمية تبارك التعلمية للتعليم الالكتروني">
	<!-- app icons -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
           <div class="container">  
                <br />  
                <br />  
                <h2 align="center">اضف معلومات مشروعك </h2>  
                <div class="form-group">  
                     <form method="POST" enctype="multipart/form-data" id="fupForm">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td>
                                         <input type="text" id="name" name="name" placeholder="اسمك  "/>
                                         </td>
                                    </tr>
                                    <tr>  
                                         <td>
                                         <input type="text" id="phone" name="phone" placeholder="تليفونك "/>
                                         </td>                                           
                                    </tr>
                                    <tr>  
                                         <td>
                                         <input type="file" id="imageup" name="imageup" placeholder="صورتك"/>
                                         </td>                                           
                                    </tr>
                                    <tr>  
                                         <td>
                                          <select name="typer" id="typer" class="browser-default">
                                            <option selected value="PAL">PAL</option>
                                            <option value="SEL">SEL</option>
                                            <option value="DEL">DEL</option>
                                          </select>
                                         </td>
                                    </tr>
                                    <tr>  
                                         <td>
                                          <textarea name="message" id="message" placeholder="رسالتك">
                                            
                                          </textarea>
                                         </td>                                           
                                    </tr>                                                                                                              
                               </table>  
                               <input type="submit" name="submit" id="submit" class="btn btn-info" value="ارسال" />  
                          </div>  
                     </form>  
                </div>  
           </div>

           <div class="container">
           	<div id="display_data">
              
            </div>
           </div>


		<script src="js/jquery-3.4.0.min.js"></script>
		<script src="js/materialize.min.js"></script>
		<script src="js/mainjs.js"></script>
</body>

</html>