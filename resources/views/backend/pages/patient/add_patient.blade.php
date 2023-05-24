@extends('backend.main.main_dashboard')
@section('admin')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add Patient Information</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            

                            <h4 class="header-title mb-4">Patient Information</h4>

                            <ul class="nav nav-tabs nav-bordered nav-justified">
                                <li class="nav-item">
                                    <a href="#home-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                        Patient Records
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                        Clinical Records
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="#messages-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        Messages
                                    </a>
                                </li> --}}
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home-b2">
                                    <div class="col-sm-12">
                                    <div class="tab-content pt-0">
                                        <div class="">
                                            {{-- <h4 class="header-title">Patient Records</h4> --}}
                                            <p class="text-muted font-13">Primary patient and family information must be
                                                field here.</p>

                                            <form>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputEmail4" class="form-label">ID Number</label>
                                                        <input type="number" class="form-control" id="inputEmail4"
                                                            placeholder="1 1999 008098746 18">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputPassword4" class="form-label">Patient's
                                                            Name</label>
                                                        <input type="text" class="form-control" id="inputPassword4"
                                                            placeholder="Jony Doe">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputEmail4" class="form-label">Father's Name</label>
                                                        <input type="text" class="form-control" id="inputEmail4"
                                                            placeholder="Presnel Doe">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputPassword4" class="form-label">Mother's Name</label>
                                                        <input type="text" class="form-control" id="inputPassword4"
                                                            placeholder="Alice Doe">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3 mr-3">
                                                        <label for="inputEmail4" class="form-label">Date of Birth</label>
                                                        <input type="date" class="form-control" id="inputEmail4"
                                                            placeholder="01-01-2023">
                                                    </div>
                                                    <div class="col-md-6 form-check mb-3 form-check-info">
                                                        <label for="gender">Gender</label><br />
                                                        <div class="ml-3 p-2">
                                                            <input type="radio" name="gender" class="form-check-input"
                                                                id="male" value="Male">
                                                            Male<br />
                                                            <input type="radio" name="gender" class="form-check-input"
                                                                id="Female" value="Female">
                                                            Female

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputEmail4" class="form-label">Nationality (Country)</label>
                                                        <input type="text" class="form-control" id="inputEmail4"
                                                            placeholder="Rwanda">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputPassword4" class="form-label">Tel Number</label>
                                                        <input type="text" class="form-control" id="inputPassword4"
                                                            placeholder="+250788668888">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputEmail4" class="form-label">Origin</label>
                                                        <input type="text" class="form-control" id="inputEmail4"
                                                            placeholder="">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputPassword4" class="form-label">Site of consultation</label>
                                                        <input type="text" class="form-control" id="inputPassword4"
                                                            placeholder="CHUK/Kirehe/ Bushenge / Rubavu / CHUB/RMH ">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="inputEmail4" class="form-label">Referring clinician  </label>
                                                        <input type="text" class="form-control" id="inputEmail4"
                                                            placeholder="">
                                                    </div>
                                                    
                                                </div>
                                                

                                                <div class="row">
                                                    <h4 class="text-muted" >Patient Address</h4>
                                                    <hr/>
                                                    <div class="mb-3 col-md-3">
                                                        <label for="inputState" class="form-label">Province</label>
                                                        <select id="inputState" class="form-select">
                                                            <option>Choose Province</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-3">
                                                        <label for="inputState" class="form-label">District</label>
                                                        <select id="inputState" class="form-select">
                                                            <option>Choose District</option>
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-3">
                                                        <label for="inputState" class="form-label">Sector</label>
                                                        <select id="inputState" class="form-select">
                                                            <option>Choose Sector</option>
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-3">
                                                        <label for="inputState" class="form-label">Cell</label>
                                                        <select id="inputState" class="form-select">
                                                            <option>Choose Cell</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- <div class="mb-3">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheck11">
                                                        <label class="form-check-label" for="customCheck11">Check this
                                                            custom checkbox</label>
                                                    </div>
                                                </div> --}}

                                                <button type="submit"
                                                    class="btn btn-success mb-3 waves-effect waves-light">Save</button>

                                            </form>
                                        </div>
                                        
                                    </div>
                                </div> <!-- end col-->
                                </div>
                                <div class="tab-pane" id="profile-b2">
                                    <div class="row">
                                <div class="col-sm-3">
                                    <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <a class="nav-link active show mb-1" id="v-pills-home-tab" data-bs-toggle="pill"
                                            href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                            aria-selected="true">
                                            Prenatal and neonatal history</a>
                                        <a class="nav-link mb-1" id="v-pills-profile-tab" data-bs-toggle="pill"
                                            href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                            aria-selected="false">
                                            Suspected diagnosis </a>
                                        <a class="nav-link mb-1" id="v-pills-messages-tab" data-bs-toggle="pill"
                                            href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                            aria-selected="false">
                                            Laboratory investigations</a>
                                        <a class="nav-link mb-1" id="v-pills-settings-tab" data-bs-toggle="pill"
                                            href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                            aria-selected="false">
                                            Imaging investigation</a>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-sm-9">
                                    <div class="tab-content pt-0">
                                        <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">
                                            <h4 class="header-title">Patient Records</h4>
                                            <p class="text-muted font-13">Primary patient and family information must be
                                                field here.</p>

                                            <form>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputEmail4" class="form-label">ID Number</label>
                                                        <input type="number" class="form-control" id="inputEmail4"
                                                            placeholder="1 1999 008098746 18">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputPassword4" class="form-label">Patient's
                                                            Name</label>
                                                        <input type="text" class="form-control" id="inputPassword4"
                                                            placeholder="Jony Doe">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputEmail4" class="form-label">Father's Name</label>
                                                        <input type="text" class="form-control" id="inputEmail4"
                                                            placeholder="Presnel Doe">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputPassword4" class="form-label">Mother's Name</label>
                                                        <input type="text" class="form-control" id="inputPassword4"
                                                            placeholder="Alice Doe">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3 mr-3">
                                                        <label for="inputEmail4" class="form-label">Date of Birth</label>
                                                        <input type="date" class="form-control" id="inputEmail4"
                                                            placeholder="01-01-2023">
                                                    </div>
                                                    <div class="col-md-6 form-check mb-3 form-check-info">
                                                        <label for="gender">Gender</label><br />
                                                        <div class="ml-3 p-2">
                                                            <input type="radio" name="gender" class="form-check-input"
                                                                id="male" value="Male">
                                                            Male<br />
                                                            <input type="radio" name="gender" class="form-check-input"
                                                                id="Female" value="Female">
                                                            Female

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputEmail4" class="form-label">Nationality (Country)</label>
                                                        <input type="text" class="form-control" id="inputEmail4"
                                                            placeholder="Rwanda">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputPassword4" class="form-label">Tel Number</label>
                                                        <input type="text" class="form-control" id="inputPassword4"
                                                            placeholder="+250788668888">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputEmail4" class="form-label">Origin</label>
                                                        <input type="text" class="form-control" id="inputEmail4"
                                                            placeholder="">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputPassword4" class="form-label">Site of consultation</label>
                                                        <input type="text" class="form-control" id="inputPassword4"
                                                            placeholder="CHUK/Kirehe/ Bushenge / Rubavu / CHUB/RMH ">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="inputEmail4" class="form-label">Referring clinician  </label>
                                                        <input type="text" class="form-control" id="inputEmail4"
                                                            placeholder="">
                                                    </div>
                                                    
                                                </div>
                                                

                                                <div class="row">
                                                    <h4 class="text-muted" >Patient Address</h4>
                                                    <hr/>
                                                    <div class="mb-3 col-md-3">
                                                        <label for="inputState" class="form-label">Province</label>
                                                        <select id="inputState" class="form-select">
                                                            <option>Choose Province</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-3">
                                                        <label for="inputState" class="form-label">District</label>
                                                        <select id="inputState" class="form-select">
                                                            <option>Choose District</option>
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-3">
                                                        <label for="inputState" class="form-label">Sector</label>
                                                        <select id="inputState" class="form-select">
                                                            <option>Choose Sector</option>
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-3">
                                                        <label for="inputState" class="form-label">Cell</label>
                                                        <select id="inputState" class="form-select">
                                                            <option>Choose Cell</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheck11">
                                                        <label class="form-check-label" for="customCheck11">Check this
                                                            custom checkbox</label>
                                                    </div>
                                                </div>

                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light">Sign in</button>

                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                            aria-labelledby="v-pills-profile-tab">
                                            <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt
                                                duis pariatur mollit aute magna
                                                pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim
                                                in quis laboris ipsum velit
                                                id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et
                                                elit aliquip labore Lorem
                                                enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse
                                                anim eiusmod do sint minim consectetur
                                                qui.</p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                            aria-labelledby="v-pills-messages-tab">
                                            <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute
                                                qui magna. Ad proident laboris
                                                ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud
                                                magna nulla. Velit et et
                                                proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip
                                                labore est magna commodo est ea
                                                veniam consectetur.</p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                            aria-labelledby="v-pills-settings-tab">
                                            <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit
                                                consectetur elit id dolor proident
                                                in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis
                                                aliqua do. Aliqua amet qui
                                                mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem
                                                deserunt amet. Culpa ullamco sit
                                                adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end col-->
                            </div> <!-- end row-->
                                </div>
                                {{-- <div class="tab-pane" id="messages-b2">
                                    <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget dolor.
                                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                        ridiculus mus.
                                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat
                                        massa quis
                                        enim.</p>
                                    <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                        enim justo,
                                        rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
                                        pretium. Integer
                                        tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                        tellus. Aenean leo
                                        ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                </div> --}}
                            </div>
                        </div>
                    </div> <!-- end card-->
                </div>
            </div>
        </div>
    </div>

    <!-- end row -->
@endsection
