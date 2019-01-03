<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>{{$expediente->code}}</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
  </head>
  <body>
      <header class="clearfix" style="background:#ccc;padding:10px;">
          <div id="logo">
            <img src="{{asset('img/escudo.png')}}">
          </div>
          <div>
            <h2 class="name" style='color:white;text-align:center;'>Republica Bolivariana de Venezuela</h2>
            <div style='text-align:center'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora provident tenetur cupiditate veritatis laboriosam mollitia necessitatibus excepturi fugiat quia eum voluptatibus? At, reiciendis saepe?</div>
          </div>
          </div>
        </header>
        <main>
          <div id="details" class="clearfix">
            <div id="client">
              <div class="to">Codigo del Expediente:</div>
              <h2 class="name">{{$expediente->code}}</h2>
            </div>
            <div id="invoice">
              <h1>INVOICE 3-2-1</h1>
              <div class="date">Date of Invoice: 01/06/2014</div>
              <div class="date">Due Date: 30/06/2014</div>
            </div>
          </div>
          <table border="0" cellspacing="0" cellpadding="0">
            <thead>
              <tr>
                <th class="total">Demandante</th>
                <th class="unit"><img src="" alt="Demandante"></th>

                <th class="total">Demandado</th>
                <th class="unit">
                    <div style="padding:10px;width:50px;heagth:10px;border-radius:3px;border:1px solid aqua">
                        <img src="{{asset('uploads/images/demandado/'.$expediente->imgDemandado)}}" alt="demandado imagen" style="width:100%">
                      </div>
                  
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="total">Identificacion:</td>
                <td class="unit">{{$expediente->demandante->pais==1?'V-':'E-'}}{{$expediente->demandante->dni}}</td>

                <td class="total">Identificacion:</td>
                <td class="unit">{{$expediente->demandado->pais==1?'V-':'E-'}}{{$expediente->demandado->dni}}</td>
                
              </tr>
              <tr>
                  <td class="total">Nombre:</td>
                  <td class="unit">{{$expediente->demandante->name}}</td>
  
                  <td class="total">Nombre:</td>
                  <td class="unit">{{$expediente->demandado->name}}</td>
              </tr>
              <tr>
                  <td class="total">Apellido:</td>
                  <td class="unit">{{$expediente->demandante->lastname}}</td>
  
                  <td class="total">Apellido:</td>
                  <td class="unit">{{$expediente->demandado->lastname}}</td>
              </tr>
              <tr>
                  <td class="total">E-mail:</td>
                  <td class="unit">{{$expediente->demandante->email}}</td>
  
                  <td class="total">E-mail:</td>
                  <td class="unit">{{$expediente->demandado->email}}</td>
              </tr>
            </tbody>
            <tfoot>
                
                  <tr>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td></td>
                  </tr>
            </tfoot>
          </table>
          <div id="thanks">Tipo de demanda</div>
          <div id="notices">
          <div class="notice">{{$expediente->type->type}}</div>
          </div> <hr>
          <div id="thanks">Motivo de la demanda</div>
          <div id="notices">
            <div class="notice">{{$expediente->reason->reason}}</div>
          </div>
        </main>
        <br>
        <br>
        <footer>
          Fecha de Inicio: {{$expediente->created_at}}
        </footer>  
  </body>
</html>
  