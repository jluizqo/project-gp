@extends('master')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <div class="btn-toolbar" aria-label="Toolbar with button groups" role="toolbar">
            <div class="btn-group " role="group" aria-label="...">
                <a href="#" class="btn btn-default"><i class="fa fa-trash "></i> Basurero </a>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Dropdown
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                    </ul>
                </div>
            </div>
            <div class="btn-group " role="group" aria-label="...">
                <div class="input-group">
                    <form action="" method="post">
                        <input type="text" class="form-control" placeholder="Buscar...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search "></i></button>
                        </span>
                    </form>
                </div><!-- /input-group -->
            </div>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th >#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($index = 0; $index < 30; $index++) {
                    ?>
                    <tr>
                        <th scope="row"><input type="checkbox" class="control-form"></th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a href="#" title="Editar"><i class="fa fa-edit fa-lg"></i></a> 
                            <a href="#" title="Enviar a Basurero" style="color: #E64500;"><i class="fa fa-trash fa-lg"></i></a>
                        </td>
                    </tr>  
                    <?php
                }
                ?>
            </tbody>
        </table>

        <ul class="pagination pull-right">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection