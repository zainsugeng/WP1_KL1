<!----------sub header 5--------- -->
<?php include 'sub_header/subheader5.php'; ?>
<!----- data ----->
<?php
        $nm=$_POST['name'];
        $e=$_POST['email'];
        $s=$_POST['subject'];
        $m=$_POST['message'];
    ?>
<section class="output_contact">
    <div class="table-container">
    <table class="tabel">
            <tr>
                <td colspan="3" style="text-align: center;"><h3>DATA ANDA</h3></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nm;?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $e;?></td>
            </tr>
            <tr>
                <td>Subjek</td>
                <td>:</td>
                <td><?php echo $s;?></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td>:</td>
                <td><?php echo $m;?></td>
            </tr>
    </table>
    </div>
</section>

<!-- --------footer--------- -->
<?php include 'footer.php'; ?>