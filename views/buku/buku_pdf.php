 <!DOCTYPE html>
 <html>

 <head>
     <title>Print Invoice</title>
     <style>
         .page {
             padding: 2cm;
         }

         table {
             border-spacing: 0;
             border-collapse: collapse;
             width: 100%;
         }

         table td,
         table th {
             border: 1px solid #ccc;
         }

         table th {
             background-color: blueviolet;
         }
     </style>
 </head>

 <body>
     <div class="page">
         <h1 style="text-align: center;">Data Buku</h1>
         <table border="0">
             <tr>
                 <th>No</th>
                 <th>Judul Buku</th>
                 <th>Pengarang</th>
                 <th>Penerbit</th>
             </tr>
             <?php
                // $no = 1;
                foreach ($dataProvider->getModels() as $buku) {
                ?>
                 <tr>
                     <td><?= $buku->id ?></td>
                     <td><?= $buku->judul_buku ?></td>
                     <td><?= $buku->pengarang ?></td>
                     <td><?= $buku->penerbit ?></td>
                 </tr>
             <?php
                }
                ?>
         </table>
     </div>
 </body>

 </html>