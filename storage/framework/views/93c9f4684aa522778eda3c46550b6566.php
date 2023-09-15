//
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Laravel 9 Country State City Dropdown Using AJAX</title>
    </head>
    <body>
    <div class="container mt-4">
        <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Laravel 9 Country State City Dropdown Using AJAX</h2>
            <form>
            <div class="form-group mb-3">
                <select id="country-dd" class="form-control">
                <option value="">Select Country</option>
                <?php $__currentLoopData = $counteries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->name); ?>"><?php echo e($data->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group mb-3">
                <select id="state-dd" class="form-control"></select>
            </div>
            <div class="form-group mb-3">
                <select id="city-dd" class="form-control"></select>
            </div>
            </form>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#country-dd').change(function(event) {
            var idCountry = this.value;
            $('#state-dd').html('');
 
            $.ajax({
            url: "/api/fetch-state",
            type: 'POST',
            dataType: 'json',
            data: {country_id: idCountry,_token:"<?php echo e(csrf_token()); ?>"},
            success:function(response){
                $('#state-dd').html('<option value="">Select State</option>');
                $.each(response.states,function(index, val){
                $('#state-dd').append('<option value="'+val.id+'"> '+val.name+' </option>')
                });
                $('#city-dd').html('<option value="">Select City</option>');
            }
            })
        });
        $('#state-dd').change(function(event) {
            var idState = this.value;
            $('#city-dd').html('');
            $.ajax({
            url: "/api/fetch-cities",
            type: 'POST',
            dataType: 'json',
            data: {state_id: idState,_token:"<?php echo e(csrf_token()); ?>"},
            success:function(response){
                $('#city-dd').html('<option value="">Select State</option>');
                $.each(response.cities,function(index, val){
                $('#city-dd').append('<option value="'+val.id+'"> '+val.name+' </option>')
                });
            }
            })
        });
        });
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\final-project\resources\views/dropdown.blade.php ENDPATH**/ ?>