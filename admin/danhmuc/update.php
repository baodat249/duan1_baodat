           <?php
            if (is_array($dm)) {
                extract($dm);
            }
            ?>
           <!-- ---- CONTENT ----  -->
           <div class="Admin--content">
               <div class="Admin--content--container">
                   <div class="Admin--content--container--title" style="background-color: #F8EDE3;">
                       <h1>Update Category</h1>
                   </div>
                   <div class="Admin--content--container--form">
                       <form action="index.php?act=updatedm" method="post">
                           <div class="Admin--content--container--form--box">
                               <label for="">Category Code</label> <br>
                               <input type="text" name="id_category" disabled required>
                           </div>
                           <div class="Admin--content--container--form--box">
                               <label for="">Category Name</label> <br>
                               <input required type="text" name="name_category" value="<?php if (isset($name_category) && ($name_category != "")) echo $name_category ?>">
                           </div>
                           <div class="Admin--content--container--form--button" style="margin-bottom: 2rem;">
                               <input type="hidden" name="id_category" value="<?php if (isset($id_category) && ($id_category > 0)) echo $id_category ?>">
                               <input type="submit" name="capnhat" value="UPDATE">
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