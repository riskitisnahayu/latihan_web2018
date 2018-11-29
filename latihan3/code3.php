<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <?php
        // definisikan variabel dan set nilainya kosong
        $namaErr = $genderErr = $emailErr = $websiteErr = "";
        $nama = $gender = $email = $alamat = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
                $namaErr = "Name is required";
            }else {
                // cek nama hanya diijinkan memuat alfabet dan spasi
                if (!preg_match("/^[a-zA-Z ]*$/",$_POST["nama"])) {
                    $namaErr = "Only letters and white space allowed";
                }else {
                    $nama = test_input($_POST["nama"]);
                }
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            }else{
                $gender = test_input($_POST["gender"]);
            }

            if (empty($_POST["alamat"])) {
                $alamat = "";
            }else {
                $alamat = test_input($_POST["alamat"]);
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            }else {
                // cek format alamat email apakah sudah benar atau belum
                if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid email format";
                }else {
                    $email = test_input($_POST["email"]);
                }
            }

            if (empty($_POST["website"])) {
                $website = "";
            }else{
                // cek alamat URL apakah sudah valid
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST["website"])){
                    $websiteErr = "Invalid URL";
                }else {
                    $website = test_input($_POST["website"]);
                }
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

         ?>

         <form method="post" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
             <h3>INPUT DATA MAHASISWA</h3>
             <p><span class="error">* required field</span></p>
             <table border="0">
                 <tr>
                     <td>Nama</td>
                     <td>:</td>
                     <td>
                         <input type="text" name="nama" value="<?php echo $nama;?>">
                         <span class="error">* <?php echo $namaErr;?></span>
                     </td>
                 </tr>
                 <tr>
                     <td>Gender</td>
                     <td>:</td>
                     <td>
                         <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>>Female
                         <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>>Male
                         <span class="error">* <?php echo $genderErr;?></span>
                     </td>
                 </tr>
                 <tr>
                     <td>Alamat</td>
                     <td>:</td>
                     <td>
                         <textarea name="alamat" rows="4" cols="40"><?php echo $alamat; ?></textarea>
                     </td>
                 </tr>
                 <tr>
                     <td>Email</td>
                     <td>:</td>
                     <td>
                         <input type="text" name="email" value="<?php echo $email;?>">
                         <span class="error">* <?php echo $emailErr;?></span>
                     </td>
                 </tr>
                 <tr>
                     <td>Website</td>
                     <td>:</td>
                     <td>
                         <input type="text" name="website" value="<?php echo $website; ?>">
                         <span class="error"><?php echo $websiteErr;?></span>
                     </td>
                 </tr>
             </table>
             <br/>
             <input type="submit" name="simpan" value="Simpan">
        </form>

        <h3>Data Mahasiswa</h3>
        <table border="0">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td><?php echo $gender ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $alamat ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <td>Website</td>
                <td>:</td>
                <td><?php echo $website ?></td>
            </tr>
        </table>
    </body>
</html>
