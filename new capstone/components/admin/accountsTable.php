<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Accounts</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Prem Shahi</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="dashboard-boxes table">
        <div class="recent-dashboard box">
            <div class="headerTable">
                <div class="title d-inline-flex">Accounts Record</div>
                <button class="btn btn-primary newAccountBtn d-inline-flex" type="submit" data-bs-toggle="modal" data-bs-target="#newAccount" id="addAccount">Add Account</button>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">User No.</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact No.</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Sex</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td scope="row">1</td>
                    <td>Pic</td>
                    <td>Mark Lester Cuevo</td>
                    <td>Brgy. Pamaldan</td>
                    <td>09771860610</td>
                    <td>03-07-2022</td>
                    <td>male</td>
                    <td>gg@gmail.com</td>
                    <td>username_hehe</td>
                    <td>password_lol</td>
                    <td>
                        <a href="#" title="Edit" class="mr-3 " data-bs-target="#editAccount" data-bs-toggle="modal"><i class='bx bx-edit'></i></a>
                        <a href="#" title="Archive" class="mr-3 text-warning"><i class='bx bx-archive-in'></i></a>
                        <a href="#" title="Delete" class="mr-3 text-danger" ><i class='bx bxs-trash' ></i></a>
                    </td>
                </tbody>
            </table> 
            
            <nav aria-label="Page navigation example mb-5" id="pagination">
                <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
                </ul>
            </nav>

            </div>
        </div>
    </div>
</section>