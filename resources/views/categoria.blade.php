@extends('layout.main')

@section('title','Categorias')

@section('content')
<h1>CATEGORÍAS</h1>
<hr>
<table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col">Categoría</th>
      <th scope="col">Descripción</th>
      <th scope="col">Ejemplo</th>
    </tr>
  </thead>
  <tbody style="text-align: justify">
    <tr>
      <td>CÓMIC DE AVENTURAS</td>
      <td>La aventura en su sentido más puro siempre ha estado presente en la historieta, en todas sus facetas y en todos sus géneros</td>
      <td>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            VISUALIZAR
          </button>
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h4>AVENTURA</h4>
                            <button type="button" class="btn-close text-reset"aria-label="Close" type="button" class="btn btn-secondary" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/37/JumboComics99.jpg">
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
      </td>

    </tr>
    <tr>
      <td>CÓMIC BÉLICO</td>
      <td>Desde principios de los años 40, muchas series de acción se dejaron imbuir del espíritu de la segunda Guerra Mundial, de tal forma que nuevos superhéroes estadounidenses como Capitán América y La Mujer Maravilla</td>
      <td>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            VISUALIZAR
          </button>
          <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h4>BELICO</h4>
                            <button type="button" class="btn-close text-reset"aria-label="Close" type="button" class="btn btn-secondary" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Soldier_Comics_No1_L.jpg">
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
      </td>
    </tr>
    <tr>
    <td>CÓMIC HUMORÍSTICO</td>
    <td>uno de los géneros historietisticos más importantes, de tal forma que es posible encontrar referencias donde se la oponga a la historieta de aventuras o seria, como uno de los dos grandes bloques en que puede dividirse el medio. </td>
    <td>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            VISUALIZAR
          </button>
          <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h4>HUMORÍSTICO</h4>
                            <button type="button" class="btn-close text-reset"aria-label="Close" type="button" class="btn btn-secondary" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e3/PunchandJudyV1-0201.jpg">
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
    </td>
    </tr>
    <tr>
    <td>CÓMIC COSTUMBRISTA </td>
    <td>Se ha mezclado con el genero cómico, pero en las obras más contemporáneas se vinculan a la biografía y dirigidas a un lector adulto.</td>
    <td>
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">
            VISUALIZAR
          </button>
          <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h4>COSTUMBRISTA</h4>
                            <button type="button" class="btn-close text-reset"aria-label="Close" type="button" class="btn btn-secondary" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                <img src="https://cloudfront-eu-central-1.images.arcpublishing.com/prisa/5UQCIQIWX7H4RAVGEO4ZGRHB2I.jpg">
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
    </td>
    </tr>
    <tr>
    <td>CÓMIC DEPORTIVO</td>
    <td>Publica relatos breves inspirado en la vida real de diversos deportistas</td>
    <td>
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal6">
            VISUALIZAR
          </button>
          <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h4>DEPORTIVO</h4>
                            <button type="button" class="btn-close text-reset"aria-label="Close" type="button" class="btn btn-secondary" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                <img src="https://st1.uvnimg.com/c0/18/28946ca84832b244e328c2753d4f/dinho.jpg">
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
    </td>
    </tr>
    <tr>
    <td>CÓMIC FANTÁSTICO</td>
    <td>los héroes de bárbara apariencia de los cómics de fantasía heroica, luchan y triunfan siempre sobre el Mal. Por mucho que sea acechado, el héroe se resiste a morir, regresando siempre a satisfacer las expectativas que pone en él el lector</td>
    <td>
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal7">
            VISUALIZAR
          </button>
          <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h4>FANTÁSTICO</h4>
                            <button type="button" class="btn-close text-reset"aria-label="Close" type="button" class="btn btn-secondary" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                <img src="http://2.bp.blogspot.com/-eWcK2f9-HPI/VTLecwDebhI/AAAAAAAAAcY/qeCBPwGYyVA/s1600/fantastico.jpg">
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
    </td>
    </tr>
    <tr>
    <td>CÓMIC DE CIENCIA FICCIÓN</td>
    <td>Hacen referencia a la navegación interestelar, de los alunizajes, de las bombas atómicas o de las sociedades hiperindustrializadas</td>
    <td>
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal8">
            VISUALIZAR
          </button>
          <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h4>CIENCIA FICCIÓN</h4>
                            <button type="button" class="btn-close text-reset"aria-label="Close" type="button" class="btn btn-secondary" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                <img src="https://historietas.net/wp-content/uploads/2019/08/comics-de-ciencia-ficcion-de-los-70.jpg">
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
    </td>
    </tr>
    <tr>
    <td>CÓMIC DE TERROR</td>
    <td>Provoca en el lector sensaciones de pavor, miedo, disgusto, repugnancia u horror. Sus argumentos frecuentemente desarrollan la súbita intrusión en un ámbito de normalidad de alguna fuerza, evento o personaje de naturaleza maligna</td>
    <td>
       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal9">
            VISUALIZAR
          </button>
          <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h4>TERROR</h4>
                            <button type="button" class="btn-close text-reset"aria-label="Close" type="button" class="btn btn-secondary" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/Adventures_Into_the_Unknown_No_1.jpg/230px-Adventures_Into_the_Unknown_No_1.jpg">
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
    </td>
    </tr>
  </tbody>
</table>

@endsection()
