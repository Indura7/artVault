<!DOCTYPE html>
<html lang="en">
<?php include '../includes/header.php' ?>
<body>
<?php include '../includes/navbar.php';
include '../config/db_config.php';
$cat_query = "SELECT * FROM category ORDER BY category_name ASC";
$cat_result = $conn->query($cat_query);
?>

<h1>Upload your Masterpeice</h1>

<div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-10">
                
                <form action="upload_process.php" method="POST" enctype="multipart/form-data" class="card p-4 p-md-5 upload-card">
                    
                    <div class="mb-4">
                        <h2 class="fw-bold text-primary mb-1">Artwork Details</h2>
                        <p class="text-muted small">Provide the foundational metadata for your creative work.</p>
                    </div>

                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="title" class="form-label">Title of Artwork</label>
                            <input type="text" class="form-control px-3 py-2" id="title" name="title" placeholder="e.g. The river - pencil art" required>
                        </div>
                        <div class="col-md-6">
                            <label for="category_id" class="form-label">Category</label>
                            <select class="form-select px-3 py-2" id="category_id" name="category_id" required>
                                <option value="" selected disabled>Select Category</option>
                                <?php 
                                if ($cat_result && $cat_result->num_rows > 0) {
                                    while($row = $cat_result->fetch_assoc()) {
                                        echo "<option value='".htmlspecialchars($row['category_id'])."'>".htmlspecialchars($row['category_name'])."</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label d-block text-center mb-2">Upload Your Artwork Picture</label>

                        <div class="drag-drop-zone p-4 text-center position-relative">
                            <i class="fa-solid fa-mountain-sun text-primary fs-1 mb-2 text-muted" style="color:#2563eb !important;"></i>
                            <p class="fw-semibold mb-1 text-dark">Drag and drop image here</p>
                            <span class="text-muted small d-block">Supported formats: JPEG, PNG.</span>
                            <span class="text-muted small d-block mb-3">Max file size: 5MB</span>
                            
                            <span class="btn btn-sm btn-outline-secondary px-3 rounded-pill pointer-events-none">
                                Browse File
                            </span>
                            
                            <input type="file" id="artwork_image" name="artwork_image" accept=".jpg, .jpeg, .png" class="position-absolute top-0 start-0 w-100 h-100 opacity-0" style="cursor: pointer;" required onchange="previewFile();">
                        </div>
                        
                        <div id="imagePreviewContainer" class="mt-3 text-center d-none">
                            <img id="imagePreview" src="#" alt="Artwork Preview" class="img-thumbnail" style="max-height: 200px;">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control p-3" id="description" name="description" rows="4" placeholder="Describe the inspiration, techniques, and narrative behind this piece..." required></textarea>
                    </div>

                    <div class="row align-items-end justify-content-between g-3 mb-4">
                        <div class="col-sm-5">
                            <label for="price" class="form-label">Price (LKR)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0 text-muted fw-semibold">LKR</span>
                                <input type="number" step="0.01" min="0.00" class="form-control border-start-0 ps-1" id="price" name="price" placeholder="0.00" required>
                            </div>
                        </div>
                        
                        <div class="col-sm-7 d-flex justify-content-sm-end gap-3 mt-4 mt-sm-0">
                            <a href="<?php echo BASE_URL; ?>index.php" class="btn btn-light border px-4 py-2 rounded-pill fw-semibold text-muted small d-flex align-items-center gap-2">
                                CANCEL <i class="fa-regular fa-circle-xmark"></i>
                            </a>
                            <button type="submit" class="btn btn-gradient text-white px-4 py-2 rounded-pill fw-semibold small d-flex align-items-center gap-2">
                                SUBMIT FOR APPROVAL <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

    



    <script>
    function previewFile() {
    const fileInput = document.getElementById('artwork_image');
    const preview = document.getElementById('imagePreview');
    const container = document.getElementById('imagePreviewContainer');
    const file = fileInput.files[0];
    const maxSizeBytes = 5 * 1024 * 1024; 
    const allowedExtensions = ['image/jpeg', 'image/jpg', 'image/png'];

    if (file) {
        
        if (!allowedExtensions.includes(file.type)) {
            alert("Error: Invalid file format! Only JPG, JPEG, and PNG files are allowed.");
            fileInput.value = "";
            container.classList.add('d-none');
            return; 
        }

        if (file.size > maxSizeBytes) {
            alert("Error: File is too large! Maximum limit is 5MB.");
            fileInput.value = ""; 
            container.classList.add('d-none'); 
            return; 
        }

        
        const reader = new FileReader();

        reader.addEventListener("load", function () {
            preview.src = reader.result;
            container.classList.remove('d-none'); 
        }, false);

        reader.readAsDataURL(file);
    }
}
</script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->


<?php include '../includes/footer.php' ?>
</body>
</html>