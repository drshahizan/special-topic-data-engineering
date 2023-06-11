<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include "global/cdn.php";
    ?>  
    <title>Dashboard</title>
</head>
<body>

    <div class="container pt-3">
    <div class="row">
        <?php
            include "global/nav_bar.php";
        ?>
        <div class="col-md-9 pt-5">
            <!-- Content container -->
            <h1>Yearly Data Table</h1>
            <p>Id dolor consectetur et ea cupidatat ea sunt. Cupidatat dolor ad tempor mollit ullamco dolor deserunt esse. Eiusmod occaecat cupidatat voluptate et dolor culpa enim exercitation aute proident elit nostrud nulla non. Veniam nulla velit incididunt nostrud ut Lorem labore et culpa nisi nostrud. Incididunt elit sunt veniam sit do non eu officia deserunt. Eiusmod adipisicing culpa amet anim nostrud.</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Period</th>
                    <th scope="col">Product</th>
                    <th scope="col">Value</th>                 
                    <th scope="col">Unit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once "data/fetch_year.php";
                        $value = $yearly_data['response']['data'];

                        // Number of rows to display per page
                        $rowsPerPage = 10;

                        // Get the total number of rows in the data array
                        $totalRows = count($value);

                        // Get the current page number from the query string or form submission
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;

                        // Calculate the starting index and ending index for the current page
                        $startIndex = ($page - 1) * $rowsPerPage;
                        $endIndex = min($startIndex + $rowsPerPage - 1, $totalRows - 1);
                        
                        for ($i = $startIndex; $i <= $endIndex; $i++){
                            echo "<tr>";
                            echo "<th scope='row'>" . ($i+1) . "</th>";
                            echo "<td>" . $value[$i]['period'] . "</td>";
                            echo "<td>" . $value[$i]['productName'] . "</td>";
                            echo "<td>" . $value[$i]['value'] . "</td>";
                            echo "<td>" . $value[$i]['unitName'] . "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
                </table>
                <!-- Pagination -->
                <?php if ($totalRows > $rowsPerPage) : ?>
                    <ul class="pagination justify-content-center">
                        <?php if ($page > 1) : ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=1">First</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?php echo ($page - 1); ?>">Previous</a>
                            </li>
                        <?php endif; ?>

                        <?php if ($endIndex < $totalRows - 1) : ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?php echo ($page + 1); ?>">Next</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?php echo ceil($totalRows / $rowsPerPage); ?>">Last</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
        </div>
        
    </div>       
    </div>


    
</body>
</html>