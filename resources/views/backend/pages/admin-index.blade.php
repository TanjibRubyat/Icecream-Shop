@extends('backend.layouts.admin-master')

@section('content')

<section class="mainpanel">
        <div class="pagebody">
            <!----======= Start Color Code =======---->
            <div class="pagetitle">
                <h4>Color</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row px-3 px-xl-5 pt-3 pb-5 py-xl-5">
                        <div class="col-6 col-md-4 col-xl-2 mb-5 mb-xl-0">
                            <div class="color-box bg-primary text-center py-5">
                                <h6 class="font-weight-bold text-white">Primary</h6>
                                <span class="text-primary h6 font-weight-bold">#2863EC</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2 mb-5 mb-xl-0">
                            <div class="color-box bg-secondary text-center py-5">
                                <h6 class="font-weight-bold text-white">Font</h6>
                                <span class="text-secondary h6 font-weight-bold">#0B1630</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2 mb-5 mb-xl-0">
                            <div class="color-box bg-warning text-center py-5">
                                <h6 class="font-weight-bold text-white">Accent</h6>
                                <span class="text-warning h6 font-weight-bold">#FEAC32</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <div class="color-box bg-light text-center py-5">
                                <h6 class="font-weight-bold text-secondary">Background</h6>
                                <span class="text-secondary h6 font-weight-bold">#EEF3FE</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <div class="color-box bg-danger text-center py-5">
                                <h6 class="font-weight-bold text-white">Negative</h6>
                                <span class="text-danger h6 font-weight-bold">#FF4949</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <div class="color-box bg-success text-center py-5">
                                <h6 class="font-weight-bold text-white">Positive</h6>
                                <span class="text-success h6 font-weight-bold">#13CE66</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!----======= End Color Code =======---->

            <!----======= Start Component =======---->
            <div class="pagetitle">
                <h4>Component</h4>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <div class="card-body">
                            <h2 class="text-secondary font-weight-bold mb-2">227+</h2>
                            <p class="mb-0">Uploaded Photos</p>
                        </div>
                        <canvas id="UploadedPhotos" style="width: 309px; height: 81px; display: block;" width="386" height="101" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <div class="card-body">
                            <h2 class="text-secondary font-weight-bold mb-2">227+</h2>
                            <p class="mb-0">Downloaded Photos</p>
                        </div>
                        <canvas id="DownloadedPhotos" style="width: 309px; height: 81px; display: block;" width="386" height="101" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <div class="card-body">
                            <h2 class="text-secondary font-weight-bold mb-2">127+</h2>
                            <p class="mb-0">Sold</p>
                        </div>
                        <canvas id="Sold" style="width: 309px; height: 81px; display: block;" width="386" height="101" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <div class="card-body">
                            <h2 class="text-secondary font-weight-bold mb-2">12+</h2>
                            <p class="mb-0">Pending Payment</p>
                        </div>
                        <canvas id="PendingPayment" style="width: 309px; height: 81px; display: block;" width="386" height="101" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
            <!----======= End Component =======---->

            <!----======= Start UI Elememnts =======---->
            <div class="pagetitle">
                <h4>UI elememnts</h4>
            </div>
            <!-- UI Button -->
            <div class="card">
                <div class="card-header py-4">
                    <h5 class="text-secondary font-weight-bold mb-0">UI Button</h5>
                </div>
                <div class="card-body">
                    <h6 class="mb-4">Default Buttons</h6>
                    <ul class="buuton-group">
                        <li><button type="button" class="btn btn-primary waves-effect waves-primary">Primary</button>
                        </li>
                        <li><button type="button" class="btn btn-secondary waves-effect waves-light">Secondary</button>
                        </li>
                        <li><button type="button" class="btn btn-success waves-effect waves-green">Success</button></li>
                        <li><button type="button" class="btn btn-danger waves-effect waves-red">Danger</button>
                        </li>
                        <li><button type="button" class="btn btn-warning waves-effect waves-yellow">Warning</button>
                        </li>
                        <li><button type="button" class="btn btn-light waves-effect waves-light">Light</button>
                        </li>
                        <li><button type="button" class="btn btn-link waves-effect waves-primary">Link</button>
                        </li>
                        <li><button type="button" class="btn btn-primary btn-md waves-effect waves-primary">Medium</button></li>
                        <li><button type="button" class="btn btn-primary btn-lg waves-effect waves-primary">Large</button></li>
                    </ul>
                    <hr class="border-dashed my-4">
                    <h6 class="mb-4">Default Outline Buttons</h6>
                    <ul class="buuton-group">
                        <li><button type="button" class="btn btn-outline-primary waves-effect waves-primary">Primary</button></li>
                        <li><button type="button" class="btn btn-outline-secondary waves-effect waves-light">Secondary</button>
                        </li>
                        <li><button type="button" class="btn btn-outline-success waves-effect waves-green">Success</button></li>
                        <li><button type="button" class="btn btn-outline-danger waves-effect waves-red">Danger</button>
                        </li>
                        <li><button type="button" class="btn btn-outline-warning waves-effect waves-yellow">Warning</button></li>
                        <li><button type="button" class="btn btn-outline-light waves-effect waves-primary">Light</button>
                        </li>
                        <li><button type="button" class="btn btn-link waves-effect waves-primary">Link</button>
                        </li>
                        <li>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary waves-effect waves-primary">Left</button>
                                <button type="button" class="btn btn-primary waves-effect waves-primary">Middle</button>
                                <button type="button" class="btn btn-primary waves-effect waves-primary">Right</button>
                            </div>
                        </li>
                    </ul>
                    <hr class="border-dashed my-4">
                    <h6 class="mb-4">Button with icon</h6>
                    <ul class="buuton-group">
                        <li><button type="button" class="btn btn-primary waves-effect waves-primary"><i class="la la-pencil-square-o mr-2"></i>Compose</button></li>
                        <li><button type="button" class="btn btn-warning waves-effect waves-yellow"><i class="la la-info-circle mr-2"></i>Warning</button></li>
                        <li><button type="button" class="btn btn-secondary waves-effect waves-light"><i class="la la-map-marker mr-2"></i>Location</button></li>
                        <li>
                            <button class="btn btn-danger waves-effect waves-red" type="button">
								<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>
								Loading
							</button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End UI Button -->

            <!-- Form Elements -->
            <div class="card  border-0">
                <div class="card-header py-4">
                    <h5 class="text-secondary font-weight-bold mb-0">Form Elements</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <h6 class="mb-4">Basic Input</h6>
                            <div class="form-group">
                                <label>Height 36px</label>
                                <input type="text" class="form-control bg-light" placeholder="Write here">
                            </div>
                            <div class="form-group">
                                <label>Height 42px</label>
                                <input type="text" class="form-control bg-light input-h-42" placeholder="Write here">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-light" placeholder="Typin">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-light" placeholder="Filed Data">
                            </div>
                            <div class="form-group">
                                <div class="input-group bg-light">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text la la-user" id="Name"></span>
                                    </div>
                                    <input type="text" class="form-control pl-1" placeholder="Name" aria-label="Name" aria-describedby="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group bg-light">
                                    <input type="text" class="form-control" placeholder="Name" aria-label="Name2" aria-describedby="Name">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text la la-info-circle" id="Name2"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <h6 class="mb-4">Basic Input Type 2</h6>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Label<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-light" placeholder="Write here">
                                    </div>
                                    <div class="form-group">
                                        <label>Label<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control border-light" placeholder="Typin">
                                    </div>
                                    <div class="form-group">
                                        <label>Label<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control border-light" placeholder="Filed">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Label<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-light" placeholder="Filed">
                                        <div class="form-control-feedback">This is dummy text</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Label<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control border-danger" placeholder="Filed">
                                        <div class="form-control-feedback text-danger"><i class="la la-info-circle mr-2"></i>This is error text</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Label<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control border-success" placeholder="Filed">
                                        <div class="form-control-feedback text-success"><i class="la la-check-circle mr-2"></i>Succeed text</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Label<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control border-warning" placeholder="Filed">
                                        <div class="form-control-feedback text-warning"><i class="la la-exclamation-triangle mr-2"></i>Warning text</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <h6 class="mb-4">Basic Textarea</h6>
                            <div class="form-group">
                                <textarea class="form-control bg-light" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Textarea</label>
                                <textarea class="form-control border-light" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Textarea<span class="text-danger">*</span></label>
                                <textarea class="form-control border-danger" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <hr class="border-dashed">
                    <h6 class="mb-4 mt-4">Dropdown</h6>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="dropdown bootstrap-select"><select class="selectpicker" data-style="border-theme" tabindex="-98">
								<option>Dropdown</option>
								<option>Dropdown open</option>
								<option>Dropdown on hover</option>
							</select><button type="button" class="btn dropdown-toggle border-theme" data-toggle="dropdown" role="button" title="Dropdown"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Dropdown</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->

            <!-- Data Table -->
            <div class="row my-5">
                <div class="col-12 col-lg-6">
                    <div class="card  border-0">
                        <div class="card-header py-4">
                            <h5 class="text-secondary font-weight-bold mb-0">Data Table</h5>
                        </div>
                        <div class="card-body">
                            <div id="datatable1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 582px; padding-right: 17px;"><table class="table table-striped table-borderless w-100 dataTable no-footer" role="grid" style="margin-left: 0px; width: 582px;"><thead class="table-theme-bg">
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 165px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 209px;" aria-label="Total Products: activate to sort column ascending">Total Products</th><th class="text-center no-sorting sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 100px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                                </thead></table></div></div><div class="dataTables_scrollBody mCustomScrollbar _mCS_3" style="position: relative; overflow: auto; max-height: 400px; width: 100%;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 400px;"><div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr"><table id="datatable1" class="table table-striped table-borderless w-100 dataTable no-footer" role="grid" style="width: 100%;"><thead class="table-theme-bg">
                                    <tr role="row" style="height: 0px;"><th class="sorting" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 165px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th class="sorting" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 209px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Total Products</div></th><th class="text-center no-sorting sorting" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 100px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Action</div></th></tr>
                                </thead>
                                
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr role="row" class="odd">
                                        <td class="sorting_1">Arts &amp; Crafts</td>
                                        <td>1193</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Arts &amp; Crafts</td>
                                        <td>1193</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Automotive</td>
                                        <td>1176</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Automotive</td>
                                        <td>1176</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton8">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Baby</td>
                                        <td>1045</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Baby</td>
                                        <td>1045</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Baby</td>
                                        <td>1045</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Baby</td>
                                        <td>1045</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Baby</td>
                                        <td>1045</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Baby</td>
                                        <td>1045</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton9">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr></tbody>
                            </table></div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 294px; max-height: 390px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"></div><div class="col-sm-12 col-md-7"></div></div></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card  border-0">
                        <div class="card-header py-4">
                            <h5 class="text-secondary font-weight-bold mb-0">Data Table</h5>
                        </div>
                        <div class="card-body">
                            <div id="datatable2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 582px; padding-right: 17px;"><table class="table table-striped table-borderless w-100 dataTable no-footer" role="grid" style="margin-left: 0px; width: 582px;"><thead class="table-theme-bg">
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" style="width: 211px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" style="width: 212px;" aria-label="Total Products: activate to sort column ascending">Total Products</th><th class="text-center no-sorting sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" style="width: 52px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                                <tr role="row"><th rowspan="1" colspan="1"><input type="text" class="form-control bg-white" placeholder="Search Name"></th><th rowspan="1" colspan="1"><input type="text" class="form-control bg-white" placeholder="Search Total Products"></th><th class="text-center no-sorting" rowspan="1" colspan="1"></th></tr></thead></table></div></div><div class="dataTables_scrollBody mCustomScrollbar _mCS_4" style="position: relative; overflow: auto; max-height: 340px; width: 100%;"><div id="mCSB_4" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 340px;"><div id="mCSB_4_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr"><table id="datatable2" class="table table-striped table-borderless w-100 dataTable no-footer" role="grid" style="width: 100%;"><thead class="table-theme-bg">
                                    <tr role="row" style="height: 0px;"><th class="sorting" aria-controls="datatable2" rowspan="1" colspan="1" style="width: 211px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th class="sorting" aria-controls="datatable2" rowspan="1" colspan="1" style="width: 212px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Total Products</div></th><th class="text-center no-sorting sorting" aria-controls="datatable2" rowspan="1" colspan="1" style="width: 52px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Action</div></th></tr>
                                <tr role="row" style="height: 0px;"><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 229px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><input type="text" class="form-control bg-white" placeholder="Search Name"></div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 230px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"><input type="text" class="form-control bg-white" placeholder="Search Total Products"></div></th><th class="text-center no-sorting" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 52px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th></tr></thead>
                                
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr role="row" class="odd">
                                        <td class="sorting_1">Arts &amp; Crafts</td>
                                        <td>1193</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Arts &amp; Crafts</td>
                                        <td>1193</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton17" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton17">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Automotive</td>
                                        <td>1176</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Automotive</td>
                                        <td>1176</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton18" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton18">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Baby</td>
                                        <td>1045</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton12">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Baby</td>
                                        <td>1045</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton13">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Baby</td>
                                        <td>1045</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton14">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Baby</td>
                                        <td>1045</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton15" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton15">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Baby</td>
                                        <td>1045</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton16">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Baby</td>
                                        <td>1045</td>
                                        <td align="center">
                                            <div class="dropdown">
                                                <a class="la la-ellipsis-h dropdown-toggle" id="dropdownMenuButton19" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton19">
                                                    <a class="dropdown-item" href="#"><i class="la la-info-circle"></i>View Details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="la la-paperclip"></i>View Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i>View
														Details</a>
                                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i>View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr></tbody>
                            </table></div><div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 212px; max-height: 330px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"></div><div class="col-sm-12 col-md-7"></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Data Table -->

            <!-- Other Elements -->
            <div class="card  border-0">
                <div class="card-header py-4">
                    <h5 class="text-secondary font-weight-bold mb-0">Other Elements</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-5 mb-5 mb-lg-0">
                            <div class="ms-process mb-5" id="process-tab">
                                <ul class="nav nav-tabs process-model justify-content-center mb-3" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="active" href="#home" aria-controls="home" role="tab" data-toggle="tab">1</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">2</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#about" aria-controls="about" role="tab" data-toggle="tab">3</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">4</a>
                                    </li>
                                </ul>
                                <!-- end design process steps-->
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="ms-process-content">
                                            <form action="" method="POST" class="row">
                                                <div class="form-group col-12 col-md-6">
                                                    <label>First Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control border-light" placeholder="First Name" required="">
                                                </div>
                                                <div class="form-group col-12 col-md-6">
                                                    <label>Last Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control border-light" placeholder="Last Name" required="">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="ms-process-content">
                                            <h3 class="semi-bold">Profile</h3>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="about">
                                        <div class="ms-process-content">
                                            <h3 class="semi-bold">About</h3>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="contact">
                                        <div class="ms-process-content">
                                            <h3 class="semi-bold">Contact</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress mb-5">
                                <div class="progress-bar progress-bar-striped bg-primary progress-bar-animated progress-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <div class="progress-value progress-value-top">80%</div>
                                </div>
                            </div>
                            <div class="progress mb-5">
                                <div class="progress-bar progress-bar-striped bg-success progress-bar-animated progress-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                    <div class="progress-value progress-value-top">40%</div>
                                </div>
                            </div>
                            <div class="progress mb-5">
                                <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated progress-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <div class="progress-value progress-value-top">80%</div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated progress-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <div class="progress-value progress-value-top">80%</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 offset-lg-1">
                            <h6 class="mb-3">Default Tooltip</h6>
                            <ul class="mb-5 row">
                                <li class="col-6 col-lg-3">
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip Top">
										Tooltip Top <i class="la la-info-circle"></i></a>
                                </li>
                                <li class="col-6 col-lg-3">
                                    <a data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip Right">
										Tooltip Right <i class="la la-info-circle"></i></a>
                                </li>
                                <li class="col-6 col-lg-3">
                                    <a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip Bottom">
										Tooltip Bottom <i class="la la-info-circle"></i></a>
                                </li>
                                <li class="col-6 col-lg-3">
                                    <a data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip Left">
										Tooltip Left <i class="la la-info-circle"></i></a>
                                </li>
                            </ul>
                            <h6 class="mb-3">Colorful Tooltip</h6>
                            <ul class="mb-5 row">
                                <li class="col-6 col-lg-3">
                                    <a data-custom-class="tooltip-primary" data-toggle="tooltip" data-placement="top" title="" class="text-primary" data-original-title="Tooltip Top Primary">
										Tooltip Top <i class="la la-info-circle"></i></a>
                                </li>
                                <li class="col-6 col-lg-3">
                                    <a data-custom-class="tooltip-success" data-toggle="tooltip" data-placement="right" title="" class="text-success" data-original-title="Tooltip Right Success">
										Tooltip Right <i class="la la-info-circle"></i></a>
                                </li>
                                <li class="col-6 col-lg-3">
                                    <a data-custom-class="tooltip-danger" data-toggle="tooltip" data-placement="bottom" title="" class="text-danger" data-original-title="Tooltip Bottom Danger">
										Tooltip Bottom <i class="la la-info-circle"></i></a>
                                </li>
                                <li class="col-6 col-lg-3">
                                    <a data-custom-class="tooltip-warning" data-toggle="tooltip" data-placement="right" title="" class="text-warning" data-original-title="Tooltip Left Warning">
										Tooltip Left <i class="la la-info-circle"></i></a>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="slider-wrapper slider-primary my-5">
                                        <div class="slider slider-horizontal" id="ex1Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 80%;"></div><div class="slider-track-high" style="right: 0px; width: 20%;"></div></div><div class="tooltip tooltip-main top in" role="presentation" style="left: 80%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$80</div></div><div class="tooltip tooltip-min top" role="presentation" style="display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max top" role="presentation" style="display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="80" aria-valuetext="$80" tabindex="0" style="left: 80%;"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" aria-valuetext="$0" tabindex="0" style="left: 0%;"></div></div><input class="input-range" data-slider-id="ex1Slider" data-slider-tooltip="always" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="80" data-value="80" value="80" style="display: none;">
                                    </div>
                                    <div class="slider-wrapper slider-success my-5">
                                        <div class="slider slider-horizontal" id="ex2Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 50%;"></div><div class="slider-track-high" style="right: 0px; width: 50%;"></div></div><div class="tooltip tooltip-main top in" role="presentation" style="left: 50%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$50</div></div><div class="tooltip tooltip-min top" role="presentation" style="display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max top" role="presentation" style="display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50" aria-valuetext="$50" tabindex="0" style="left: 50%;"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" aria-valuetext="$0" tabindex="0" style="left: 0%;"></div></div><input class="input-range" data-slider-id="ex2Slider" data-slider-tooltip="always" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="50" data-value="50" value="50" style="display: none;">
                                    </div>
                                    <div class="slider-wrapper slider-warning my-5">
                                        <div class="slider slider-horizontal" id="ex3Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 90%;"></div><div class="slider-track-high" style="right: 0px; width: 10%;"></div></div><div class="tooltip tooltip-main top in" role="presentation" style="left: 90%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$90</div></div><div class="tooltip tooltip-min top" role="presentation" style="display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max top" role="presentation" style="display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="90" aria-valuetext="$90" tabindex="0" style="left: 90%;"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" aria-valuetext="$0" tabindex="0" style="left: 0%;"></div></div><input class="input-range" data-slider-id="ex3Slider" data-slider-tooltip="always" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="90" data-value="90" value="90" style="display: none;">
                                    </div>
                                    <div class="slider-wrapper slider-danger my-5">
                                        <div class="slider slider-horizontal" id="ex4Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 40%;"></div><div class="slider-selection" style="left: 40%; width: 30%;"></div><div class="slider-track-high" style="right: 0px; width: 30%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 55%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$40,70</div></div><div class="tooltip tooltip-min top" role="presentation" style="left: 40%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$40</div></div><div class="tooltip tooltip-max top" role="presentation" style="left: 70%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$70</div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="40" aria-valuetext="$40" tabindex="0" style="left: 40%;"></div><div class="slider-handle max-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="70" aria-valuetext="$70" tabindex="0" style="left: 70%;"></div></div><input class="input-range" data-slider-id="ex4Slider" data-slider-value="40, 70" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-value="40,70" value="40,70" style="display: none;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="slider-range slider-primary my-5">
                                        <div class="slider slider-horizontal" id="ex5Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 80%;"></div><div class="slider-track-high" style="right: 0px; width: 20%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 80%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$80</div></div><div class="tooltip tooltip-min top" role="presentation"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max bottom" role="presentation" style="top: 18px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="80" aria-valuetext="$80" tabindex="0" style="left: 80%;"></div><div class="slider-handle max-slider-handle hide" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" aria-valuetext="$0" tabindex="0" style="left: 0%;"></div></div><input class="input-range" data-slider-id="ex5Slider" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="80" data-slider-handle="square" data-value="80" value="80" style="display: none;">
                                    </div>
                                    <div class="slider-range slider-success my-5">
                                        <div class="slider slider-horizontal" id="ex6Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 40%;"></div><div class="slider-track-high" style="right: 0px; width: 60%;"></div></div><div class="tooltip tooltip-main top in" role="presentation" style="left: 40%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$40</div></div><div class="tooltip tooltip-min top" role="presentation" style="display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max top" role="presentation" style="display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="40" aria-valuetext="$40" tabindex="0" style="left: 40%;"></div><div class="slider-handle max-slider-handle hide" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" aria-valuetext="$0" tabindex="0" style="left: 0%;"></div></div><input class="input-range" data-slider-id="ex6Slider" type="text" data-slider-tooltip="always" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="40" data-slider-handle="square" data-value="40" value="40" style="display: none;">
                                    </div>
                                    <div class="slider-range slider-warning my-5">
                                        <div class="slider slider-horizontal" id="ex7Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 60%;"></div><div class="slider-track-high" style="right: 0px; width: 40%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 60%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$60</div></div><div class="tooltip tooltip-min top" role="presentation"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max bottom" role="presentation" style="top: 18px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="60" aria-valuetext="$60" tabindex="0" style="left: 60%;"></div><div class="slider-handle max-slider-handle hide" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" aria-valuetext="$0" tabindex="0" style="left: 0%;"></div></div><input class="input-range" data-slider-id="ex7Slider" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="60" data-slider-handle="square" data-value="60" value="60" style="display: none;">
                                    </div>
                                    <div class="slider-range slider-danger my-5">
                                        <div class="slider slider-horizontal" id="ex8Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 40%;"></div><div class="slider-selection" style="left: 40%; width: 40%;"></div><div class="slider-track-high" style="right: 0px; width: 20%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 60%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$40,80</div></div><div class="tooltip tooltip-min top" role="presentation" style="left: 40%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$40</div></div><div class="tooltip tooltip-max top" role="presentation" style="left: 80%;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$80</div></div><div class="slider-handle min-slider-handle" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="40" aria-valuetext="$40" tabindex="0" style="left: 40%;"></div><div class="slider-handle max-slider-handle" role="slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="80" aria-valuetext="$80" tabindex="0" style="left: 80%;"></div></div><input class="input-range" data-slider-id="ex8Slider" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="40, 80" data-slider-handle="square" data-value="40,80" value="40,80" style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Other Elements -->
            <!----======= End UI Elememnts =======---->
        </div>

    </section>

@endsection