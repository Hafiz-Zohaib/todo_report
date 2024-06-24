<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Add New User</div>
        </div>
        <div class="card radius-10 w-50 mx-auto">
            <div class="card-body">
                <form method="POST" action="user/save_user.php">
                <div class="mb-3">
                        <label for="yn" class="form-label">Name</label>
                        <input type="text" class="form-control" id="yn" name="Name" required>
                    </div>
                  
                    <div class="mb-3">
                        
                        <label for="bn" class="form-label">PAssword </label>
                        <textarea class="form-control"></textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Add Newn Users</button>
                </form>
            </div>
        </div>
    </div>
</div>
