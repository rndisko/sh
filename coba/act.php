<?php
   $nama = $_POST['nama'];
   $jeniskelamin = $_POST['jeniskelamin'];
   
   echo 
   '<thead>
      <tr>
        <td>Nama</td>
        <td>Jenis kelamin</td>
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <td>'.$nama.'</td>
        <td>'.$jeniskelamin.'</td> 
      </tr>
    </tbody>';
?>