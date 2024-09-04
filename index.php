<!DOCTYPE html>
<html>
<head>
    <title> Formulir Kontak </title>
    <style>
        body {
            background-image: url(images.PNG.png);
            height: 100vh;
            background-size: cover;
            background-position: center;
            min-height: 100px;
        }
    </style>
</head>
<body>
    <form method="post" action="process_form.php">
        <center><table>
            <h2><center> Formulir Kontak Edukasi Desa</center></h2>
            <font face="times new roman" size="4">
            <center><table border="0"</center>
            </font>
        
            <tr>
                <td> Nama Lengkap </td>
                <td> : </td>
                <td><input type="text" name="nama" size="30"></td>
            </tr>
        
            <tr>
                <td> Umur </td>
                <td> : </td>
                <td><input type="text" name="umur" size="30"></td>
            </tr>
        
            <tr>
                <td> Tempat Lahir </td>
                <td> : </td>
                <td><input type="text" name="tempat_lahir" size="30"></td>
            </tr>
        
            <tr>
                <td> Tanggal Lahir </td>
                <td> : </td>
                <td><input type="date" name="tanggal_lahir" size="30"></td>
            </tr>
           
            <tr>
                <td> Jenis Kelamin </td>
                <td> : </td>
                <td><input type="radio" name="jenis_kelamin" value="L"> Laki-Laki   
                    <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                </td>
            </tr>
        
            <tr>
                <td> Alasan </td>
                <td> : </td>
                <td><textarea cols="31" rows="5" name="alasan"></textarea></td>
        
                <tr>
                    <td> Alamat </td>
                    <td> : </td>
                    <td><textarea cols="31" rows="5" name="alamat"></textarea></td>
                    
            <tr>
                <td> Alamat Email </td>
                <td> : </td>
                <td><input type="email" name="email" size="30"></td>
        
            </tr>
        </center></table>
    </form>

<input type="submit" value="SIMPAN">
<input type="reset" value="RESET">
</body>
</html>