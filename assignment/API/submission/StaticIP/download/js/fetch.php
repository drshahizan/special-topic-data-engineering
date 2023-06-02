<?php 
$monthly_data = file_get_contents('./data/monthly_data.json');

// Decode JSON data to PHP associative array
$monthly_data = json_decode($monthly_data, true);

// encode the data into json format
$monthly_data = json_encode($monthly_data, JSON_PRETTY_PRINT);
?>
<script src="https://cdn.jsdelivr.net/npm/danfojs@1.1.2/lib/bundle.min.js"></script>
<script>
    var monthly_data = <?php echo $monthly_data; ?>;
    df = new dfd.DataFrame(monthly_data.response.data);
    df.head().print();
</script>
