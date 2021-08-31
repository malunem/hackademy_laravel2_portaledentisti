<x-html>
    <x-slot name="page_content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 id="homepage_title">Scopri il centro più vicino a te e prenota un check-up compilando il form</h1>
                </div>
                @if (session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                    
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-12 col-lg-7" id="header_img">
                    <img src="media/dentist_header.png" class="img-fluid" alt="illustrazione dentista">
                </div>
                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center" id="form_col">
                    <form action="{{route('submit')}}" method="post" novalidate>
                        @csrf
                        <div>
                            <h2>RICHIEDI UN CHECK-UP</h2>
                            <p>
                                TI RICHIAMEREMO ENTRO 24 ORE.
                            </p>
                        </div>
                        
                        <input placeholder="NOME*" name="name" type="text" class="form-control" value="{{old('name')}}">

                        <input placeholder="COGNOME*" name="surname" type="text" class="form-control" value="{{old('surname')}}">
                    
                        <input placeholder="TELEFONO*" name="phonenumber" type="text" class="form-control" value="{{old('phonenumber')}}">

                        <input placeholder="EMAIL*" name="email" type="email" class="form-control" value="{{old('email')}}">
                    
                        <input placeholder="CAP*" name="cap" type="text" class="form-control" value="{{old('cap')}}">

                        <select name="patient" class="form-select">
                            <option selected value="x">SEI PAZIENTE DENTALPLUS?*</option>
                            <option value="1">SÌ</option>
                            <option value="0">NO</option>
                        </select>
                    
                        <textarea placeholder="RICHIESTA..." name="text" type="text" class="form-control" rows="4">{{old('text')}}</textarea>

                        <div class="mb-3 form-check">
                            <input name="privacy" type="checkbox" class="form-check-input" id="check" value="accepted">
                            <label class="form-check-label" for="check">Accetto la Privacy Policy</label>
                        </div>
                        <button type="submit" class="btn" id="submit">INVIA RICHIESTA</button>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-html>