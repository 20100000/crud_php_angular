
        <div class="row">
            <div class="col-lg-6">
                <h3> {{title}} </h3>
            </div>
            <div class="col-lg-6 ">
                <button name="novo" class="btn btn-primary pull-right">Novo</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data Nascimento</th>
                        <th>cadastro</th>
                        <th>Biografia</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat="row in model">
                        <td><a >{{row.nome}}</a></td>
                        <td>{{row.data_nasc | date:dd-MMM-yyyy}}</td>
                        <td>{{row.data_cad | date:dd/MMM/yyyy}}</td>
                        <td>{{row.biografia}}</td>
                        <td><button class="btn btn-warning">Edit</button></td>
                        <td><button class="btn btn-danger">Delete</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
