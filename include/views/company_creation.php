<div class="text-right">
    <button type="button" class="btn btn-primary" id="add_branch"><span class="fa fa-plus"></span>&nbsp; Add Branch Creation</button>
    <button type="button" class="btn btn-primary" id="back_btn" style="display:none;"><span class="icon-arrow-left"></span>&nbsp; Back </button>
</div>
<br>
<div class="card branch_table_content">
    <div class="card-body">
        <div class="col-12">
            <table id="branch_create" class="table ">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Branch Code</th>
                        <th>Company Name</th>
                        <th>Branch Name</th>
                        <th>Place</th>
                        <th>State</th>
                        <th>District</th>
                        <th>Mobile Number</th>
                        <th>Email ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row gutters branch_creation_content " style="display: none;">
    <div class="col-12">
        <div class="card wow">
            <div class="card-header">
                <div class="card-title">General Info</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="Company Name">Company Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="company name" placeholder="Feather Technology" name="company name" disabled>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="Branch Code">Branch Code</label><span class="text-danger">*</span>
                            <input type="number" class="form-control" id="Branch Code" placeholder="PY-7696" name="Branch Code" disabled>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="branch name">Branch Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="branch name" placeholder="Enter The Branch Name" name="branch name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="address">Address</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="address" placeholder="Enter The Address" name="address">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="state">State</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" id="state" name="state">
                                <option>Select State</option>
                                <option>Puducherry</option>
                                <option>Tamil Nadu</option>
                                <option>Karanataka</option>
                                <option>Kerala</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="District">District</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" id="District" name="District">
                                <option>Select District</option>
                                <option>Chennai</option>
                                <option>Combiatore</option>
                                <option>Villipuram</option>
                                <option>Cuddalore</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="Taluk">Taluk</label><span class="text-danger">*</span>
                            <select type="text" class="form-control" id="Taluk" name="Taluk">
                                <option>Select Taluk</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="place">Place</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="Place" placeholder="Enter The Place" name="Place">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="Pincode">Pin Code</label><span class="text-danger">*</span>
                            <input type="number" class="form-control" id="Pincode" placeholder="Enter The Pin Code" name="Pincode">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row gutters  branch_creation_content" style="display: none;">
    <div class="col-12 ">
        <div class="card wow">
            <div class="card-header">
                <div class="card-title">Communication Info
                    <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#myModal">
                        &nbsp; &nbsp; &nbsp; &nbsp; + &nbsp; &nbsp; &nbsp; &nbsp;
                    </button>
                </div>
            </div>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title">Add Company Info</h4>
                            <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="Company Name">Company Name</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="company name" placeholder="Feather Technology" name="company name" disabled>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="Branch Code">Branch Code</label><span class="text-danger">*</span>
                                        <input type="number" class="form-control" id="Branch Code" placeholder="PY-7696" name="Branch Code" disabled>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="branch name">Branch Name</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="branch name" placeholder="Enter The Branch Name" name="branch name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="address">Address</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="address" placeholder="Enter The Address" name="address">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="state">State</label><span class="text-danger">*</span>
                                        <select type="text" class="form-control" id="state" name="state">
                                            <option>Select State</option>
                                            <option>Puducherry</option>
                                            <option>Tamil Nadu</option>
                                            <option>Karanataka</option>
                                            <option>Kerala</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="District">District</label><span class="text-danger">*</span>
                                        <select type="text" class="form-control" id="District" name="District">
                                            <option>Select District</option>
                                            <option>Chennai</option>
                                            <option>Combiatore</option>
                                            <option>Villipuram</option>
                                            <option>Cuddalore</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="Taluk">Taluk</label><span class="text-danger">*</span>
                                        <select type="text" class="form-control" id="Taluk" name="Taluk">
                                            <option>Select Taluk</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="place">Place</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control" id="Place" placeholder="Enter The Place" name="Place">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="Pincode">Pin Code</label><span class="text-danger">*</span>
                                        <input type="number" class="form-control" id="Pincode" placeholder="Enter The Pin Code" name="Pincode">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="Email">E-Mail Id</label><span class="text-danger">*</span>
                                        <input type="email" class="form-control" id="email" placeholder="Enter The E-Mail Id" name="email">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="Mobile Number">Mobile Number</label><span class="text-danger">*</span>
                                        <input type="number" class="form-control" id="Mobile Number" placeholder="Enter The Mobile Number" name="Mobile Number">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="WhatsApp Number">WhatsApp Number</label><span class="text-danger">*</span>
                                        <input type="number" class="form-control" id="WhatsApp Number" placeholder="Enter The WhatsApp Number" name="WhatsApp Number">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <table id="branch_create" class="table ">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Branch Code</th>
                                        <th>Company Name</th>
                                        <th>Branch Name</th>
                                        <th>Place</th>
                                        <th>State</th>
                                        <th>District</th>
                                        <th>Mobile Number</th>
                                        <th>Email ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="Email">E-Mail Id</label><span class="text-danger">*</span>
                            <input type="email" class="form-control" id="email" placeholder="Enter The E-Mail Id" name="email">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="Mobile Number">Mobile Number</label><span class="text-danger">*</span>
                            <input type="number" class="form-control" id="Mobile Number" placeholder="Enter The Mobile Number" name="Mobile Number">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="WhatsApp Number">WhatsApp Number</label><span class="text-danger">*</span>
                            <input type="number" class="form-control" id="WhatsApp Number" placeholder="Enter The WhatsApp Number" name="WhatsApp Number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="landline number">Landline Number</label><span class="text-danger">*</span>
                            <div class="input-group" style="gap:12px">
                                <input type="number" class="form-control" id="landline_code" name="landlinecode" placeholder="Enter Code" style="max-width: 95px">
                                <input type="number" class="form-control" id="landline" name="landline" placeholder="Enter Landline Number">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>