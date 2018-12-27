<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>{{$expediente->code}}</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="{{asset('img/escudo.png')}}">
      </div>
        <h2 class="name">Republoca Bolivariana de Venezuela</h2>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora provident tenetur cupiditate veritatis laboriosam mollitia necessitatibus excepturi fugiat, repudiandae debitis, repellendus quidem labore quaerat, quia eum voluptatibus? At, reiciendis saepe?</div>
    </header>
    <main>
        <div id="details" class="clearfix">
            <div id="client">
              <div class="name"> <h3>Demandante</h3> </div>
              <h3>{{$expediente->demandante->name .' '. $expediente->demandante->lastname}}</h3>
              <div class="address"><span>{{$expediente->demandante->pais==1 ?'Cedula: ':'Identificacion: '}}</span>{{$expediente->demandante->pais==1 ?'V- ':'E- '}}{{$expediente->demandante->dni}}</div>
              <div class="address">E-mail: <span>{{$expediente->demandado->email}}</span></div>
            </div>
        <div id="invoice">
          
        </div>
      </div>
      <table>
          <thead>
            <tr>
              <th><h2 class="name">Demandado</h2></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class='td'>
                <h3>{{$expediente->demandado->name .' '. $expediente->demandado->lastname}}</h3>
                <span>{{$expediente->demandado->pais==1 ?'Cedula: ':'Identificacion: '}}</span>{{$expediente->demandado->pais==1 ?'V- ':'E- '}}{{$expediente->demandante->dni}}
                <div class="address"> E-mail: <span>{{$expediente->demandante->email}}</span></div>
              </td>
              <td>
                <div style="padding:10px;width:50px;heagth:10px;border-radius:3px;border:1px solid aqua">
                  <img src="{{asset('uploads/images/'.$expediente->imgDemandado)}}" alt="demandado imagen" style="width:100%">
                </div>
                </td>
            </tr>
          </tbody>
        </table>
      
      <div id="thanks">Motivo de la demanda</div>
      <div id="notices">
        <div class="notice">{{$expediente->type}}</div>
      </div>
    </main>
    <footer>
      <table>
        <tbody>
          <tr>
            <td>Fecha de Inicio: <b>{{$expediente->created_at}}</b> </td>
            <td>Fecha de Cierre: <b>___/___/____</b></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <span></span>
      <span>
       
      </span>
    </footer>
  </body>
</html>