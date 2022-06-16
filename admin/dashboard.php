<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }
?>

<h1> Centro administrativo </h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item active" aria-current="page"> Aqui se podra matricular alumnos, editar datos de alumnos ya matriculados; tambien se podran editar datos de los administradores</li>
  </ol>
</nav>


<div class="row">
  <tbody>
    
  </tbody>
</table>