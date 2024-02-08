
<html>
    <head>
        <title>KABA'S</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="{{asset('css/interface.css')}}">
    </head>


  <body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12">
                <div class="card mx-auto">
                    <p class="heading">FORMULAIRE DE PAIEMENT</p>
                    @if(session('success'))
                        <div class="alert alert-danger vstack gap-2 my-3 w-100">
                            {{session('success')}}
                        </div>
                    @endif
                    <form action="{{route('cart.payment')}}" method="post" class="card-details " id="form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-0">
                                    <p class="text-warning mb-0">Nom</p>
                                    <input type="hidden" name="customer_payment" id="customer_id"> 
                                    <input type="text" name="customer_name" id="customer_name" value="Cisse"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <p class="text-warning mb-0">Prénom</p>
                                    <input type="text" name="customer_surname" id="customer_surname" value="Fanta">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <p class="text-warning mb-0">Téléphone</p>
                                    <input type="text" name="customer_phone" id="customer_phone" value="620914392">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <p class="text-warning mb-0">E-mail</p>
                                    <input type="email" name="customer_email" id="customer_email" value="fanta@cisse.com">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-0">
                                    <p class="text-warning mb-0">Montant</p> 
                                    <input type="number" name="amount" id="amount" value="{{$carte->totale()}}"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <p class="text-warning mb-0">Devise</p>
                                    <select class="form-select" name="currency" id="currency">
                                        <option value="GNF">GNF</option>
                                        <option value="XOF">XOF</option>
                                        <option value="XAF">XAF</option>
                                        <option value="CDF">CDF</option>
                                        <option value="USD">USD</option>
                                    </select>

                                </div>
                            </div>
                        </div>

                       <div class="row">
                           <div class="col-sm-12">
                               <div class="form-group mb-3">
                                    <p class="text-warning mb-0">Description</p>
                                    <input type="text" name="description" value="Achat sdk">
                                </div>
                           </div>
                        
                       </div>
                       

                      <div class="pt-0"> <button type="submit" name="valider" class="btn btn-success">Valider<i class="fas fa-arrow-right px-3 py-2"></i></button> </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>