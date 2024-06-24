<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Add New User</div>
        </div>
        <div class="card radius-10 w-50 mx-auto">
            <div class="card-body">
                <form method="POST" action="user/save_user.php">
                <div class="mb-3">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required>
                    </div>
                  
                    <div class="mb-3">
                        
                    <label for="designation">Designation:</label><br>
                    <input type="text" id="designation" name="designation" required>
                    </div>

                    <div class="mb-3">
                        
                    <label for="emp_id">Employee ID:</label><br>
                    <input type="text" id="emp_id" name="emp_id" required>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Add User</button>
                </form>
            </div>
        </div>
    </div>
</div>
