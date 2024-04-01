<!-- ---- CONTENT ----  -->
<div class="Admin--content">
    <div class="Admin--content--container">
        <div class="Admin--content--container--title" style="background: #F8EDE3;">
            <h1>List Of Category</h1>
        </div>
        <div class="Admin--content--container--table">
            <form id="frm" class="Admin--content--container--table--box">
                <table>
                    <tr>
                        <th>Category Code</th>
                        <th>Category Name</th>
                        <th></th>
                    </tr>
                    <?php
                    $i = 1;
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id_category=" . $id_category;
                        $xoadm = "index.php?act=xoadm&id_category=" . $id_category;
                        echo '
                            <tr>
                                <td>' . $i . '</td>
                                <td>' . $name_category . '</td>
                                <td>
                                    <a href = "' . $xoadm . '"><input type="button" value="DEL"></a>
                                    <a href = "' . $suadm . '"><input type="button" value="EDIT"></a>
                                </td>
                            </tr>
                        ';
                        $i++;
                    }
                    ?>

                </table>
                <div class="Admin--content--container--table--button" style="margin-bottom: 2rem;"></a>
                    <a href="index.php?act=adddm"><input type="button" value="ADD"></a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ********************* CSS ***************************  -->
<link rel="stylesheet" href="../content/css/List-danhmuc.css">