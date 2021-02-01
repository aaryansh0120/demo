<?php $page = 'contact'; include 'header.php'; ?>

<section class="my-5 pt-5">
    <div class="text-center">
        <h2 class="display-5">Contact Us</h2>
        <hr class="w-25 mx-auto" />
    </div>
    <div class="container formItem">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xxl-8 col-12 mx-auto">
                <form action="userinfo.php" method="post" class="g-3 needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" name="user" class="form-control" placeholder="Enter you name" id="exampleInputName" required>
                        <div class="invalid-feedback">
                          Please enter Your Name.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email id" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <div class="invalid-feedback">
                          Please provide a valid Email.
                        </div>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputMobile" class="form-label">Mobile</label>
                        <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile no" id="exampleInputMobile" required>
                        <div class="invalid-feedback">
                          Please enter your mobile number.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleDataList" class="form-label">Query Type</label>
                        <input class="form-control" name="type" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." required>
                        <datalist id="datalistOptions">
                            <option value="New Consultation"></option>
                            <option value="OPD"></option>
                            <option value="Surgery"></option>
                            <option value="Any Other"></option>
                        </datalist>
                        <div class="invalid-feedback">
                          Please select a Query.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Your Concern</label>
                        <textarea class="form-control" name="comment" placeholder="Enter your Query or concern" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>