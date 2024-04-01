           <!-- ---- CONTENT ----  -->
           <div class="Admin--content">
               <div class="Admin--content--container">
                   <div class="Admin--content--container--title" style="background-color: #F8EDE3;">
                       <h1>Add New Product</h1>
                   </div>
                   <div class="Admin--content--container--form">
                       <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                           <div class="Admin--content--container--form--group">
                               <div class="Admin--content--container--form--box">
                                   <label for="">Product portfolio</label> <br>
                                   <select name="id_category" id="">
                                       <?php
                                        foreach ($listdanhmuc as $danhmuc) {
                                            extract($danhmuc);
                                            echo '<option value="' . $id_category . '">' . $name_category . '</option>';
                                        }
                                        ?>

                                   </select>
                               </div>
                               <div class="Admin--content--container--form--box">
                                   <label for="">Product's ame</label> <br>
                                   <input type="text" name="name_product" required>
                               </div>
                           </div>
                           <div class="Admin--content--container--form--group">
                               <div class="Admin--content--container--form--box">
                                   <label for="">Product's price</label> <br>
                                   <input type="text" name="price_product" required>
                               </div>
                               <div class="Admin--content--container--form--box">
                                   <label for="">Sale (%)</label> <br>
                                   <input type="text" name="discount_product" required>
                               </div>
                           </div>
                           <div class="Admin--content--container--form--group">
                               <div class="Admin--content--container--form--box">
                                   <label for="">Product's image</label> <br>
                                   <input type="file" name="image_product" required>
                               </div>
                               <div class="Admin--content--container--form--box">
                                   <label for="">Product import date</label> <br>
                                   <input type="date" name="dayAdd_product" required>
                               </div>
                           </div>
                           <div class="Admin--content--container--form--group">
                               <div class="Admin--content--container--form--box">
                                   <label for="">Product Description</label> <br>
                                   <textarea name="describe_product" id="" cols="60" rows="10" required></textarea>
                               </div>
                               <div class="Admin--content--container--form--box">
                                   <label for="">Special product</label> <br>
                                   <select name="especially_product" id="">
                                       <option value="1">Special</option>
                                       <option value="0">not special</option>
                                   </select>
                               </div>
                           </div>

                           <div class="Admin--content--container--form--button">
                               <input type="submit" name="themmoi" value="ADD NEW">
                               <input type="reset" value="RESET">
                               <a href="index.php?act=listsp"><input type="button" value="LIST"></a>
                           </div>
                           <?php
                            if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>
                       </form>
                   </div>
               </div>
           </div>
           </div>
           <!-- ********************* CSS ***************************  -->
           <link rel="stylesheet" href="../content/css/add-Sanpham.css">