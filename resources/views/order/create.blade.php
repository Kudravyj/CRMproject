@extends('layouts.app')

@section('content')
<div class="container">
    <main>
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your cart</span>
                    <span class="badge bg-primary rounded-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <span>THER IS MAP</span>
                    <input type="text" class="form-control" id="getAddress" placeholder="sam">
                </ul>
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" method="post" action="/create">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">First name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="middlename" name="middlename" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="number" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                            <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="+48..">
                            <div class="invalid-feedback">
                                Please enter a valid Number
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
                        </div>

                        <div class="col-md-6">
                            <label for="country" class="form-label">City</label>
                            <select class="form-select" id="city" name="city" required>
                                <option value="">Choose...</option>
                                <option>United States</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>


                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Create new Orders</button>
                </form>
            </div>
        </div>
    </main>
</div>
<script>
    const getAddress = document.getElementById('getAddress');
    const response = fetch('https://api.mapbox.com/geocoding/v5/mapbox.places/${getAddress}.json?access_token=pk.eyJ1IjoicGFya29ub215IiwiYSI6ImNqc3ExaDE5czB6c3Y0M3FsY3czdGx6czUifQ.rAm2SX13KYRiMN6d8MwHCQ&autocomplete=true', {
        method: 'GET'});

    getAddress.addEventListener('change', () => {
            response.then(response => response.json())
            .then(text => console.log(text))
    });

</script>

@endsection
