@include('sidebar')

    <main>
        <ul class="box-info">
            <li>
                <i class="bi bi-people-fill"></i>
                <span class="text">
                    <h4>120</h4>
                    <p>Total Students</p>
                </span>
            </li>
            <li>
                <i class="bi bi-people-fill"></i>
                <span class="text">
                    <h4>80</h4>
                    <p>Total Drivers</p>
                </span>
            </li>
            <li>
                <i class="bi bi-credit-card"></i>
                <span class="text">
                    <h4>200</h4>
                    <p>Total Requests</p>
                </span>
            </li>
        </ul>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Requests</h3>
                </div>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>S/N</th>
                            <th>Student Name</th>
                            <th>Pick up Point</th>
                            <th>Destination Point</th>
                            <th>Price (Tsh)</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>Makongo</td>
                            <td>Ardhi University</td>
                            <td>1500</td>
                            <td>2024-11-24</td>
                            <td class="text-success">Accepted</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>Makumbusho</td>
                            <td>Ardhi University</td>
                            <td>3000</td>
                            <td>2024-11-23</td>
                            <td class="text-warning">Pending</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Alex Brown</td>
                            <td>Mwenge</td>
                            <td>Ardhi University</td>
                            <td>2000</td>
                            <td>2024-11-22</td>
                            <td class="text-danger">Rejected</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</section>
