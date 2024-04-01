           <?php
            if (is_array($sanpham)) {
                extract($sanpham);
            }
            $hinhpath = "../upload/" . $image_product;
            if (is_file($hinhpath)) {
                $hinh = "<img src = '" . $hinhpath . "' height = '80'>";
            } else {
                $hinh = "no photo";
            }
            ?>
           <!-- ---- CONTENT ----  -->
           <div class="Admin--content">
               <div class="Admin--content--container">
                   <div class="Admin--content--container--title">
                       <h1>Update product</h1>
                   </div>
                   <div class="Admin--content--container--form">
                       <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                           <div class="Admin--content--container--form--group">
                               <div class="Admin--content--container--form--box">
                                   <label for="">Category</label> <br>
                                   <select name="id_category" id="">
                                       <?php
                                        foreach ($listdanhmuc as $danhmuc) {
                                            extract($danhmuc);
                                            if ($id_category == $id_category) $s = "selected";
                                            $s = "";
                                            echo '<option value="' . $id_category . '" "' . $s . '">' . $name_category . '</option>';
                                        }
                                        ?>

                                   </select>
                               </div>
                               <div class="Admin--content--container--form--box">
                                   <label for="">Product name</label> <br>
                                   <input type="text" name="name_product" value="<?= $name_product ?>" required>
                               </div>
                           </div>
                           <div class="Admin--content--container--form--group">
                               <div class="Admin--content--container--form--box">
                                   <label for="">Product price</label> <br>
                                   <input type="text" name="price_product" value="<?= $price_product ?>" required>
                               </div>
                               <div class="Admin--content--container--form--box">
                                   <label for="">Sale (%)</label> <br>
                                   <input type="text" name="discount_product" value="<?= $discount_product ?>" required>
                               </div>
                           </div>
                           <div class="Admin--content--container--form--group">
                               <div class="Admin--content--container--form--box">
                                   <label for="">Product image</label> <br>
                                   <input type="file" name="image_product" required>
                                   <?= $hinh ?>
                               </div>
                               <div class="Admin--content--container--form--box">
                                   <label for="">Product import date</label> <br>
                                   <input type="date" name="dayAdd_product" value="<?= $dayAdd_product ?>" required>
                               </div>
                           </div>
                           <div class="Admin--content--container--form--group">
                               <div class="Admin--content--container--form--box">
                                   <label for="">Product Description</label> <br>
                                   <textarea required name="describe_product" id="" cols="60" rows="5"><?= $describe_product ?></textarea>
                               </div>
                               <div class="Admin--content--container--form--box">
                                   <label for="">Special product</label> <br>
                                   <select name="especially_product" id="">
                                       <option value="1">Special</option>
                                       <option value="0">Not Special</option>
                                   </select>
                               </div>
                           </div>

                           <div class="Admin--content--container--form--button">
                               <input type="hidden" name="id_product" value="<?= $id_product ?>">
                               <input type="submit" name="capnhat" value="UPDATE">
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