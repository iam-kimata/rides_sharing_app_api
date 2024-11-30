@include('sidebar')

    <main class="container">
        <div class="content">
            <div class="update-form">
                <div class="container-2">
                    <h3 class="form-title text-center">Update Route</h3>
                    <form>
                        <div class="mb-3">
                            <label for="starting_point" class="form-label">Starting Point</label>
                            <input type="text" id="starting_point" class="form-control" placeholder="Enter Starting Point" value="Makumbusho">
                        </div>
                        <div class="mb-3">
                            <label for="destination_point" class="form-label">Destination Point</label>
                            <input type="text" id="destination_point" class="form-control" placeholder="Enter Destination Point" value="Ardhi University">
                        </div>
                        <div class="mb-3">
                            <label for="taxi_price" class="form-label">Taxi Price</label>
                            <input type="text" id="taxi_price" class="form-control" placeholder="Enter Taxi Price" value="3000">
                        </div>
                        <div class="mb-3">
                            <label for="bajaji_price" class="form-label">Bajaji Price</label>
                            <input type="text" id="bajaji_price" class="form-control" placeholder="Enter Bajaji Price"  value="2500">
                        </div>
                        <div class="mb-3">
                            <label for="xl_price" class="form-label">XL Price</label>
                            <input type="text" id="xl_price" class="form-control" placeholder="Enter XL Price" value="3500">
                        </div>
                        <button type="button" class="btn btn-success w-100">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</section>
