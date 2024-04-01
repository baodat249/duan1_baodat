<!-- ---- CONTENT ----  -->
<div class="Admin--content">
    <div class="Admin--content--container">
        <div class="Admin--content--container--title">
            <h1>list Of Product</h1>
        </div>
        <div class="Admin--content--container--table">
            <div class="Admin--content--container--table--box">
                <form action="index.php?act=listsp" method="post">
                    <input type="text" name="kyw" placeholder="Enter the product name">
                    <select name="id_category" id="">
                        <option value="0" selected>ALL</option>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="' . $id_category . '">' . $name_category . '</option>';
                        }
                        ?>
                    </select>
                    <input type="submit" name="listok" value="Submit">
                </form>
                <table>
                    <tr>
                        <th>Product code</th>
                        <th>Product name</th>
                        <th>Product price</th>
                        <th>Product image</th>
                        <th>View</th>
                        <th>type</th>
                        <th></th>
                    </tr>
                    <?php
                    $i = 1;
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id_product=" . $id_product;
                        $xoasp = "index.php?act=xoasp&id_product=" . $id_product;
                        $hinhpath = "../upload/" . $image_product;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='" . $hinhpath . "' height = '80'>";
                        } else {
                            $hinh = "No photo";
                        }
                        if ($especially_product == 1) {
                            $tt = "Special";
                        } else {
                            $tt = "not special";
                        }
                        echo '
                            <tr>
                                <td>' . $i . '</td>
                                <td>' . $name_product . '</td>
                                <td>' . $price_product . '</td>
                                <td>' . $hinh . '</td>
                                <td>' . $view_product . '</td>
                                <td>' . $tt . '</td>
                                <td>
                                    <a href = "' . $xoasp . '"><input type="button" value="Dell"></a> 
                                    <a href = "' . $suasp . '"><input type="button" value="Edit"></a>
                                </td>
                            </tr>
                        ';
                        $i++;
                    }
                    ?>

                </table>
                <div class="Admin--content--container--table--button" style="margin-bottom:2rem;">
                    <a href="index.php?act=addsp"><input type="button" value="ADD"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ********************* CSS ***************************  -->
<link rel="stylesheet" href="../content/css/list-danhmuc.css">
<link rel="stylesheet" href="../content/css/List-sanpham.css">