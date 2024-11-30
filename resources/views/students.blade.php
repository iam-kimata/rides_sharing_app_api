@include('sidebar')

    <main class="container mt-4">
        <div class="table-data">
            <div class="order">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>Students</h3>
                    <section id="content" class="d-flex">
                        <form class="d-flex">
                            <input type="search" name="search" placeholder="Search student" class="form-control me-2">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </section>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>0784132299</td>
                            <td>johndoe@example.com</td>
                            <td><button class="btn btn-danger btn-sm" onclick="confirm('Are you sure you want to delete this student?');">Delete</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>0654678900</td>
                            <td>janesmith@example.com</td>
                            <td><button class="btn btn-danger btn-sm" onclick="confirm('Are you sure you want to delete this student?');">Delete</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</section>
