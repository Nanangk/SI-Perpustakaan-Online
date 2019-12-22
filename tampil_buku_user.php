<?php  

  session_start();
  $_SESSION['buku']=$_POST["id"];
  
 if(isset($_POST["id"]))  
 {       include 'koneksi/koneksi.php'; 
      $output = '';  
     
      $query = "SELECT * FROM buku WHERE id = '".$_POST["id"]."'";  
      $datanya = mysqli_query($conn, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered" style="color:black;">';  
      while($data = mysqli_fetch_array($datanya))  
      { 
        if($data['fisik']=="tersedia"  || $data['lokasi'] !="tidak ada") {
           $output .= '  
            <tr>
                <td   colspan="2" align="center" width="70%" heigth="50%" >
                  <a href="proses/sampul/'.$data["foto"].' "><img src="proses/sampul/'.$data['foto'].'" width="240" heigth="320"></a>  
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">  '.$data['judul'].'</td>

            </tr>

            <tr>
               <td align="center" colspan="2">  '."Oleh : ".$data['pengarang'].' </td>
            </tr>

            <tr>  
              <td align="center" colspan="2">  '.$data['tahun'].' </td>
            </tr>

            <tr>  
                <td align="center" colspan="2"> '."Buku Fisik : ".$data['fisik'].' </td>
            </tr>

            <tr>  
                <td align="center" colspan="2"> '."Stok : ".$data['stok'].' </td>
            </tr>

            <tr>  
                <td align="center" colspan="2"> '."Lokasi : ".$data['lokasi'].' </td>
            </tr>
           

            <tr>  
              <td colspan="2">'."Deskripsi :".' </td>
            </tr>

            <tr>  
              <td colspan="2">'.$data['deskripsi'].' </td>
            </tr>

            <tr>
              <td>
                <a href="proses/ebook/'.$data['ebook'].'"> 
                    <button  class="buku-popup-baca">Download</button>
                </a>
              </td>

              <td>
                <a href="proses/pinjam.php?=id='.$data['id'].'"> 
                    <button  class="buku-popup-baca">Pinjam</button>
                </a>
              </td>
            </tr>

            
                '; 

            }else{
              $output .= '  
            <tr>
                <td  align="center" width="70%" heigth="50%" >
                  <a href="proses/sampul/'.$data["foto"].' "><img src="proses/sampul/'.$data['foto'].'" width="240" heigth="320"></a>  
                </td>
            </tr>
            <tr>
                <td align="center">  '.$data['judul'].'</td>

            </tr>

            <tr>
               <td align="center">  '."Oleh : ".$data['pengarang'].' </td>
            </tr>

            <tr>  
              <td align="center">  '.$data['tahun'].' </td>
            </tr>


           
            <tr>  
                <td align="center"> '."Buku Fisik : ".$data['fisik'].' </td>
            </tr>
           

            <tr>  
              <td>'."Deskripsi :".' </td>
            </tr>

            <tr>  
              <td>'.$data['deskripsi'].' </td>
            </tr>

            <tr>
              <td>
                <a href="proses/ebook/'.$data['ebook'].'"> 
                    <button  class="buku-popup-baca">Download</button>
                </a>
              </td>
            </tr>



                '; 


            } 
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>