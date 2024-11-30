@include('sidebar')

    <main class="container mt-4">
        <div class="table-data">
            <div class="order">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>Available Routes</h3>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createRouteModal">+ Add New Route</button>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Starting Point</th>
                            <th>Destination Point</th>
                            <th>Taxi Price (Tsh)</th>
                            <th>Bajaji Price (Tsh)</th>
                            <th>XL Price (Tsh)</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Makongo</td>
                            <td>Ardhi University</td>
                            <td>2000</td>
                            <td>1500</td>
                            <td>2500</td>
                            <td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="/editTrip" class="btn btn-warning btn-sm">Update</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Makumbusho</td>
                            <td>Ardhi University</td>
                            <td>3000</td>
                            <td>2000</td>
                            <td>3500</td>
                            <td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="/editTrip" class="btn btn-warning btn-sm">Update</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <div class="modal fade" id="createRouteModal" tabindex="-1" aria-labelledby="createRouteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100 fs-3" id="createRouteModalLabel">Create Route</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="starting_point" class="form-label">Starting Point</label>
                            <input type="text" class="form-control" id="starting_point" placeholder="Enter Starting Point">
                        </div>
                        <div class="mb-3">
                            <label for="destination_point" class="form-label">Destination Point</label>
                            <input type="text" class="form-control" id="destination_point" placeholder="Enter Destination Point">
                        </div>
                        <div class="mb-3">
                            <label for="taxi_price" class="form-label">Taxi Price</label>
                            <input type="text" class="form-control" id="taxi_price" placeholder="Enter Taxi Price">
                        </div>
                        <div class="mb-3">
                            <label for="bajaji_price" class="form-label">Bajaji Price</label>
                            <input type="text" class="form-control" id="bajaji_price" placeholder="Enter Bajaji Price">
                        </div>
                        <div class="mb-3">
                            <label for="xl_price" class="form-label">XL Price</label>
                            <input type="text" class="form-control" id="xl_price" placeholder="Enter XL Price">
                        </div>
                        <button type="submit" class="btn btn-success w-100">Add Route</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
