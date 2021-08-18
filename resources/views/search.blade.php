@extends('adminlte::page')

@section('title', 'SupletivoConsulta')

@section('content_header')
<div class="loader">
    <img src="img/loading.gif" alt="Loading..." />
</div>
<br>
<!-- <div class="container-fluid">
<table id="maintable" class="display compact cell-border" cellspacing="40%" width="100%" cellpadding="10">
    <thead>
    <tr class="text-center bg-primary">
    <th scope="col">Matrícula</th>
      <th scope="col">Aluno</th>
      <th scope="col">Nascimento</th>
      <th scope="col">Nome da Mãe</th>
      <th scope="col">Disciplina</th>
      <th scope="col">Nota</th>
      <th scope="col">Resultado</th>
      <th scope="col">Município</th>
      <th scope="col">Ano</th>
    </tr>
    </thead>
    <tbody>
    

@foreach ($search_name as $name)
    <tr>
      <td>{{$name->sup_num_aluno}}</td>
      <td>{{$name->sup_nome}}</td>
      <td>{{$name->sup_data_nasc}}</td>
      <td>{{$name->sup_nome_mae}}</td>
      <td>{{$name->sup_disciplina}}</td>
      <td>{{$name->sup_nota}}</td>
      <td>{{$name->sup_resultado}}</td>
      <td>{{$name->sup_municipio}}</td>
      <td>{{$name->sup_ano}}</td>
    </tr> 
@endforeach -->


<div class="table-responsive">
<table id="tabela" class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Matrícula</th>
      <th scope="col">Aluno</th>
      <th scope="col">Nascimento</th>
      <th scope="col">Nome da Mãe</th>
      <th scope="col">Disciplina</th>
      <th scope="col">Nota</th>
      <th scope="col">Resultado</th>
      <th scope="col">Município</th>
      <th scope="col">Ano</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($search_name as $name)
    <tr>
      <td>{{$name->sup_num_aluno}}</td>
      <td>{{$name->sup_nome}}</td>
      <td>{{$name->sup_data_nasc}}</td>
      <td>{{$name->sup_nome_mae}}</td>
      <td>{{$name->sup_disciplina}}</td>
      <td>{{$name->sup_nota}}</td>
      <td>{{$name->sup_resultado}}</td>
      <td>{{$name->sup_municipio}}</td>
      <td>{{$name->sup_ano}}</td>
    </tr> 
@endforeach
  </tbody>
</table>
</div>
 <style>
   .loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader > img {
    width: 100px;
}

.loader.hidden {
    animation: fadeOut 2s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
    100% {
        opacity: 0;
        visibility: hidden;
    }
}

.thumb {
    height: 100px;
    border: 1px solid black;
    margin: 10px;
}
 </style>


@endsection

@section('css')

<link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

@endsection

@section('js')
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#tabela').DataTable();
} );
</script>
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->

<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "language": {
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro foi encontrado",
            "infoFiltered": "(filtrado de  _MAX_ registros no total)"
        } 
    })
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="js/vfs_fonts.js"></script>
<script type="text/javascript" src="js/buttons.html5.min.js"></script>
<script type="text/javascript" src="js/buttons.print.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/jquery.mark.min.js"></script>
<script type="text/javascript" src="js/datatables.mark.js"></script>
<script type="text/javascript" src="js/buttons.colVis.min.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

<script>window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});
</script>

@endsection

