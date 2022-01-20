<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table"> 
  <thead class="thead-dark">
    <tr>
      <th scope="col">Klase</th>
      <th scope="col">Kodas</th>
      <th scope="col">Vardas</th>
      <th scope="col">Pavarde</th>
      <th scope="col">Kontroliniu vidurkis</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($mokiniai as $class => $item):?>
    <?php foreach($item as $item_info => $sth):?>
      <?php $average = round(array_sum($sth['grades']) / count($sth['grades']), 2);?>
      <tr>
      <td scope="row"><?=$class?></td>
      <td><?=$item_info?></td>
      <td><?=$sth['name']?></td>
      <td><?=$sth['surname']?></td>
      <td><?=$average?></td>
      <td><?=$sth['date']?></td>
    </tr>
    <?php endforeach;?>
    <?php endforeach;?>
  </tbody>
        
        
  
</table> 
</body>
</html>