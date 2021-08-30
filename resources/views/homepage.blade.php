<x-html>
    <x-slot name="page_content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 id="homepage_title">Scopri il centro più vicino a te e prenota un check-up compilando il form</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-7" id="header_img">
                    <img src="media/dentist_header.png" class="img-fluid" alt="illustrazione dentista">
                </div>
                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center" id="form_col">
                    <form action="/richiesta-inviata" method="post" novalidate>
                        <div>
                            <h2>RICHIEDI UN CHECK-UP</h2>
                            <p>
                                TI RICHIAMEREMO ENTRO 24 ORE.
                            </p>
                        </div>
                        
                        <input placeholder="NOME*" name="name" type="text" class="form-control">

                        <input placeholder="COGNOME*" name="surname" type="text" class="form-control">
                    
                        <input placeholder="TELEFONO*" name="phonenumber" type="text" class="form-control">

                        <input placeholder="EMAIL*" name="email" type="email" class="form-control">
                    
                        <input placeholder="CAP*" name="cap" type="text" class="form-control">

                        <select name="patient" class="form-select">
                            <option selected>SEI PAZIENTE DENTALPLUS?*</option>
                            <option value="true">SÌ</option>
                            <option value="false">NO</option>
                        </select>
                    
                        <textarea placeholder="RICHIESTA..." name="text" type="text" class="form-control" rows="4"></textarea>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Accetto la Privacy Policy</label>
                        </div>
                        <button type="submit" class="btn" id="submit">INVIA RICHIESTA</button>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-html>