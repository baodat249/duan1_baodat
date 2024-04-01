           <!-- ---- CONTENT ----  -->
           <div class="Admin--content">
               <div class="Admin--content--container">
                   <div class="Admin--content--container--title" style="background:#F8EDE3 ;">
                       <h1>Category</h1>
                   </div>
                   <div class="Admin--content--container--form">
                       <form action="index.php?act=adddm" method="post">
                           <div class="Admin--content--container--form--box">
                               <label for="">Category Code</label> <br>
                               <input type="text" name="id_category" disabled required>
                           </div>
                           <div class="Admin--content--container--form--box">
                               <label for="">Category Name</label> <br>
                               <input type="text" name="name_category" required>
                           </div>
                           <div class="Admin--content--container--form--button" style="margin-bottom: 2rem;">
                               <input type="submit" name="themmoi" value="ADD NEW">
                               <input type="reset" value="RESET">
                               <a href="index.php?act=listdm"><input type="button" value="LIST"></a>
                           </div>
                           <?php
                            if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>
                       </form>
                   </div>
               </div>
           </div>
           </div>
           <!-- ********************* CSS ***************************  -->
           <link rel="stylesheet" href="../content/css/add-danhmuc.css">