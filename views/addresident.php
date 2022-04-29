<?php 


?>

<div class="row">
                    <div class="header">
                        <div class="col-lg-8">
                            <h1>ADD RESIDENT INFORMATION</h1>
                        </div>
                        <div class="col-lg-4 transaction-id">
                            <p>TRANSACTION ID : </p>
                            <P>568943DFD45903ER043010304</P>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 ps-5 pt-5">
                        <div class="row">
                            <form>
                                <div class="row">

                                    <div class="col user-details">
                                        <span>LAST NAME</span>
                                        <input type="text" class="form-control user-input-field " name="lastname" placeholder="Enter Last Name">
                                    </div>

                                    <div class="col user-details">
                                        <span>CONTACT NO. 1</span>
                                        <input type="number" class="form-control user-input-field" name="contact1" placeholder="Enter Primary Contact No.">
                                    </div>
                                </div>
                                <div class="row mt-1">

                                    <div class="col user-details">
                                        <span>FIRST NAME</span>
                                        <input type="text" class="form-control user-input-field" name="firstname" placeholder="Enter First Name">
                                    </div>

                                    <div class="col user-details">
                                        <span>CONTACT NO. 2</span>
                                        <input type="number" class="form-control user-input-field" name="contact2" placeholder="Enter Secondary Contact No.">
                                    </div>
                                </div>
                                <div class="row mt-1">

                                    <div class="col user-details">
                                        <span>MIDDLE NAME</span>
                                        <input type="text" class="form-control user-input-field" name="middlename" placeholder="Enter Middle Name">
                                    </div>

                                    <div class="col user-details">
                                        <span>TELEPHONE NO</span>
                                        <input type="number" class="form-control user-input-field" name="telNo" placeholder="Enter Telephone No.">
                                    </div>
                                </div>
                                <div class="row mt-1">

                                    <div class="col user-details">
                                        <span>SUFFIX</span>
                                        <input type="text" class="form-control user-input-field" name="suffix" placeholder="Enter Suffix">
                                    </div>

                                    <div class="col user-details">
                                        <span>EMAIL</span>
                                        <input type="email" class="form-control user-input-field" name="emailadd" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="row mt-1">

                                    <div class="col user-details">
                                        <span>BIRTH DATE</span>
                                        <input type="date" name="bday" class="form-control user-input-field">
                                    </div>

                                    <div class="col user-details">
                                        <span>RELIGION</span>
                                        <input type="text" class="form-control user-input-field" name="religion" placeholder="Enter Religion">
                                    </div>
                                </div>
                                <div class="row mt-1">

                                    <div class="col user-details">
                                        <span>CIVIL STATUS</span>
                                        <input type="text" class="form-control user-input-field" name="civilstatus" placeholder="Enter Civil Status">
                                    </div>

                                    <div class="col user-details">
                                        <span>RESIDENT TYPE</span>
                                        <input type="number" class="form-control user-input-field" name="residenttype" placeholder="Enter Resident Type">
                                    </div>
                                </div>
                                <div class="row mt-1">

                                    <div class="col user-details">
                                        <span>NATIONALITY</span>
                                        <input type="text" class="form-control user-input-field" name="nationality" placeholder="Enter Nationality">
                                    </div>
                                    <div class="col user-details">
                                        <span></span>

                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="row mt-5">
                            <div class="signiture">
                                <canvas></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class="container">
                            <div class="row">
                                <div class="brgy-id">
                                    <p>BARANGAY ID </p>
                                    <p>BSB-1223</p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="brgy-title">
                                    <p>ID PICTURE</p>


                                </div>
                                <div class="webcam">
                                    <button>WEB CAM</button>
                                </div>
                                <div class="canvas-picture mt-1">
                                    <canvas id="cas"></canvas>
                                </div>
                            </div>
                            <div class="brgy-title mt-2">
                                <p>QR CODE</p>
                            </div>
                            <div class="canvas-picture">
                                <canvas id="qr"></canvas>

                            </div>
                            <div class="btn-buttons">
                                <button type="button" class="btn-confirm m-1" data-bs-toggle="modal" data-bs-target="#myModal">CONFIRMATION</button>
                                <button type="button" class="btn-save" data-bs-toggle="modal" data-bs-target="#myModal1">SAVE DATA</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">

                    <h1 class="modal-title " style="padding-left: 30%; font-weight: bold;">CONFIRMATION</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat quisquam nobis libero at quas laboriosam aliquam, quis debitis veritatis id neque magni facilis enim accusantium pariatur sunt illum dolore!
                    <br> <br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi rem ea quod exercitationem reiciendis dolore non eligendi repudiandae delectus. Quaerat assumenda et quam iure commodi cum odit. Dolorum, aliquam mollitia.
                    <br>
                    <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit esse laborum nulla autem fuga ea magnam sapiente quasi sed quo voluptatibus odit, fugit repellat dolores nihil laboriosam! Nam, enim sunt!
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="" class="btn-confirm" data-bs-dismiss="modal">CONFIRM</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal1">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">


                <div class="modal-body">
                    <div>
                        <div class="f-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"> </button>
                        </div>
                        <p class="mt-3 " style="font-weight: bold;">PLEASE ENTER YOUR PASSWORD </p>
                        <div class="pss-modal">
                            <input type="password" class="form-control" placeholder="Enter Your Password">
                            <button class="btn-enter" type="submit">ENTER</button>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>