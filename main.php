<?php include("header.php"); ?>
    <h1>Form Data</h1>
    <div class="card">
        <form action="result.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="gtihub" class="form-label">Github</label>
                <input type="text" class="form-control" id="github" name="github">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<?php include("footer.php"); ?>