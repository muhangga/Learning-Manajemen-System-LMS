<style>
   a {
      padding: 10px 20px;
      border: 1px solid #5e547c;
      text-decoration: none;
      color: black;
      font-size: 14px;
      /* margin-left: 600px; */
      position: absolute;
      left: 45%;
      border-radius: 20px;
      transition: 0.3s ease;
   }

   a:hover {
      padding: 10px 20px;
      background: #5e547c;
      text-decoration: none;
      color: #FFF;
      font-size: 14px;
      position: absolute;
      left: 45%;
      border-radius: 20px;
   }
</style>

<html>
   <head>
   <title>404 - NOT FOUND</title>
   </head>
      <body>
         <section>
            <div>
               <div align="center" style="margin-top:50px; margin-bottom:50px;">
                  <img src="<?php echo base_url('vendor/image/404.png');?>" width="500px" /> 
               </div>
               <div class="row justify-content-center align-center ml-auto mr-auto">
                  <div class="col">
                     <a href="<?php echo base_url('Landingpage');?>">Return to Home</a>
                  </div>
               </div>
            </div>
         </section>
      </body>
</html>