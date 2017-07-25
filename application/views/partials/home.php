<div>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"  ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Usuario</a></li>
        <li role="presentation" ><a href="#msg" aria-controls="msg" ng-click="init2();" role="tab" data-toggle="tab">menssagens</a></li>
    </ul>
    <br>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="row">
                <div class="col-lg-6">
                    <h3> {{title}} </h3>
                </div>
                <div class="col-lg-6 ">
                    <button name="novo"  ng-click="openModal();" class="btn btn-primary pull-right">Novo</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Data Nascimento</th>
                            <th>Cadastro</th>
                            <th>Biografia</th>
                            <th width="5%"></th>
                            <th width="5%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="row in collection">
                            <td><a  title="Vizualizar" ng-click="openModal(row,true)">{{row.nome}}</a></td>
                            <td>{{row.data_nasc | date:dd-MMM-yyyy}}</td>
                            <td>{{row.data_cad | date:dd/MMM/yyyy}}</td>
                            <td>{{row.biografia}}</td>
                            <td><button class="btn btn-warning btn-xs" title="Editar" ng-click="openModal(row);">Editar</button></td>
                            <td><button class="btn btn-danger btn-xs"  title="Excluir" ng-click="remover(row)">Excluir</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div role="tabpanel" class="tab-pane" id="msg">
            <div class="row">
                <div class="col-lg-6">
                    <h3> Enviar Menssagens  </h3>
                </div>
                <div class="col-lg-6 ">
                    <button name="novo"  ng-click="openModal2();" class="btn btn-primary pull-right">Novo</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Menssagem</th>
                            <th>Data envio</th>
                            <th>Usuario</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="row2 in collection2">
                            <td><a  title="Vizualizar" ng-click="openModal2(row2,true)">{{row2.msg}}</a></td>
                            <td>{{row2.data_envio | date:dd-MMM-yyyy}}</td>
                            <td>{{row2.nome}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>
