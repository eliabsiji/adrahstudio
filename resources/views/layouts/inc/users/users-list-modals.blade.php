
    <!-- showModal -->
    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <h5 class="modal-title" id="exampleModalLabel">Add Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-ordermodal"></button>
                </div>
                <form class="tablelist-form"  onsubmit="return show();" novalidate autocomplete="off">
                    <div class="modal-body">
                        <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                        <input type="hidden" id="id-field" >
                        <div class="mb-3">
                            <label for="customername-field" class="form-label">Customer Name</label>
                            <input type="text" id="customername-field" class="form-control" placeholder="Enter name" required >
                        </div>

                        <div class="mb-3">
                            <label for="productname-field" class="form-label">Product</label>
                            <select class="form-control" data-trigger name="productname-field" id="productname-field" required >
                                <option value="">Product</option>
                                <option value="Cotton collar t-shirts for men">Cotton collar t-shirts for men</option>
                                <option value="Like style travel black handbag">Like style travel black handbag</option>
                                <option value="Fossil gen 5E smart watch">Fossil gen 5E smart watch</option>
                                <option value="Super bass bluetooth wireless headphone">Super bass bluetooth wireless headphone</option>
                                <option value="Willage volleyball ball size 4">Willage volleyball ball size 4</option>
                                <option value="Branded T-Shirts">Branded T-Shirts</option>
                                <option value="Flip-Flops and house slippers">Flip-Flops and house slippers</option>
                                <option value="Jeans blue men boxer">Jeans blue men boxer</option>
                                <option value="MAG back to the future shoes">MAG back to the future shoes</option>
                                <option value="Super bass bluetooth wireless headphone">Super bass bluetooth wireless headphone</option>
                            </select>
                        </div>
    
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="date-field" class="form-label">Order Date</label>
                                    <input type="date" id="date-field" class="form-control"  required >
                                </div>
                                <div class="mb-3">
                                    <label for="shopName-input" class="form-label">Shop</label>
                                    <input type="text" id="shopName-input" class="form-control" placeholder="Enter shop name" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <label class="form-label mb-3">User Picture</label>
                                <div class="text-center mb-3">
                                    <div class="position-relative d-inline-block">
                                        <div class="position-absolute top-100 start-100 translate-middle">
                                            <label for="companyLogo-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select company logo">
                                                <span class="avatar-xs d-inline-block">
                                                    <span class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                        <i class="ri-image-fill"></i>
                                                    </span>
                                                </span>
                                            </label>
                                            <input class="form-control d-none" id="companyLogo-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                        </div>
                                        <div class="avatar-lg">
                                            <div class="avatar-title bg-light rounded-3">
                                                <img src="{{ asset('html/layouts/assets/images/users/multi-user.jpg') }}" alt="" id="companyLogo-img" class="avatar-md h-auto rounded-3 object-fit-cover">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row gy-4 mb-3">
                            <div class="col-md-6">
                                <div>
                                    <label for="amount-field" class="form-label">Amount</label>
                                    <input type="text" id="amount-field" class="form-control" placeholder="Total amount" required >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="payment-field" class="form-label">Payment Method</label>
                                    <select class="form-control" data-trigger name="payment-method" required id="payment-field">
                                        <option value="">Payment Method</option>
                                        <option value="Mastercard">Mastercard</option>
                                        <option value="Visa">Visa</option>
                                        <option value="COD">COD</option>
                                        <option value="Paypal">Paypal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
    
                        <div>
                            <label for="delivered-status" class="form-label">Delivery Status</label>
                            <select class="form-control" data-trigger name="delivered-status" required id="delivered-status">
                                <option value="">Delivery Status</option>
                                <option value="New">New</option>
                                <option value="Pending">Pending</option>
                                <option value="Out of Delivered">Out of Delivered</option>
                                <option value="Shipping">Shipping</option>
                                <option value="Delivered">Delivered</option>
                            </select>
                        </div>
                        <input type="hidden" id="delivery-status-field" >
                        <input type="hidden" id="rating-field" >
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="add-btn">Add Order</button>
                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end showModal -->


    
<!-- deleteRecordModal -->
<div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-md-5">
                <div class="text-center">
                    <div class="text-danger">
                        <i class="bi bi-trash display-5"></i>
                    </div>
                    <div class="mt-4">
                        <h4 class="mb-2">Are you sure ?</h4>
                        <p class="text-muted mx-3 mb-0">Are you sure you want to remove this record ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 pt-2 mb-2">
                    <button type="button" class="btn w-sm btn-light btn-hover" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-record">Yes, Delete It!</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /deleteRecordModal -->